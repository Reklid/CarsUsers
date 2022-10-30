<?php

namespace Tests\Feature\Controllers\API;

use App\Models\Car;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
	use WithFaker;

    public function test_index()
    {
        $response = $this->getJson(route('users.index'));
        $response->assertStatus(200);
    }

	public function test_show()
	{
		$user = User::query()->first();

        $response = $this->getJson(route('users.show', ['user' => $user->id]));
        $response->assertStatus(200);

        $response->assertJsonFragment([
            'name' => $user->name,
            'email' => $user->email,
		]);
	}

	public function test_store()
	{
		$payload = [
			'name' => $this->faker->word,
			'email' => $this->faker->email,
			'password' => $this->faker->password
		];

		$response = $this->postJson(route('users.store'), $payload);
		$response->assertStatus(204);

		$this->assertDatabaseHas('users', [
			'name' => $payload['name'],
			'email' => $payload['email'],
			'password' => $payload['password'],
		]);
	}

	public function test_update()
	{
		$user = User::query()->first();

		$payload = [
			'name' => $this->faker->word,
			'email' => $this->faker->email,
			'password' => $this->faker->password
		];

		$response = $this->putJson(route('users.update', ['user' => $user->id]), $payload);
		$response->assertStatus(204);

		$this->assertDatabaseHas('users', [
			'id' => $user->id,
			'name' => $payload['name'],
			'email' => $payload['email'],
			'password' => $payload['password'],
		]);
	}

	public function test_destroy()
	{
		$user = User::query()->first();

		$response = $this->deleteJson(route('users.destroy', ['user' => $user->id]));
		$response->assertStatus(204);

		$this->assertDatabaseMissing('users', [
			'id' => $user->id
		]);
	}

	public function test_add_user()
	{
		$car = Car::query()->first();
		$user = User::query()->first();

		$response = $this->postJson(route('users.add-car', ['user' => $user->id, 'car' => $car->id]));
		$response->assertStatus(204);

		$this->assertDatabaseHas('users', [
			'id' => $car->id,
			'car_id' => $car->id
		]);
	}

	public function test_add_car_error()
	{
		$car = Car::query()->find(1);
		$user1 = User::query()->find(1);

		$response = $this->postJson(route('users.add-car', ['user' => $user1->id, 'car' => $car->id]));
		$response->assertStatus(204);

		$user2 = User::query()->find(2);

		$response = $this->postJson(route('users.add-car', ['user' => $user2->id, 'car' => $car->id]));
		$response->assertStatus(422);
	}
}

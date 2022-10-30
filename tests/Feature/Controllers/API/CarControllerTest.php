<?php

namespace Tests\Feature\Controllers\API;

use App\Models\Car;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CarControllerTest extends TestCase
{
	use WithFaker;

    public function test_index()
    {
        $response = $this->getJson(route('cars.index'));
        $response->assertStatus(200);
    }

	public function test_show()
	{
		$car = Car::query()->first();

        $response = $this->getJson(route('cars.show', ['car' => $car->id]));
        $response->assertStatus(200);

        $response->assertJsonFragment([
            'name' => $car->name,
            'color' => $car->color,
		]);
	}

	public function test_store()
	{
		$payload = [
			'name' => $this->faker->word,
			'color' => $this->faker->colorName
		];

		$response = $this->postJson(route('cars.store'), $payload);
		$response->assertStatus(204);

		$this->assertDatabaseHas('cars', [
			'name' => $payload['name'],
			'color' => $payload['color'],
		]);
	}

	public function test_update()
	{
		$car = Car::query()->first();

		$payload = [
			'name' => $this->faker->word,
			'color' => $this->faker->colorName
		];

		$response = $this->putJson(route('cars.update', ['car' => $car->id]), $payload);
		$response->assertStatus(204);

		$this->assertDatabaseHas('cars', [
			'id' => $car->id,
			'name' => $payload['name'],
			'color' => $payload['color'],
		]);
	}

	public function test_destroy()
	{
		$car = Car::query()->first();

		$response = $this->deleteJson(route('cars.destroy', ['car' => $car->id]));
		$response->assertStatus(204);

		$this->assertDatabaseMissing('cars', [
			'id' => $car->id
		]);
	}

	public function test_add_user()
	{
		$car = Car::query()->first();
		$user = User::query()->first();

		$response = $this->postJson(route('cars.add-user', ['car' => $car->id, 'user' => $user->id]));
		$response->assertStatus(204);

		$this->assertDatabaseHas('cars', [
			'id' => $car->id,
			'user_id' => $user->id
		]);
	}

	public function test_add_user_error()
	{
		$car1 = Car::query()->find(1);
		$user = User::query()->find(1);

		$response = $this->postJson(route('cars.add-user', ['car' => $car1->id, 'user' => $user->id]));
		$response->assertStatus(204);

		$car2 = Car::query()->find(2);

		$response = $this->postJson(route('cars.add-user', ['car' => $car2->id, 'user' => $user->id]));
		$response->assertStatus(422);
	}
}

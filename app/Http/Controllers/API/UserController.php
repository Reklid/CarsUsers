<?php

namespace App\Http\Controllers\API;

use App\Docs\API\UserControllerDoc;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
	use UserControllerDoc;

    public function index()
	{
		return Response::json(User::all());
	}

	public function show(User $user)
	{
		return Response::json($user);
	}

	public function store(UserRequest $request)
	{
		User::query()->create($request->validated());

		return Response::noContent();
	}

	public function update(User $user, UserRequest $request)
	{
		$user->update($request->validated());

		return Response::noContent();
	}

	public function destroy(User $user)
	{
		$user->delete();

		return Response::noContent();
	}

	public function addCar(User $user, Car $car)
	{
		$existCar = User::query()->where('car_id', '=', $car->id)->exists();
		if ($existCar || !is_null($car->user_id)) return Response::json('У этой машины уже имеется владелец', 422);

		$user->update(['car_id' => $car->id]);
		$car->update(['user_id' => $user->id]);

		return Response::noContent();
	}
}

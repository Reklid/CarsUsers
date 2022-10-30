<?php

namespace App\Http\Controllers\API;

use App\Docs\API\CarControllerDoc;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Response;

class CarController extends Controller
{
	use CarControllerDoc;

    public function index()
	{
		return Response::json(Car::all());
	}

	public function show(Car $car)
	{
		return Response::json($car);
	}

	public function store(CarRequest $request)
	{
		Car::query()->create($request->validated());

		return Response::noContent();
	}

	public function update(Car $car, CarRequest $request)
	{
		$car->update($request->validated());

		return Response::noContent();
	}

	public function destroy(Car $car)
	{
		$car->delete();

		return Response::noContent();
	}

	public function addUser(Car $car, User $user)
	{
		$existUser = Car::query()->where('user_id', '=', $user)->exists();
		if ($existUser || !is_null($user->car_id)) return Response::json('У этого пользователя уже имеется автомобиль', 422);

		$car->update(['user_id' => $user->id]);
		$user->update(['car_id' => $car->id]);

		return Response::noContent();
	}
}

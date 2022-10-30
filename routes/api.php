<?php

use App\Http\Controllers\API\CarController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/users', UserController::class);
Route::post('/users/{user}/add-car/{car}', [UserController::class, 'addCar'])->name('users.add-car');

Route::apiResource('/cars', CarController::class);
Route::post('/cars/{car}/add-user/{user}', [CarController::class, 'addUser'])->name('cars.add-user');

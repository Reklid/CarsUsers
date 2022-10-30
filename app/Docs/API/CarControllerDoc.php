<?php

namespace App\Docs\API;

trait CarControllerDoc
{
    /**
     * @see \App\Http\Controllers\API\CarController::index
     *
     * @OA\Get(
     *     path="/api/cars",
     *     summary="Возвращает список автомобилей",
     *     description="Возвращает список автомобилей",
     *     operationId="index",
     *     tags={"Автомобили"},
     *     @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="array",
	 *              @OA\Items(
	 *              	@OA\Property(
	 * 			    	    property="id",
	 * 			    	    title="ID",
	 * 			    	    description="ID автомобиля",
	 * 			    	    type="integer",
	 * 			    	    example=1,
	 * 			    	),
	 *              	@OA\Property(
	 * 			    	    property="name",
	 * 			    	    title="Name",
	 * 			    	    description="Название автомобиля",
	 * 			    	    type="string",
	 * 			    	    example="Toyota",
	 * 			    	),
	 *              	@OA\Property(
	 * 			    	    property="color",
	 * 			    	    title="Сolor",
	 * 			    	    description="Цвет автомобиля",
	 * 			    	    type="string",
	 * 			    	    example="LightPink",
	 * 			    	),
	 *              	@OA\Property(
	 * 			    	    property="user_id",
	 * 			    	    title="user_id",
	 * 			    	    description="ID владельца автомобиля",
	 * 			    	    type="integer",
	 * 			    	    example=5,
	 * 			    	),
	 *              	@OA\Property (
	 * 					    property="created_at",
	 * 					    title="Дата создания",
	 * 					    description="Дата создания автомобиля",
	 * 					    type="string",
	 * 					    example="2022-03-25 00:00:00",
	 * 					),
	 * 					@OA\Property (
	 * 					    property="updated_at",
	 * 					    title="Дата последнего обновления",
	 * 					    description="Дата последнего обновления автомобиля",
	 * 					    type="string",
	 * 					    example="2022-03-25 00:00:00",
	 * 					)
	 *              )
     *          )
     *     ),
     * )
     */

	/**
	 * @see \App\Http\Controllers\API\CarController::show
	 *
	 * @OA\Get(
	 *     path="/api/cars/{id}",
	 *     summary="Возвращает автомобиль по его id",
	 *     description="Возвращает автомобиль по его id",
	 *     operationId="show",
	 *     tags={"Автомобили"},
	 *     @OA\Parameter(
	 *         name="id",
	 *         description="ID автомобиля",
	 *         required=true,
	 *         in="path",
	 *         @OA\Schema(
	 *             type="integer"
	 *         )
	 *     ),
	 *     @OA\Response(
	 *          response=200,
	 *          description="successful operation",
	 *          @OA\JsonContent(
	 *              type="object",
	 *              @OA\Property(
	 * 			        property="id",
	 * 			        title="ID",
	 * 			        description="ID автомобиля",
	 * 			        type="integer",
	 * 			        example=1,
	 * 			    ),
	 *              @OA\Property(
	 * 			        property="name",
	 * 			        title="Name",
	 * 			        description="Название автомобиля",
	 * 			        type="string",
	 * 			        example="Toyota",
	 * 			    ),
	 *              @OA\Property(
	 * 			        property="color",
	 * 			        title="Сolor",
	 * 			        description="Цвет автомобиля",
	 * 			        type="string",
	 * 			        example="LightPink",
	 * 			    ),
	 *              @OA\Property(
	 * 			        property="user_id",
	 * 			        title="user_id",
	 * 			        description="ID владельца автомобиля",
	 * 			        type="integer",
	 * 			        example=5,
	 * 			    ),
	 *              @OA\Property (
	 * 				    property="created_at",
	 * 				    title="Дата создания",
	 * 				    description="Дата создания автомобиля",
	 * 				    type="string",
	 * 				    example="2022-03-25 00:00:00",
	 * 				),
	 * 				@OA\Property (
	 * 				    property="updated_at",
	 * 				    title="Дата последнего обновления",
	 * 				    description="Дата последнего обновления автомобиля",
	 * 				    type="string",
	 * 				    example="2022-03-25 00:00:00",
	 * 				)
	 *          )
	 *     ),
	 * )
	 */

	/**
	 * @see \App\Http\Controllers\API\CarController::store
	 *
	 * @OA\Post(
	 *     path="/api/cars",
	 *     summary="Создание нового автомобиля",
	 *     description="Создание нового автомобиля",
	 *     operationId="store",
	 *     tags={"Автомобили"},
	 *	   @OA\RequestBody(
	 *          required=true,
	 *          @OA\MediaType(
	 *              mediaType="application/json",
	 *              @OA\Schema(
	 *                  type="object",
	 *                  required={"name","color"},
	 *                  @OA\Property(
	 *                      property="name",
	 *                      type="string",
	 *                      default="Steeve Jones",
	 *                      description="Имя автомобиля"
	 *                  ),
	 *                  @OA\Property(
	 *                      property="color",
	 *                      type="string",
	 *                      default="LightGreen",
	 *                      description="Цвет автомобиля"
	 *                  )
	 *              )
	 *          )
	 *     ),
	 *     @OA\Response(
	 *          response=204,
	 *          description="No Content"
	 *     ),
	 * )
	 */

	/**
	 * @see \App\Http\Controllers\API\CarController::update
	 *
	 * @OA\Put(
	 *     path="/api/cars/{id}",
	 *     summary="Обновляет автомобиля по его id",
	 *     description="Обновляет автомобиля по его id",
	 *     operationId="update",
	 *     tags={"Автомобили"},
	 *     @OA\Parameter(
	 *         name="id",
	 *         description="ID автомобиля",
	 *         required=true,
	 *         in="path",
	 *         @OA\Schema(
	 *             type="integer"
	 *         )
	 *     ),
	 *     @OA\RequestBody(
	 *          required=true,
	 *          @OA\MediaType(
	 *              mediaType="application/json",
	 *              @OA\Schema(
	 *                  type="object",
	 *                  required={"name","color"},
	 *                  @OA\Property(
	 *                      property="name",
	 *                      type="string",
	 *                      default="Steeve Jones",
	 *                      description="Имя автомобиля"
	 *                  ),
	 *                  @OA\Property(
	 *                      property="color",
	 *                      type="string",
	 *                      default="LightGreen",
	 *                      description="Цвет автомобиля"
	 *                  )
	 *              )
	 *          )
	 *     ),
	 *     @OA\Response(
	 *          response=204,
	 *          description="No Content"
	 *     ),
	 * )
	 */

	/**
	 * @see \App\Http\Controllers\API\CarController::addUser
	 *
	 * @OA\Post(
	 *     path="/api/cars/{car_id}/add-user/{user_id}",
	 *     summary="Добавление владельца к автомобилю",
	 *     description="Добавление владельца к автомобилю",
	 *     operationId="addUser",
	 *     tags={"Автомобили"},
	 *     @OA\Parameter(
	 *         name="car_id",
	 *         description="ID автомобиля",
	 *         required=true,
	 *         in="path",
	 *         @OA\Schema(
	 *             type="integer"
	 *         )
	 *     ),
	 *     @OA\Parameter(
	 *         name="user_id",
	 *         description="ID владельца",
	 *         required=true,
	 *         in="path",
	 *         @OA\Schema(
	 *             type="integer"
	 *         )
	 *     ),
	 *     @OA\Response(
	 *          response=204,
	 *          description="No Content"
	 *     ),
	 *     @OA\Response(
	 *          response=422,
	 *          description="Unprocessable Entity"
	 *     ),
	 * )
	 */
}

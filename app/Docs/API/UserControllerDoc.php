<?php

namespace App\Docs\API;

trait UserControllerDoc
{
    /**
     * @see \App\Http\Controllers\API\UserController::index
     *
     * @OA\Get(
     *     path="/api/users",
     *     summary="Возвращает список владельцев",
     *     description="Возвращает список владельцев",
     *     operationId="index",
     *     tags={"Владельцы"},
     *     @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="array",
	 *              @OA\Items(
	 *              	@OA\Property(
	 * 			    	    property="id",
	 * 			    	    title="ID",
	 * 			    	    description="ID владельца",
	 * 			    	    type="integer",
	 * 			    	    example=1,
	 * 			    	),
	 *              	@OA\Property(
	 * 			    	    property="name",
	 * 			    	    title="Name",
	 * 			    	    description="Имя владельца",
	 * 			    	    type="string",
	 * 			    	    example="Thomas Huels",
	 * 			    	),
	 *              	@OA\Property(
	 * 			    	    property="email",
	 * 			    	    title="Email",
	 * 			    	    description="Email адрес владельца",
	 * 			    	    type="string",
	 * 			    	    example="block.gail@example.org",
	 * 			    	),
	 *              	@OA\Property(
	 * 			    	    property="email_verified_at",
	 * 			    	    title="email_verified_at",
	 * 			    	    description="Дата верификации Email адреса владельца",
	 * 			    	    type="string",
	 * 			    	    example="2022-03-25 00:00:00",
	 * 			    	),
	 *              	@OA\Property(
	 * 			    	    property="car_id",
	 * 			    	    title="car_id",
	 * 			    	    description="ID автомобиля владельца",
	 * 			    	    type="integer",
	 * 			    	    example=5,
	 * 			    	),
	 *              	@OA\Property (
	 * 					    property="created_at",
	 * 					    title="Дата создания",
	 * 					    description="Дата создания владельца",
	 * 					    type="string",
	 * 					    example="2022-03-25 00:00:00",
	 * 					),
	 * 					@OA\Property (
	 * 					    property="updated_at",
	 * 					    title="Дата последнего обновления",
	 * 					    description="Дата последнего обновления владельца",
	 * 					    type="string",
	 * 					    example="2022-03-25 00:00:00",
	 * 					),
	 *              )
     *          )
     *     ),
     * )
     */

	/**
	 * @see \App\Http\Controllers\API\UserController::show
	 *
	 * @OA\Get(
	 *     path="/api/users/{id}",
	 *     summary="Возвращает владельца по его id",
	 *     description="Возвращает владельца по его id",
	 *     operationId="show",
	 *     tags={"Владельцы"},
	 *     @OA\Parameter(
	 *         name="id",
	 *         description="ID владельца",
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
	 * 			        description="ID владельца",
	 * 			        type="integer",
	 * 			        example=1,
	 * 			    ),
	 *              @OA\Property(
	 * 			        property="name",
	 * 			        title="Name",
	 * 			        description="Имя владельца",
	 * 			        type="string",
	 * 			        example="Thomas Huels",
	 * 			    ),
	 *              @OA\Property(
	 * 			        property="email",
	 * 			        title="Email",
	 * 			        description="Email адрес владельца",
	 * 			        type="string",
	 * 			        example="block.gail@example.org",
	 * 			    ),
	 *              @OA\Property(
	 * 			        property="email_verified_at",
	 * 			        title="email_verified_at",
	 * 			        description="Дата верификации Email адреса владельца",
	 * 			        type="string",
	 * 			        example="2022-03-25 00:00:00",
	 * 			    ),
	 *              @OA\Property(
	 * 			        property="car_id",
	 * 			        title="car_id",
	 * 			        description="ID автомобиля владельца",
	 * 			        type="integer",
	 * 			        example=5,
	 * 			    ),
	 *              @OA\Property (
	 * 				    property="created_at",
	 * 				    title="Дата создания",
	 * 				    description="Дата создания владельца",
	 * 				    type="string",
	 * 				    example="2022-03-25 00:00:00",
	 * 				),
	 * 				@OA\Property (
	 * 				    property="updated_at",
	 * 				    title="Дата последнего обновления",
	 * 				    description="Дата последнего обновления владельца",
	 * 				    type="string",
	 * 				    example="2022-03-25 00:00:00",
	 * 				)
	 *          )
	 *     ),
	 * )
	 */

	/**
	 * @see \App\Http\Controllers\API\UserController::store
	 *
	 * @OA\Post(
	 *     path="/api/users",
	 *     summary="Создание нового владельца",
	 *     description="Создание нового владельца",
	 *     operationId="store",
	 *     tags={"Владельцы"},
	 *	   @OA\RequestBody(
	 *          required=true,
	 *          @OA\MediaType(
	 *              mediaType="application/json",
	 *              @OA\Schema(
	 *                  type="object",
	 *                  required={"name","email"},
	 *                  @OA\Property(
	 *                      property="name",
	 *                      type="string",
	 *                      default="Steeve Jones",
	 *                      description="Имя владельца"
	 *                  ),
	 *                  @OA\Property(
	 *                      property="email",
	 *                      type="string",
	 *                      default="email@email.com",
	 *                      description="Email владельца"
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
	 * @see \App\Http\Controllers\API\UserController::update
	 *
	 * @OA\Put(
	 *     path="/api/users/{id}",
	 *     summary="Обновляет владельца по его id",
	 *     description="Обновляет владельца по его id",
	 *     operationId="update",
	 *     tags={"Владельцы"},
	 *     @OA\Parameter(
	 *         name="id",
	 *         description="ID владельца",
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
	 *                  required={"name","email"},
	 *                  @OA\Property(
	 *                      property="name",
	 *                      type="string",
	 *                      default="Steeve Jones",
	 *                      description="Имя владельца"
	 *                  ),
	 *                  @OA\Property(
	 *                      property="email",
	 *                      type="string",
	 *                      default="email@email.com",
	 *                      description="Email владельца"
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
	 * @see \App\Http\Controllers\API\UserController::addCar
	 *
	 * @OA\Post(
	 *     path="/api/users/{user_id}/add-car/{car_id}",
	 *     summary="Добавление авбомобиля владельцу",
	 *     description="Добавление авбомобиля владельцу",
	 *     operationId="addCar",
	 *     tags={"Владельцы"},
	 *	   @OA\Parameter(
	 *         name="user_id",
	 *         description="ID владельца",
	 *         required=true,
	 *         in="path",
	 *         @OA\Schema(
	 *             type="integer"
	 *         )
	 *     ),
	 *     @OA\Parameter(
	 *         name="car_id",
	 *         description="ID автомобиля",
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

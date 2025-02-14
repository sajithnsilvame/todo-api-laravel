<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class OrderController extends Controller
{
    /**
     * @OA\Get(
     *     path="/order",
     *     tags={"Order"},
     *     summary="Display a listing of the resource",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *     )
     * )
     */
    public function index(): JsonResponse
    {
        //
    }

    /**
     * @OA\Post(
     *     path="/order",
     *     tags={"Order"},
     *     summary="Store a newly created resource in storage",
     *     @OA\RequestBody(
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Resource created successfully",
     *     )
     * )
     */
    public function store(Request $request): JsonResponse
    {
        //
    }

    /**
     * @OA\Get(
     *     path="/order/{id}",
     *     tags={"Order"},
     *     summary="Display the specified resource",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *     )
     * )
     */
    public function show($id): JsonResponse
    {
        //
    }

    /**
     * @OA\Put(
     *     path="/order/{id}",
     *     tags={"Order"},
     *     summary="Update the specified resource in storage",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Resource updated successfully",
     *     )
     * )
     */
    public function update(Request $request, $id): JsonResponse
    {
        //
    }

    /**
     * @OA\Delete(
     *     path="/order/{id}",
     *     tags={"Order"},
     *     summary="Remove the specified resource from storage",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Resource deleted successfully"
     *     )
     * )
     */
    public function destroy($id): JsonResponse
    {
        //
    }
}

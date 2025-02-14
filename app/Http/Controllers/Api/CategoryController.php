<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * @OA\Get(
     *     path="/category",
     *     tags={"Category"},
     *     summary="Display a listing of the resource",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *     )
     * )
     */
    public function index()
    {
        //
    }

    /**
     * @OA\Post(
     *     path="/category",
     *     tags={"Category"},
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
    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\Get(
     *     path="/category/{id}",
     *     tags={"Category"},
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
    public function show($id)
    {
        //
    }

    /**
     * @OA\Put(
     *     path="/category/{id}",
     *     tags={"Category"},
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @OA\Delete(
     *     path="/category/{id}",
     *     tags={"Category"},
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
    public function destroy($id)
    {
        //
    }
}

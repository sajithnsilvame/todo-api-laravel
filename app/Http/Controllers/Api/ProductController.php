<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * @OA\Get(
     *     path="/product",
     *     tags={"Product"},
     *     security={{"bearerAuth": {}}},
     *     @OA\Response(response="200", description="Display a listing of the resource")
     * )
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'List of products retrieved successfully',
            'data' => [
                [
                    'id' => 1,
                    'name' => 'Product A',
                    'price' => 100.50,
                    'stock' => 10
                ],
                [
                    'id' => 2,
                    'name' => 'Product B',
                    'price' => 250.99,
                    'stock' => 5
                ],
                [
                    'id' => 3,
                    'name' => 'Product C',
                    'price' => 75.00,
                    'stock' => 20
                ]
            ]
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/product",
     *     tags={"Product"},
     *     @OA\Response(response="201", description="Store a newly created resource in storage")
     * )
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Product created successfully',
            'data' => $request->all()
        ], 201);
    }

    /**
     * @OA\Get(
     *     path="/product/{id}",
     *     tags={"Product"},
     *     @OA\Response(response="200", description="Display the specified resource")
     * )
     */
    public function show($id): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => "Product with ID {$id} retrieved successfully",
            'data' => ['id' => $id]
        ], 200);
    }

    /**
     * @OA\Put(
     *     path="/product/{id}",
     *     tags={"Product"},
     *     @OA\Response(response="200", description="Update the specified resource in storage")
     * )
     */
    public function update(Request $request, $id): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => "Product with ID {$id} updated successfully",
            'data' => $request->all()
        ], 200);
    }

    /**
     * @OA\Delete(
     *     path="/product/{id}",
     *     tags={"Product"},
     *     @OA\Response(response="204", description="Remove the specified resource from storage")
     * )
     */
    public function destroy($id): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => "Product with ID {$id} deleted successfully"
        ], 204);
    }
}
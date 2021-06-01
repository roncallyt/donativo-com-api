<?php

namespace App\Http\Controllers\Api;

use App\Categoria;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;

class CategoryController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => CategoryResource::collection(Categoria::all())
        ], Response::HTTP_FOUND);
    }

    public function store(CategoryRequest $request): JsonResponse
    {
        Categoria::create($request->validated());

        return response()->json([
            'message' => 'Categoria cadastrada com sucesso.'
        ], Response::HTTP_CREATED);
    }

    public function show(Categoria $category): JsonResponse
    {
        return response()->json([
            'data' => new CategoryResource($category)
        ], Response::HTTP_FOUND);
    }

    public function update(CategoryRequest $request, Categoria $category): JsonResponse
    {
        $category->update($request->validated());

        return response()->json([
            'message' => 'Categoria atualizada com sucesso.'
        ], Response::HTTP_OK);
    }

    public function delete(Categoria $category): JsonResponse
    {
        try {
            $category->delete();
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Ocorreu um erro ao excluir a categoria.'
            ], Response::HTTP_BAD_REQUEST);
        }

        return response()->json([
            'message' => 'Categoria excluída com sucesso.'
        ], Response::HTTP_OK);
    }
}

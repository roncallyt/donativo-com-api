<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Post;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => PostResource::collection(Post::all())
        ], Response::HTTP_FOUND);
    }

    public function store(PostRequest $request): JsonResponse
    {
        $attributes = $request->validated();

        $newName = uniqid(time()) . '.' . $request->image->extension();

        $attributes['image'] = $request->image->storeAs('images', $newName, 'public');

        Post::create($attributes);

        return response()->json([
            'message' => 'Post cadastrado com sucesso.'
        ], Response::HTTP_CREATED);
    }

    public function show(Post $post): JsonResponse
    {
        return response()->json([
            'data' => new PostResource($post)
        ], Response::HTTP_FOUND);
    }

    public function update(PostRequest $request, Post $post): JsonResponse
    {
        $attributes = $request->validated();

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($post->image);

            $newName = uniqid(time()) . '.' . $request->image->extension();

            $attributes['image'] = $request->image->storeAs('images', $newName, 'public');
        }

        $post->update($attributes);

        return response()->json([
            'message' => 'Post atualizado com sucesso.'
        ], Response::HTTP_OK);
    }

    public function delete(Post $post): JsonResponse
    {
        try {
            $post->delete();
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Ocorreu um erro ao excluir o post.'
            ], Response::HTTP_BAD_REQUEST);
        }

        return response()->json([
            'message' => 'Post excluído com sucesso.'
        ], Response::HTTP_OK);
    }
}

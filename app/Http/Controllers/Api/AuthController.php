<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function login(LoginRequest $request): JsonResponse
    {
        if (! Auth::attempt($request->validated())) { // $request->validated() -> ['email' => '', 'password' => '']
            return response()->json([
                'message' => 'Ocorreu um erro ao tentar efetuar o login.'
            ], Response::HTTP_BAD_REQUEST);
        }

        $token = Auth::user()->createToken('api-login'); // Cria o token para o usuário logado

        return response()->json([
            'message' => 'Login efetuado com sucesso.',
            'data' => [
                'token' => $token->plainTextToken // Retorna o token
            ]
        ], Response::HTTP_ACCEPTED);
    }

    public function logout(Request $request): JsonResponse
    {
        Auth::user()->tokens()->delete(); // Revoga todos os tokens do usuário logado

        return response()->json([
            'message' => 'Logout efetuado com sucesso.',
        ], Response::HTTP_OK);
    }
}

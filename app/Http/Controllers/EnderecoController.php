<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EnderecoController extends Controller
{
    public function index(): JsonResponse
    {
        $enderecos = Endereco::all();

        return response()->json([
            'success' => true,
            'data' => $enderecos,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'cep' => 'required|string',
            'rua' => 'required|string',
            'numero' => 'required|string',
            'complemento' => 'nullable|string',
            'cidade' => 'required|string',
            'estado' => 'required|string',
        ]);

        $endereco = Endereco::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Endereço criado com sucesso!',
            'data' => $endereco,
        ]);
    }
}

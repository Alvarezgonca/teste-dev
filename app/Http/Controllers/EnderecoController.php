<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EnderecoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'cep' => 'required|string|max:10',
            'rua' => 'required|string',
            'numero' => 'required|string',
            'complemento' => 'nullable|string',
            'cidade' => 'required|string',
            'estado' => 'required|string',
        ]);

        $endereco = Endereco::create($data);

        return $endereco;
    }
}

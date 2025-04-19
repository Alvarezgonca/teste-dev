<?php

namespace App\Repositories;

use App\Models\Contato;
use App\Models\Endereco;

class EnderecoRepository
{
    // public function getAll()
    // {
    //     return Contato::with('endereco')->paginate(10);
    // }

    public function create($data)
    {
        $endereco = Endereco::create($data);
        return $endereco->id;
    }

    public function update($data)
    {
        $endereco = Endereco::find($data['endereco_id']);
        $endereco->update($data);
        return;
    }

    // public function find($id)
    // {
    //     return Contato::with('endereco')->findOrFail($id);
    // }

    // public function update(Contato $contato, $data)
    // {
    //     $contato->update($data);
    //     return $contato;
    // }

    // public function delete(Contato $contato)
    // {
    //     return $contato->delete();
    // }
}

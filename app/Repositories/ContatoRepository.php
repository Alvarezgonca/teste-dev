<?php

namespace App\Repositories;

use App\Models\Contato;

class ContatoRepository
{
    // public function getAll()
    // {
    //     return Contato::with('endereco')->paginate(10);
    // }

    public function create($data)
    {
        return Contato::create($data);
    }

    public function update($data)
    {
        $contato = Contato::find($data['contato_id']);
        $contato->update($data);
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

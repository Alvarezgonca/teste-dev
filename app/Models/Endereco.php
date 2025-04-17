<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'cep',
        'rua',
        'numero',
        'complemento',
        'cidade',
        'estado'
    ];

    public function contatos()
    {
        return $this->hasMany(Contato::class);
    }
}

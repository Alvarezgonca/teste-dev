<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'idade',
        'endereco_id'
    ];

    // Relacionamento 1:1 com Endereco
    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }
}


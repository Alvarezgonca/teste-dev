<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'idade',
        'endereco_id'
    ];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }
}

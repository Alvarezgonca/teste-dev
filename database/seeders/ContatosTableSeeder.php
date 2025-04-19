<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contatos')->insert([
            [
                'id' => 1,
                'nome' => 'João Silva',
                'telefone' => '(21) 91234-5678',
                'idade' => 30,
                'endereco_id' => 1,
            ],
            [
                'id' => 2,
                'nome' => 'Maria Oliveira',
                'telefone' => '(21) 99876-5432',
                'idade' => 25,
                'endereco_id' => 2,
            ],
            [
                'id' => 3,
                'nome' => 'Carlos Pereira',
                'telefone' => '(21) 94567-8912',
                'idade' => 40,
                'endereco_id' => 3,
            ],
            [
                'id' => 4,
                'nome' => 'Ana Costa',
                'telefone' => '(21) 93216-5498',
                'idade' => 35,
                'endereco_id' => 4,
            ],
            [
                'id' => 5,
                'nome' => 'Lucas Santos',
                'telefone' => '(21) 96543-1789',
                'idade' => 28,
                'endereco_id' => 5,
            ],
            [
                'id' => 6,
                'nome' => 'Fernanda Lima',
                'telefone' => '(21) 97891-2345',
                'idade' => 32,
                'endereco_id' => 6,
            ],
            [
                'id' => 7,
                'nome' => 'Ricardo Almeida',
                'telefone' => '(21) 91597-5348',
                'idade' => 29,
                'endereco_id' => 7,
            ],
            [
                'id' => 8,
                'nome' => 'Patrícia Martins',
                'telefone' => '(21) 97531-5986',
                'idade' => 27,
                'endereco_id' => 8,
            ],
            [
                'id' => 9,
                'nome' => 'Bruno Ferreira',
                'telefone' => '(21) 99517-5348',
                'idade' => 31,
                'endereco_id' => 9,
            ],
            [
                'id' => 10,
                'nome' => 'Juliana Rocha',
                'telefone' => '(21) 93571-5986',
                'idade' => 26,
                'endereco_id' => 10,
            ],
            [
                'id' => 11,
                'nome' => 'Eduardo Souza',
                'telefone' => '(21) 92589-6314',
                'idade' => 33,
                'endereco_id' => 11,
            ],
            [
                'id' => 12,
                'nome' => 'Tatiane Dias',
                'telefone' => '(21) 93692-5814',
                'idade' => 24,
                'endereco_id' => 12,
            ],
        ]);
    }

}

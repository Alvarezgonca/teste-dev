<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnderecosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('enderecos')->insert([
            [
                'id' => 1,
                'cep' => '12.345-678',
                'rua' => 'Rua A',
                'numero' => '123',
                'complemento' => 'Apto 1',
                'cidade' => 'Cidade A',
                'estado' => 'Estado A',
            ],
            [
                'id' => 2,
                'cep' => '87.654-321',
                'rua' => 'Rua B',
                'numero' => '456',
                'complemento' => null,
                'cidade' => 'Cidade B',
                'estado' => 'Estado B',
            ],
            [
                'id' => 3,
                'cep' => '98.765-432',
                'rua' => 'Avenida Central',
                'numero' => '789',
                'complemento' => 'Casa 2',
                'cidade' => 'Cidade C',
                'estado' => 'Estado C',
            ],
            [
                'id' => 4,
                'cep' => '45.678-901',
                'rua' => 'Travessa das Flores',
                'numero' => '321',
                'complemento' => 'Fundos',
                'cidade' => 'Cidade D',
                'estado' => 'Estado D',
            ],
            [
                'id' => 5,
                'cep' => '23.456-789',
                'rua' => 'Alameda dos Anjos',
                'numero' => '654',
                'complemento' => null,
                'cidade' => 'Cidade E',
                'estado' => 'Estado E',
            ],
            [
                'id' => 6,
                'cep' => '34.567-890',
                'rua' => 'Rua das Palmeiras',
                'numero' => '111',
                'complemento' => 'Bloco A',
                'cidade' => 'Cidade F',
                'estado' => 'Estado F',
            ],
            [
                'id' => 7,
                'cep' => '56.789-012',
                'rua' => 'Estrada Velha',
                'numero' => '99',
                'complemento' => 'Galpão',
                'cidade' => 'Cidade G',
                'estado' => 'Estado G',
            ],
            [
                'id' => 8,
                'cep' => '67.890-123',
                'rua' => 'Rua Nova Esperança',
                'numero' => '22',
                'complemento' => 'Loja 3',
                'cidade' => 'Cidade H',
                'estado' => 'Estado H',
            ],
            [
                'id' => 9,
                'cep' => '78.901-234',
                'rua' => 'Avenida das Nações',
                'numero' => '1000',
                'complemento' => null,
                'cidade' => 'Cidade I',
                'estado' => 'Estado I',
            ],
            [
                'id' => 10,
                'cep' => '89.012-345',
                'rua' => 'Rua da Paz',
                'numero' => '555',
                'complemento' => 'Casa',
                'cidade' => 'Cidade J',
                'estado' => 'Estado J',
            ],
            [
                'id' => 11,
                'cep' => '90.123-456',
                'rua' => 'Rua do Comércio',
                'numero' => '888',
                'complemento' => 'Sobreloja',
                'cidade' => 'Cidade K',
                'estado' => 'Estado K',
            ],
            [
                'id' => 12,
                'cep' => '10.234-567',
                'rua' => 'Rua das Laranjeiras',
                'numero' => '333',
                'complemento' => 'Cobertura',
                'cidade' => 'Cidade L',
                'estado' => 'Estado L',
            ],
        ]);

    }
}

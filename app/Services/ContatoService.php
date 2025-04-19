<?php

namespace App\Services;

use App\Models\Contato;
use App\Repositories\ContatoRepository;
use App\Repositories\EnderecoRepository;

class ContatoService
{
    protected $repository;
    protected $enderecoRepository;

    public function __construct(ContatoRepository $repository, EnderecoRepository $enderecoRepository)
    {
        $this->repository = $repository;
        $this->enderecoRepository = $enderecoRepository;
    }

    // public function listar()
    // {
    //     return $this->repository->getAll();
    // }

    public function criar($data)
    {
        $endereco = [
            'cep' => $data['cep'],
            'rua' => $data['rua'],
            'numero' => $data['numero'],
            'complemento' => $data['complemento'] ?? null,
            'cidade' => $data['cidade'],
            'estado' => $data['estado'],
        ];
        $data['endereco_id'] = $this->enderecoRepository->create($endereco);
        return $this->repository->create($data);
    }

    public function update($data)
    {
        $endereco = [
            'endereco_id' => $data['endereco_id'],
            'cep' => $data['cep'],
            'rua' => $data['rua'],
            'numero' => $data['numero'],
            'complemento' => $data['complemento'] ?? null,
            'cidade' => $data['cidade'],
            'estado' => $data['estado'],
        ];
        $this->enderecoRepository->update($endereco);
        $this->repository->update($data);
        return;
    }

    // public function buscar($id)
    // {
    //     return $this->repository->find($id);
    // }

    // public function atualizar(Contato $contato, $data)
    // {
    //     return $this->repository->update($contato, $data);
    // }

    // public function deletar(Contato $contato)
    // {
    //     return $this->repository->delete($contato);
    // }
}

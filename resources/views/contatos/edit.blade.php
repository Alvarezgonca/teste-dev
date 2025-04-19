@extends('layouts') {{-- Se estiver usando um layout base --}}
@section('content')

<main class="container my-5 bg-light p-4 rounded shadow-sm">
    <div class="row">
        <div class="col-12 col-lg-10 mx-auto">
            <h2 class="mb-4">Atualizar Contato</h2>

            <form action="{{ route('contatos.update', ['contato_id' => $contato->id, 'endereco_id' => $endereco->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $contato->nome) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone', $contato->telefone) }}" required>
                    </div>

                    <div class="col-md-3">
                        <label for="idade" class="form-label">Idade</label>
                        <input type="number" class="form-control" id="idade" name="idade" value="{{ old('idade', $contato->idade) }}" required>
                    </div>

                    <div class="col-md-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" value="{{ old('cep', $endereco->cep) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="rua" class="form-label">Rua</label>
                        <input type="text" class="form-control" id="rua" name="rua" value="{{ old('rua', $endereco->rua) }}" required>
                    </div>

                    <div class="col-md-3">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero" value="{{ old('numero', $endereco->numero) }}" required>
                    </div>

                    <div class="col-md-3">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" value="{{ old('complemento', $endereco->complemento) }}">
                    </div>

                    <div class="col-md-4">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" value="{{ old('cidade', $endereco->cidade) }}" required>
                    </div>

                    <div class="col-md-4">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado" value="{{ old('estado', $endereco->estado) }}" required>
                    </div>

                    <div class="col-12 d-flex justify-content-end mt-4">
                        <a href="{{ route('contatos.index') }}" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary ms-2">Atualizar Contato</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection

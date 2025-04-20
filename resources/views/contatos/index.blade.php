@extends('layouts')

@section('content')
<main class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Lista de Contatos</h2>
        <a href="{{ route('contatos.index') }}" class="btn btn-primary">Mostrar todos</a>
    </div>

    <form action="{{ route('contatos.pesquisar') }}" class="d-flex justify-content-between align-items-center mb-3" method="GET">
        <input type="text" class="form-control" name="nome" placeholder="Buscar contato por nome" value="{{$nome ?? ''}}">
        <button class="btn btn-primary ms-2">Pesquisar</button>
    </form>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Idade</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contatos as $index => $contato)
                    <tr>
                        <td>{{ $loop->iteration + ($contatos->currentPage() - 1) * $contatos->perPage() }}</td>
                        <td>{{ $contato->nome }}</td>
                        <td>{{ $contato->telefone }}</td>
                        <td>{{ $contato->idade }}</td>
                        <td class="text-center">
                            <div class="d-flex flex-wrap gap-2 justify-content-center">
                                <button class="btn btn-sm btn-info text-white" data-bs-toggle="modal" data-bs-target="#modalEndereco{{ $contato->id }}">Ver Endereço</button>
                                <a href="{{ route('contatos.edit', $contato->id) }}" class="btn btn-sm btn-warning text-white">Editar</a>
                                <form method="POST" action="{{ route('contatos.destroy', $contato->id) }}" onsubmit="return confirm('Tem certeza que deseja deletar este contato?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal de Endereço -->
                    <div class="modal fade" id="modalEndereco{{ $contato->id }}" tabindex="-1" aria-labelledby="enderecoLabel{{ $contato->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="enderecoLabel{{ $contato->id }}">Endereço de {{ $contato->nome }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>CEP:</strong> {{ $contato->endereco->cep ?? '-' }}</p>
                                    <p><strong>Rua:</strong> {{ $contato->endereco->rua ?? '-' }}</p>
                                    <p><strong>Número:</strong> {{ $contato->endereco->numero ?? '-' }}</p>
                                    <p><strong>Complemento:</strong> {{ $contato->endereco->complemento ?? '-' }}</p>
                                    <p><strong>Cidade:</strong> {{ $contato->endereco->cidade ?? '-' }}</p>
                                    <p><strong>Estado:</strong> {{ $contato->endereco->estado ?? '-' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Nenhum contato encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

<div class="d-flex justify-content-center mt-4">
    {{ $contatos->onEachSide(1)->links('pagination::bootstrap-4') }}
</div>

</main>
@endsection

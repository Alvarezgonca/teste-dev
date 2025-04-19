<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Models\Endereco;
use Illuminate\Http\Request;
use App\Services\ContatoService;
use Illuminate\Http\JsonResponse;

class ContatoController extends Controller
{
    protected $service;

    public function __construct(ContatoService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $contatos = Contato::with('endereco')->paginate(10);
        return view('contatos.index', compact('contatos'));
    }

    public function create()
    {
        return view('contatos.create');
    }

    public function store(Request $request)
    {
        $request['nome'] = ucwords($request['nome']);
        $data = $request->validate([
            'nome' => 'required|string',
            'telefone' => 'required|string|max:15|unique:contatos,telefone',
            'idade' => 'required|integer|max:150',
            'cep' => 'required|string',
            'rua' => 'required|string',
            'numero' => 'required|string',
            'complemento' => 'nullable|string',
            'cidade' => 'required|string',
            'estado' => 'required|string',
        ]);

        $this->service->criar($data);

        return redirect()->route('contatos.index')->with('success', 'Contato criado com sucesso!');
    }

    public function edit($id)
    {
        $contato = Contato::with('endereco')->findOrFail($id);
        $endereco_id = $contato->endereco_id;
        $endereco = Endereco::findOrFail($endereco_id);
        return view('contatos.edit', compact('endereco', 'contato'));
    }

    public function update(Request $request, $contato_id, $endereco_id)
    {
        $request['nome'] = ucwords($request['nome']);

        $data = $request->validate([
            'nome' => 'required|string',
            'telefone' => 'required|string|max:15|unique:contatos,telefone',
            'idade' => 'required|integer|max:150',
            'cep' => 'required|string|max:10',
            'rua' => 'required|string',
            'numero' => 'required|string',
            'complemento' => 'nullable|string',
            'cidade' => 'required|string',
            'estado' => 'required|string',
        ]);

        $data['contato_id'] = $contato_id;
        $data['endereco_id'] = $endereco_id;

        $this->service->update($data);

        return redirect()->route('contatos.index')->with('success', 'Contato atualizado com sucesso!');
    }

    public function pesquisar(Request $request)
    {
        $nome = $request->input('nome');
        $contatos = Contato::with('endereco')
            ->where('nome', 'ILIKE', "%{$nome}%")
            ->paginate(10);

        return view('contatos.index', compact('contatos', 'nome'));
    }

    public function destroy($id)
    {
        $contato = Contato::findOrFail($id);
        $contato->delete();

        return redirect()->route('contatos.index')->with('success', 'Contato excluído com sucesso!');
    }
}

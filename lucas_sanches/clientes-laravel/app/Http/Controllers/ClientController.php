<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index () {

     $clients = Client::get();
     return view('clients.index',[
        'clients'=> $clients
    ]);
    // Buscar os clientes no banco de dados
    }

    // Mostra um cliente especifico, e o retorno dele é uma view
    public function show(int $id)
    {
        $client = Client::find($id);
        return view('clients.show',[
            'client' => $client
        ]);
    }

    // mostra a view de criar novos clientes, e consequentemente retorna em uma view
    public function create()
    {
        return view('clients.create');
    }

    //cria um novo clientes com os dados quem vem via post quando a função é chamada
    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Client::create($dados);
        return redirect('/clients');
    }

    //mostra o formulário de editar um determinado cliente, e o retorno dele é direto em uma view
    public function edit(int $id){
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client
        ]);
    }

    //o update vai fazer as alterações dos cadastrasdos de um cliente. Ele recebe como parâmetro o id, a request e o retorno dele é um redirect response
    public function update(int $id, Request $request){
        $client = Client::find($id);
        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);
        return redirect('/clients');
    }

    //o destroy vai fazer o delete de um unico cliente com base no id que é recebido. E o retorno é um redirect
    public function destroy(int $id){
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients');
    }
}
@extends('app')

@section('title','Adicionar Cliente')
@section('content')

<form action="{{ route('clients.update',$client) }}" method="POST">
    
    @csrf
    @method('PUT')
    <div class="card-header">
          <strong>Editar Cliente</strong>
          <br>
          <label for="nome" class="from-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do cliente" value="{{$client->nome}}" required>
          <br>
          <label for="endereco" class="from-label">Endereço</label>
          <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Seu endereço" value="{{$client->endereco}}" required>
          <br>
          <label for="observacao" class="from-label">Observação</label>
          <textarea class="form-control" name="observacao" id="observacao" cols="30" rows="10">{{$client->observacao}}</textarea>
 
          
    </div>

    <button class="btn btn-success" type="submit"> Incluir </button>
</form>

@endsection
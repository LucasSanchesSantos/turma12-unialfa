@extends('app')

@section('title','Detalhes do produto')
@section('content')
    <div class="container">
    <div class="card">
        <div class="card-header">
          Detalhes do produto {{ $produto->nome }}
        </div>
        <div class="card-body">
          <p><strong>ID:</strong>{{ $produto->id}}</p>
          <p><strong>Nome:</strong>{{ $produto->nome}}</p>
          <p><strong>Frase de Efeito:</strong>{{ $produto->nada}}</p>
          <p><strong>Observações:</strong>{{ $produto->observacao}}</p>
          <br>
            <a class="btn btn-dark" href="{{route('produtos.index')}}">
              Voltar
            </a>
        </div>
      </div>
    </div>

@endsection
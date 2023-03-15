@extends('app')

@section('title','Lista de Produtos')
@section('content')
        <div class="card-header">
          Lista de produtos
        </div>
        <table class = "table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                    <tr>

                        <th scope="row">{{ $produto ->id }}</th>
                        <th scope="row">
                            <a href="{{ route('produtos.show',$produto) }}">
                                {{ $produto ->nome }}
                            </a>
                            </th>
                        <th scope="row">{{ $produto ->endereco }}</th>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <a class="btn btn-dark" href="{{ route('produtos.create')}}">
          Novo produto
        </a>
@endsection
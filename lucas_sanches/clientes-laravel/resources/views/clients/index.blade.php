@extends('app')

@section('title','Lista de Clientes')
@section('content')
        <div class="card-header">
          Lista de Clientes
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
                @foreach($clients as $client)
                    <tr>
                        <td scope="row">{{ $client ->id }}</td>
                        <td scope="row">
                            <a href="{{ route('clients.show',$client) }}">
                                {{ $client ->nome }}
                            </a>
                            </td>
                        <td scope="row">{{ $client ->endereco }}</td>
                        <td>
                            <a href="{{route('clients.edit',$client)}}" class="btn btn-primary">
                                Editar
                            </a>
                            <form action="{{route('clients.destroy',$client)}}" method="POST">
                                @method('DELETE')   
                                {{-- esse @method delete faz com que o formulário seja enviado como delete --}}
                                @csrf
                                <button class="btn btn-danger" type="submit" onclick="return confirm('tem certeza qeu deseja apagar')">Apagar</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <a class="btn btn-dark" href="{{ route('clients.create')}}">
          Novo Cliente
        </a>
@endsection
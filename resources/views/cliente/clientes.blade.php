@extends('layouts.master')


@section('content')
     <p class="text-center">Tabela de  Clientes {{ date('d/m/y') }}</p>
     <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Cep</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cl)
            <tr>
                <td id="codCliente">{{$cl->id}}</td>
                <td>{{$cl->nome}}</td>
                <td>{{$cl->telefone}}</td>
                <td>{{$cl->email}}</td>
                <td>{{$cl->cep}}</td>
            </tr>
            @endforeach
        </tbody>
     </table>
@endsection

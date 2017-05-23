@extends('templates.layout')
    @section('content')
        <h2>Membros</h2>
        <table class="table table-hover">
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Foto</th>
                <th>Ações</th>
            </tr>
            @foreach($membros as $membro)
                <tr>
                    <td>{{ $membro->nome }}</td>
                    <td>{{ $membro->cargo }}</td>
                    <td><img src="/upload/profile/{{ $membro->imagem }}" class="imagem-tabela" alt="Sem Imagem"></td>
                    <td>
                        <a href="#" class="acao acao-editar" ><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="acao acao-remover"><span class="glyphicon glyphicon-pencil"></span></a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection

@extends('templates.layout')
    @section('content')
        
        <a href="/painel/membros/create" class="btn btn-primary btn-cadastrar">Cadatrar</a>
        <table class="table table-hover">
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Foto</th>
                <th>Ações</th>
            </tr>
            @foreach($membros as $membro)
                <tr >
                    <td >{{ $membro->nome }}</td>
                    <td >{{ $membro->cargo }}</td>
                    <td ><img src="/upload/membros/{{ $membro->imagem }}" class="imagem-tabela" alt="Sem Imagem"></td>
                    <td class="acoes">
                        <a href="/painel/membros/{{ $membro->id }}" class="btn acao acao-visualizar" ><span class="glyphicon glyphicon-eye-open"></span></a>
                        <a href="/painel/membros/{{ $membro->id }}/edit" class="btn acao acao-editar" ><span class="glyphicon glyphicon-pencil"></span></a>
                        <form action="/painel/membros/{{ $membro->id }}" method="post">
                            {!! csrf_field() !!}
                            {!! method_field('delete') !!}
                            <button class="btn acao acao-remover"><span class="glyphicon glyphicon-remove"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection
    @push('titulo')
        <h2>Membros</h2>
    @endpush
    @push('styles')
        <link rel="stylesheet" href="/css/painel/membros.css">
    @endpush

    @push('scripts')
        <script type="text/javascript" src="{{ url('js/painel/membros/membros.js') }}"></script>
    @endpush

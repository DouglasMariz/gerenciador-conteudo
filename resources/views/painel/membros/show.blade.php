@extends('templates.membros')
    @section('content')
        <div class="conteudo">
            <h2>Detalhes</h2>
            <img src="/upload/membros/{{ $membro->imagem }}" alt="Sem Foto" class="img-thumbnail foto">
            <h2>{{ $membro->nome }}</h2>
            <p>{{ $membro->cargo }}</p>
            <a href="/painel/membros/{{ $membro->id }}/edit" class="btn">Editar</a>
            <a href="/painel/membros" class="btn btn-default">Voltar</a>
        </div>

    @endsection

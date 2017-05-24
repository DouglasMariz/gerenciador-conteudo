@extends('templates.layout')
    @section('content')
    <div class="col-md-6 col-md-offset-3">
        
        <h2>{{ $title or 'Gerenciamento de Membros' }}</h2>
        @if(isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        @if(!isset($membro))
        <form action="{{route('membros.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
        @else
            <form action="{{route('membros.update', $membro->id)}}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                {!! method_field('put') !!}
        @endif
            <div class="form-group">
                <label for="formNome">Nome:</label>
                <input type="text" id="formNome" name="nome" class="form-control" placeholder="Nome" value="{{ $membro->nome or old('nome') }}">
            </div>
            <div class="form-group">
                <label for="formCargo">Cargo:</label>
                <input type="text" id="formCargo" name="cargo" class="form-control" placeholder="Cargo" value="{{ $membro->cargo or old('cargo') }}">
            </div>
            <div class="form-group">
                <label>Foto:</label>
                <input type="file" name="imagem" value="{{ old('imagem') }}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" name="button" type="submit">Salvar</button>
            </div>

        </form>
        <a href="/painel/membros" class="btn btn-danger btn-voltar">Cancelar</a>
    </div>
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

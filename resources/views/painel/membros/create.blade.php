@extends('templates.layout')
    @section('content')
        <form action="{{route('membros.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h2>{{ $title or 'Gerênciamento de Membros' }}</h2>
            <div class="form-group">
                <label for="formNome">Nome:</label>
                <input type="text" id="formNome" name="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="formCargo">Cargo:</label>
                <input type="text" id="formCargo" name="cargo" class="form-control" placeholder="Cargo">
            </div>
            <div class="form-group">
                <label>Foto:</label>
                <input type="file" name="foto">
            </div>
            <button type="button" class="btn btn-primary" name="button">Salvar</button>
        </form>
    @endsection

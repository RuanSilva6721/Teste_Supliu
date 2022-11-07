@extends('layouts.main')

@section('title', 'Editando' .$album->nome)

@section('content')

<h1>Editando: {{$album->nome}}</h1>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <form action="/updatealbum/{{$album->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Album" value="{{$album->nome}}">
    </div>

    <input type="submit" class="btn btn-primary" value="Atualizar Album">
    </form>
</div>

@endsection
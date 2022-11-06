@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')

<h1>Crie uma Música</h1>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <form action="/music" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="title">Nome da Música</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do música">
    </div>
    <div class="form-group">
        <label for="duration">Duração</label>
        <input type="text" class="form-control" id="duration" name="duration" placeholder="00:00">
    </div>

    {{-- <div class="form-group">
        <label for="private">O evento é privado?</label>
        <select name="private" id="private" class="form-control"> 
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div> --}}
    
    <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection
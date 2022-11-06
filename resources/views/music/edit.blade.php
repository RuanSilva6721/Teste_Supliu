@extends('layouts.main')

@section('title', 'Editando' . $music->title)

@section('content')

<h1>Editando: {{$music->title}}</h1>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <form action="/update/{{$music->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="title">Evento</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{$music->title}}">
    </div>
    <div class="form-group">
        <label for="duration">Duração</label>
        <input type="duration" class="form-control" id="duration" name="duration" value="{{$music->duration}}">
    </div>

    {{-- <div class="form-group">
        <label for="private">O evento é privado?</label>
        <select name="private" id="private" class="form-control"> 
            <option value="0">Não</option>
            <option value="1" {{$event->privat ==1 ?"selected='selected'": ""}}>Sim</option>
        </select>
    </div> --}}

    <input type="submit" class="btn btn-primary" value="Atualizar Evento">
    </form>
</div>

@endsection
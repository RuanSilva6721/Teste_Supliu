@extends('layouts.main')

@section('title', 'Criar Músicas')

@section('content')

<h1>Crie uma Música</h1>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <form action="/music" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="title">Nome da Música</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do música" required>
    </div>
    <div class="form-group">
        <label for="duration">Duração</label>
        <input type="text" class="form-control" id="duration" name="duration" placeholder="00:00" required>
    </div>

    <div class="form-group">
        <label for="album_id">O Album essa música pertence?</label>
        <select name="album_id" id="album_id" class="form-control">
            @foreach($album as $item)
            <option value="<?= $item->id?>"><?= $item->nome?></option>
            @endforeach
        </select>
    </div>

    <input type="submit" class="btn btn-primary" value="Criar Música">
    </form>
</div>

@endsection

@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')

<h1>Crie uma Álbum</h1>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <form action="/music/album" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="nome">Nome da Álbum</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Álbum">
    </div>
    
    <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection
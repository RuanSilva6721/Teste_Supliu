@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')



<div class="col-md-10 offset-md-1 dashboard-interna">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
            <img src="/img/logo.png" alt="Logo" id="logo">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Discografia</a>
                </li>
                <li class="nav-item">
                    <a href="/create" class="nav-link">Criar Música</a>
                </li>
                <li class="nav-item">
                    <a href="/create/album" class="nav-link">Criar Album</a>
                </li>
         

            </ul>

        </div>
        </nav>
    </header>

    <div id="search-container" class="col-md-12">
        <p id="title-buscar">Digite uma palavra chave</p>
        <form action="/" method="GET">
            <input type="text" name="search" id="search" class="form-control" placeholder="Digite a sua pesquisa">
            <input type="submit" class="btn-primary btn btn-info edit-btn" value="Pesquisar">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if($search)
        <h2>Buscando por : {{$search}}</h2>
        @else
        @endif


     @if(count($musics) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nº</th>
                    <th scope="col">Nome</th>                 
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                    <th scope="col">duração</th>
                </tr>
            </thead>
            <tbody>
                <h3>Album: att</h3>
                @foreach($musics as $music)
                
                    <tr>
                        <th scope="row"> {{$loop->index + 1}}</th>
                        <td>{{$music->title}}</td>
                        <td>
                            <a href="/edit/{{$music->id}}" class="btn btn-info edit-btn"> <ion-icons name="create-ouyline"></ion-icons> Editar</a>
                         
                        </td>
                        <td>   <form action="/{{$music->id}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger delete-btn"> <ion-icons name="trash-outline"></ion-icons> Deletar</button>


                        </form></td>
                        <td id="duracao">
                            
                        </td>
                        <td>{{$music->duration}}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    @else
        <p>Você ainda não possui eventos, <a href="/events/create">Criar Evento</a></p>
    @endif 

 </div>


</div>

@endsection
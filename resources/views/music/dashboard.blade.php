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


     @if(count($album) > 0)
     @foreach($album as $item)


     <div class="faixa">
     <ul >
        <li><h3>Album: {{$item->nome}}</h3></li>
        <li><a href="/editalbum/{{$item->id}}" class="btn btn-info edit-btn"> <ion-icons name="create-ouyline"></ion-icons> Editar</a></li>
        <li>   <form action="/album/{{$item->id}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger delete-btn"> <ion-icons name="trash-outline"></ion-icons> Deletar</button>
         </form></li>

     </ul>

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

            @foreach($item->Music() as $music)
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
    </div>


     @endforeach

    @else
        <p>Você ainda não possui Álbuns,  <a href="/create/album">Criar Álbum</a></p>
    @endif

 </div>


</div>

@endsection

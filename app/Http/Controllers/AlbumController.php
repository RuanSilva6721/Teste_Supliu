<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function create()
    {
        return view('music.createAlbum');
    }

    public function store(Request $request)
    {
        Album::create($request->all());

        return redirect('/')->with('msg', 'Àbum criando com sucesso!');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\Music;

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
    public function edit($id)
    {
        $album = Album::findOrFail($id);

        return view('music.editalbum', ['album' =>$album]);
    }
    public function update(Request $request, Album $album)
    {
        $data = $request->all();

        Album::findOrFail($request->id)->update($data);


        return redirect('/')->with('msg', "Album editado com sucesso!");
    }

    public function destroy($id)
    {
        Music::where('album_id', $id)->delete();

        Album::findOrFail($id)->delete();


        return redirect('/')->with('msg', "Album excluido com sucesso!");
    }


}

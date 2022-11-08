<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use App\Models\Album;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = request('search');


        if($search){

             $album = Album::where([

                 ['Nome', 'like', '%'.$search. '%']

             ])->get();

        }else{
            $album = Album::all();
        }

        return  view('music.dashboard', [ "search" => $search, 'album' => $album ]);
    }


    public function create()
    {
        $album = Album::all();
        return view('music.create', ['album' => $album]);
    }


    public function store(Request $request)
    {
//dd($request);
        Music::create($request->all());
        //$music = $request->title;

        return redirect('/')->with('msg', 'Música criando com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $music = Music::findOrFail($id);

        return view('music.edit', ['music' =>$music]);
    }


    public function update(Request $request, Music $music)
    {
        $data = $request->all();

        Music::findOrFail($request->id)->update($data);


        return redirect('/')->with('msg', "Música editado com sucesso!");
    }

    public function destroy($id)
    {
        Music::findOrFail($id)->delete();

        return redirect('/')->with('msg', "Música excluido com sucesso!");
    }


}

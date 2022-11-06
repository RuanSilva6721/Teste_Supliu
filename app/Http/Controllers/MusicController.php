<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

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

             $musics = Music::where([

                 ['title', 'like', '%'.$search. '%']

             ])->get();

        }else{
             $musics = Music::all();
        }

        return  view('music.dashboard', [ "search" => $search, 'musics' => $musics ]);
    }


    public function create()
    {
        return view('music.create');
    }


    public function store(Request $request)
    {
        Music::create($request->all());

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


        return redirect('/')->with('msg', "Evento editado com sucesso!");
    }

    public function destroy($id)
    {
        Music::findOrFail($id)->delete();

        return redirect('/')->with('msg', "Evento excluido com sucesso!");
    }


}

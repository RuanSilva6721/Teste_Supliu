<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\AlbumController;


Route::get('/', [MusicController::class, 'index'])->name('home');
Route::get('/create', [MusicController::class, 'create']);

Route::post('music', [MusicController::class, 'store']);

Route::delete('/{id}', [MusicController::class, 'destroy']);
Route::get('/edit/{id}', [MusicController::class , 'edit']);
Route::put('/update/{id}', [MusicController::class , 'update']);


Route::get('/create/album', [AlbumController::class, 'create']);

Route::post('music/album', [AlbumController::class, 'store']);



// Route::get('/', function () {
//     return view('welcome');
// });

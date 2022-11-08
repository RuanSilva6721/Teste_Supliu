<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Music;

class Album extends Model
{
    use HasFactory;
    protected $table = 'album';

    protected $fillable = ['id', 'nome'];




    public function Music(){
        return $this->hasMany(Music::class)->get();
    }
}

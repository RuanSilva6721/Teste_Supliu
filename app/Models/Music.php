<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Album;

class Music extends Model
{
    use HasFactory;

   protected $table = 'music';

    protected $fillable = ['id', 'title', 'duration'];

    public function Album()
    {
        return $this->belongsToMany(Album::class);
    }
}

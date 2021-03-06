<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function path() {
        return '/books/'.$this->id;
        //return '/books/'.$this->id . '-' . Str::slug($this->title);
        //like /books/1-end-game-title
    }
}

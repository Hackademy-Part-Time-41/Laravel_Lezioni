<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // fillable è una proprietà usata per proteggere dal mass assignment
    // contiene un array di campi che possono essere inseriti a database
    protected $fillable = ['title','body','author','is_visible'];
}

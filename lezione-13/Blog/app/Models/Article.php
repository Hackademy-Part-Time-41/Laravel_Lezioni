<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title','body','author_id','is_visible'];


    public function author(){
        return $this->belongsTo(Author::class);
    }
}

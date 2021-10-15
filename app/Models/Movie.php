<?php

namespace App\Models;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'genre', 'director', 'year', 'plot'];
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

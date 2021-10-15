<?php

namespace App\Models;
use App\Models\Movie;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['content'];

    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}

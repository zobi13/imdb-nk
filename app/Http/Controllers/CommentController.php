<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function store(Movie $movie, CommentRequest $request)
    {
        $data = $request->validated();

        $movie->comments()->create($data);

        return back();
    }
}

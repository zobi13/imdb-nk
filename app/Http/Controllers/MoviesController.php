<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index() 
    {
        $movies = Movie::get();

        return view('movies.index', compact('movies'));
    }

    public function show(Movie $movie) 
    {
        $movie->load(['comments']);
        return view('movies.show', compact('movie'));
    }

    public function create()
    {
        return view('movies.create');
    }
    
    public function store(MovieRequest $request)
    {
        $data = $request->validated();
        $newMovie = Movie::create($data);

        return redirect('/movies');
    }
}

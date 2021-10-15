@extends('layouts.app')

@section('title', 'IMDB')

@section('content')
    <h1>Movies</h1>
    <ul>
        @foreach($movies as $movie)
            <li>
                <h3>
                    <a href="{{ route('movie', ['movie' => $movie->id ]) }}">
                        {{ $movie->title }}
                    </a>
                </h3>
                <div>
                    Plot: {{ $movie->plot }}
                </div>
            </li>
        @endforeach
    </ul>
@endsection 
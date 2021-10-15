@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <h2>
        {{ $movie->title }}
    </h2>

    <h3>
        Directed by {{ $movie->director }}
    </h3>

    <h4>
        Genre: {{ $movie->genre }}
    </h4>

    <p>
        {{ $movie->plot }}
    </p>

    <p>
        Year of production: {{ $movie->year }}
    </p>
    <hr>
    <h5>
        Comments
    </h5>
    @forelse($movie->comments as $comment)
        {{ $comment->content }} <br>
    @empty
        <span> No comments </span>
    @endforelse

    <form action="{{ route('createComment', ['movie'=>$movie->id]) }}" method='POST'>
        @csrf
        <div class="form-group">
            <label for="content">Add comment:</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            @error('body')
                <div class="alert alert-danger"> {{$message}} </div>
            @enderror
        </div>
        <button class="btn btn-primary"> Submit </button>
    </form>
@endsection
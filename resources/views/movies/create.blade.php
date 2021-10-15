@extends('layouts.app')

@section('title', 'Add a movie')

@section('content')
    <form action='/movies' method="POST">
        @csrf
        <div class="form-group">
            <label for="title">
                Movie
            </label>
            <input placeholder="Enter title" id="title" name="title" type="text" class="form-control">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="genre">
                Genre
            </label>
            <input placeholder="Enter genre" id="genre" name="genre" type="text" class="form-control">
            @error('genre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="director">
                Director
            </label>
            <input placeholder="Enter director" id="director" name="director" type="text" class="form-control">
            @error('director')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="year">
                Year of release
            </label>
            <input placeholder="Enter year" id="year" name="year" type="text" class="form-control">
            @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="plot">
                Plot
            </label>
            <textarea placeholder="Enter plot of the movie"  id="plot" name="plot" cols="30" rows="10"></textarea>
            @error('plot')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
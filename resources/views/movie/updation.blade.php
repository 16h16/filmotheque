@extends('layouts.app')

@section('title')
    Update movie
@endsection

@include('partials.navbar')

@section('content')
    <h1> Update movie </h1>
    <h2> Form update </h2>
    <form action="{{ route('movie.update') }}" method="POST">
        @csrf
        <div>
            <label> Select a movie : </label>
            <select name="movie_id">
                @foreach($movies as $movie)
                    <option value="{{ $movie -> id }}"> {{ $movie -> title }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Title : </label>
            <input type="text" name="title" placeholder="title">
        </div>

        <div>
            <label>Description : </label>
            <textarea name="description">Description..</textarea>
        </div>

        <div>
            <button> Update a movie </button>
        </div>
    </form>
@endsection

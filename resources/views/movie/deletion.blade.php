@extends('layouts.app')

@section('title')
    Delete movie
@endsection

@include('partials.navbar')

@section('content')
    <h1> Delete movie </h1>
    <h2> Form delete </h2>
    <form action="{{ route('movie.delete') }}" method="POST">
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
            <button> Delete a movie </button>
        </div>
    </form>
@endsection

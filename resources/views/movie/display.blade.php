@extends('layouts.app')

@section('title')
    Display movies
@endsection

@include('partials.navbar')

@section('content')
    <h1> Display movies </h1>
    <h2> All movies </h2>
    <ul>
        @foreach($movies as $movie)
            <li> {{ $movie -> title }} </li>
        @endforeach
    </ul>
@endsection

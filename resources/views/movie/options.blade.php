@extends('layouts.app')

@section('title')
    Movie options
@endsection

@include('partials.navbar')

@section('content')
    <h1> Movie options </h1>
    <h2> Choose between these actions </h2>
    <ul>
        <li> <a href="{{ route('movie.display') }}"> Display all movies </a> </li>
        <li> <a href="{{ route('movie.creation') }}"> Create a movie </a> </li>
        <li> <a href="{{ route('movie.updation') }}"> Update a movie </a> </li>
        <li> <a href="{{ route('movie.deletion') }}"> Delete a movie </a> </li>
    </ul>
@endsection

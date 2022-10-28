@extends('layouts.app')

@section('title')
    Index
@endsection

@section('content')
    <h1> Welcome to filmotheque ! </h1>
    <h2> Choose one of these options </h2>
    <ul>
        <li> <a href='{{ route('category.options') }}'> Category </a> </li>
        <li> <a href='{{ route('movie.options') }}'> Movie </a> </li>
        <li> <a href='{{ route('actor.options')  }}'> Actor </a> </li>
    </ul>
@endsection

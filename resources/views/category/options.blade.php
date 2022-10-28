@extends('layouts.app')

@section('title')
Category options
@endsection

@include('partials.navbar')

@section('content')
    <h1> Category options </h1>
    <h2> Choose between these actions </h2>
    <ul>
        <li> <a href="{{ route('category.display') }}"> Display all categories </a> </li>
        <li> <a href="{{ route('category.creation') }}"> Create a category </a> </li>
        <li> <a href="{{ route('category.updation') }}"> Update a category </a> </li>
        <li> <a href="{{ route('category.deletion') }}"> Delete a category </a> </li>
    </ul>
@endsection

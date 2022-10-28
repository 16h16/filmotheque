@extends('layouts.app')

@section('title')
    Actor options
@endsection

@include('partials.navbar')

@section('content')
    <h1> Actor options </h1>
    <h2> Choose between these actions </h2>
    <ul>
        <li> <a href="{{ route('actor.display') }}"> Display all actors </a> </li>
        <li> <a href="{{ route('actor.creation') }}"> Create a actor </a> </li>
        <li> <a href="{{ route('actor.updation') }}"> Update a actor </a> </li>
        <li> <a href="{{ route('actor.display') }}"> Delete a actor </a> </li>
    </ul>
@endsection

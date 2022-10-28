@extends('layouts.app')

@section('title')
    Display actors
@endsection

@section('content')
    <h1> Display actors </h1>
    <h2> All actors </h2>
    <ul>
        @foreach($actors as $actor)
            <li> {{ $actor -> firstname }} </li>
        @endforeach
    </ul>
@endsection

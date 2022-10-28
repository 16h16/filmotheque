@extends('layouts.app')

@section('title')
    Display categories
@endsection

@section('content')
    <h1> Display categories </h1>
    <h2> All categories </h2>
    <ul>
        @foreach($categories as $category)
            <li> {{ $category -> name }} </li>
        @endforeach
    </ul>
@endsection

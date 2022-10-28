@extends('layouts.app')

@section('title')
    Display actors
@endsection

@include('partials.navbar')

@section('content')
    <h1> Display actors </h1>
    <h2> All actors </h2>
    <ul>
        @foreach($actors as $actor)
            <li> Name : {{ $actor -> lastname }}
                <ul>
                    <li> Firstname : {{ $actor -> firstname }}</li>
                    <li>Gender : {{ $actor -> gender }}</li>
                    <li>Birth date : {{ $actor -> birth_date }}</li>
                    <li>Movies :
                    <ul>
                        @foreach($actor->movies as $movie)
                            <li> Movie : {{ $movie -> title }} </li>
                            <li>Description : {{ $movie -> description }} </li>
                            <li>Category : {{ $movie -> category -> name }} </li>
                            <hr>
                        @endforeach
                    </ul>
                    </li>
                </ul>
            </li>
        @endforeach
    </ul>
@endsection

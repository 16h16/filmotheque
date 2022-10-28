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
            <li> Title : {{ $movie -> title }}
                <ul>
                    <li>Description : {{ $movie -> description }} </li>
                    <li>Category : {{ $movie -> category -> name }} </li>
                    <li>Actors :
                        <ul>
                            @foreach($movie -> actors as $actor)
                                <li> Name : {{ $actor -> lastname }} </li>
                                <li> Firstname : {{ $actor -> firstname }} </li>
                                <li> Gender : {{ $actor -> gender }} </li>
                                <li> Birth date : {{ $actor -> birth_date }} </li>
                                <hr>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </li>
        @endforeach
    </ul>
@endsection

@extends('layouts.app')

@section('title')
    Display categories
@endsection

@include('partials.navbar')

@section('content')
    <h1> Display categories </h1>
    <h2> All categories </h2>
    <ul>
        @foreach($categories as $category)
            <li> Category : {{ $category -> name }} </li>
            <ul>
                @foreach($category -> movies as $movie)
                    <li> Movie : {{ $movie -> title }}
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
        @endforeach
    </ul>
@endsection

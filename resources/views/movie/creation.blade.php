@extends('layouts.app')

@section('title')
    Create movie
@endsection

@include('partials.navbar')

@section('content')
    <h1> Create movie </h1>
    <h2> Form creation </h2>
    <form action="{{ route('movie.create') }}" method="POST">
        @csrf
        <div>
            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category -> id }}"> {{ $category -> name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="text" name="title" placeholder="title">
        </div>

        <div>
            <textarea name="description">Description..</textarea>
        </div>
        <div>
            <button> Create a new movie </button>
        </div>
    </form>
@endsection

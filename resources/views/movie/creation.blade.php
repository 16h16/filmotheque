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
            <label>Select a category : </label>
            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category -> id }}"> {{ $category -> name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Title : </label>
            <input type="text" name="title" placeholder="title">
        </div>

        <div>
            <label>Description : </label>
            <textarea name="description">Description..</textarea>
        </div>
        <div>
            <button> Create a new movie </button>
        </div>
    </form>
@endsection

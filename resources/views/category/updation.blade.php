@extends('layouts.app')

@section('title')
    Update category
@endsection

@include('partials.navbar')

@section('content')
    <h1> Update category </h1>
    <h2> Form update </h2>
    <form action="{{ route('category.update') }}" method="POST">
        @csrf
        <div>
            <label> Select a category : </label>
            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category -> id }}"> {{ $category -> name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label> New name : </label>
            <input type="text" name="name" placeholder="enter new name">
        </div>

        <div>
            <button> Update a category </button>
        </div>
    </form>
@endsection

@extends('layouts.app')

@section('title')
    Delete category
@endsection

@include('partials.navbar')

@section('content')
    <h1> Delete category </h1>
    <h2> Form delete </h2>
    <form action="{{ route('category.delete') }}" method="POST">
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
            <button> Delete a category </button>
        </div>
    </form>
@endsection

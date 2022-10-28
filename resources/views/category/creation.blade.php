@extends('layouts.app')

@section('title')
    Create category
@endsection

@include('partials.navbar')

@section('content')
    <h1> Create category </h1>
    <h2> Form creation </h2>
    <form action="{{ route('category.create') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <button> Create a new category </button>
        </div>
    </form>
@endsection

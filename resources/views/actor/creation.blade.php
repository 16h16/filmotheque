@extends('layouts.app')

@section('title')
    Create actor
@endsection

@include('partials.navbar')

@section('content')
    <h1> Create actor </h1>
    <h2> Form creation </h2>
    <form action="{{ route('actor.create') }}" method="POST">
        @csrf
        <div>
            <label>Firstname : </label>
            <input type="text" name="firstname" placeholder="firstname">
        </div>
        <div>
            <label>lastname : </label>
            <input type="text" name="lastname" placeholder="lastname">
        </div>
        <div>
            <label>Birth date : </label>
            <input type="date" name="birth_date" placeholder="birth_date">
        </div>
        <div>
            <label>Select a gender : </label>
            <select name="gender">
                <option value="man">man</option>
                <option value="woman">woman</option>
                <option value="not specify">not specify</option>
            </select>
        </div>
        <div>
            <button> Create a new actor </button>
        </div>
    </form>
@endsection

@extends('layouts.app')

@section('title')
    Update actor
@endsection

@include('partials.navbar')

@section('content')
    <h1> Update actor </h1>
    <h2> Form update </h2>
    <form action="{{ route('actor.update') }}" method="POST">
        @csrf
        <div>
            <label> Pick an actor </label>
            <select name="actor_id">
                @foreach($actors as $actor)
                    <option value="{{ $actor-> id }}"> {{ $actor -> firstname }}</option>
                @endforeach
            </select>
        </div>
        <hr>
        <div>
            <label> New firstname </label>
            <input type="text" name="firstname" placeholder="new firstname">
        </div>

        <div>
            <label> New lastname </label>
            <input type="text" name="lastname" placeholder="new lastname">
        </div>

        <div>
            <label> New birth date </label>
            <input type="date" name="birth_date" placeholder="new birth_date">
        </div>

        <div>
            <label> New gender </label>
            <select name="gender">
                <option value="man">man</option>
                <option value="woman">woman</option>
                <option value="not specify">not specify</option>
            </select>
        </div>

        <div>
            <button> Update a new actor </button>
        </div>
    </form>
@endsection

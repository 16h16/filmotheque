@extends('layouts.app')

@section('title')
    Delete actor
@endsection

@include('partials.navbar')

@section('content')
    <h1> Delete actor </h1>
    <h2> Form delete </h2>
    <form action="{{ route('actor.delete') }}" method="POST">
        @csrf
        <div>
            <label> Select an actor : </label>
            <select name="actor_id">
                @foreach($actors as $actor)
                    <option value="{{ $actor-> id }}"> {{ $actor -> firstname }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button> Delete an actor </button>
        </div>
    </form>
@endsection

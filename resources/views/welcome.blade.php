@extends('layout')

@section('title','My First Website')


@section('content')

    <h1>My First Website</h1>

    <ul>
        @foreach ($tasks as $task)
            <li><?= $task; ?></li>
        @endforeach

    </ul>

@endsection

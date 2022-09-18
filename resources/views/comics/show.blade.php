@extends('layout.main')
@section('main-content')
    <div class="container bg-white">
        <h1>{{ $comic['title'] }}</h1>
        <div class="details w-50 d-flex">
            <p class="p-4">{{ $comic['description'] }}</p>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        </div>
    </div>
@endsection

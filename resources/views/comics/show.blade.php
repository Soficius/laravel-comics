@extends('layout.main')
@section('main-content')
    <div class="small-container bg-white">
        <h1>{{ $comic['title'] }}</h1>
        <div class="details d-flex">
            <p class="w-75">{{ $comic['description'] }}</p>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        </div>
        <div class="wrap">
            <div class="w-50 p-r">
                <h3>Talent</h3>
                <div>
                    Art by:
                    @foreach ($comic['artists'] as $artist)
                        {{ $artist }},
                    @endforeach
                </div>
                <div>
                    Written By:
                    @foreach ($comic['writers'] as $writer)
                        {{ $writer }},
                    @endforeach
                </div>
            </div>
            <div>
                <div>
                    <h3>Specs</h3>
                    <p>Series: {{ $comic['type'] }}</p>
                    <p>U.s Price: {{ $comic['price'] }}</p>
                    <p>On Sale Date: {{ $comic['sale_date'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

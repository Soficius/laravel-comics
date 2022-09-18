@extends('layout.main')
@section('main-content')
    <div class="container box">
        @foreach ($media as $element)
            <div class="card">
                <a href="{{ route('comics.show', ['id' => $loop->index]) }}">
                    <img src="{{ $element['thumb'] }}" alt="{{ $element['title'] }}" />
                    <h3>{{ $element['title'] }}</h3>
                </a>
            </div>
        @endforeach
    </div>
@endsection

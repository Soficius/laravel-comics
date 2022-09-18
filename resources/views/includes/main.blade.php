@section('main-content')
    <div class="container box">
        @foreach ($media as $element)
            <div class="card">
                <img src="{{ $element['thumb'] }}" alt="{{ $element['title'] }}" />
                <h3>{{ $element['title'] }}</h3>
            </div>
        @endforeach
    </div>
@endsection

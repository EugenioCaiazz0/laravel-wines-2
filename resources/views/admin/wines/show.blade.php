
@section('content')

    <div class="container">

        <h1>{{ $wine->wine }}</h1>
        <p>{{ $wine->winery }}</p>
        <p>{{ $wine->vote }}</p>
        <p>{{ $wine->location }}</p>


        <a href="{{ route('admin.wines.show') }}">Back to projects</a>
    </div>

@endsection
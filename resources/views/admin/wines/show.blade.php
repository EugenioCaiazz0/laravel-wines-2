@extends('layouts.admin')
@section('content')

    <div class="container">

        <h1>{{ $wine->wine }}</h1>
        <p>{{ $wine->winery }}</p>
        <p>{{ $wine->vote }}</p>
        <p>{{ $wine->location }}</p>
        <img src="{{ $wine->image }}" alt="img">

        <a href="{{ route('admin.wines.index') }}">Back to projects</a>
        
    </div>

@endsection
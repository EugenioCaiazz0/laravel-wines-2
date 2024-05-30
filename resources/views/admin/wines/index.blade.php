@extends('layouts.admin')

@section('content')
<h1>wines</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col"> wine </th>
            <th scope="col"> winery </th>
            <th scope="col"> vote</th>
            <th scope="col"> location </th>
        </tr>
    </thead>

    @foreach ($wines as $wine)
        <tr>
            <td> {{$wine->wine}} </td>
            <td> {{$wine->winery}} </td>
            <td> {{$wine->vote}} </td>
            <td> {{$wine->location}} </td>


            <td>
                <a href="{{ route('admin.wines.show', $wine) }}" class="btn btn-success "> <i class="fa-solid fa-eye"></i> </a>
                <a href="" class="btn btn-warning "> <i class="fa-solid fa-pencil"></i> </a>
                <a href="" class="btn btn-danger "> <i class="fa-solid fa-trash"></i> </a>
            </td>
        </tr>
    @endforeach
@endsection



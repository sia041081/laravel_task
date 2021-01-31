@extends('layouts.admin')

@section('content')

<table class="table" style="margin: 10px; width: 98%;">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
    <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
        <td>{{$category->slug}}</td>
        <td>{{$category->isActive}}</td>
    </tr>
    @endforeach

    </tbody>
</table>

@endsection

@extends('layouts.admin')

@section('content')
    <div class="card-header">
        <a href="{{route('admin_create_category')}}">Добавление категории</a>
    </div>
    <table class="table" style="margin: 10px; width: 98%;">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Название</th>
            <th scope="col">Slug</th>
            <th scope="col">Описание</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>{{$category->description}}</td>
                <td><a href="{{route('admin_category_edit', ['id' => $category->id])}}">Редактировать</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection

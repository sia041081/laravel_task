@extends('layouts.admin')

@section('content')
    <div class="card-header">
        <a href="{{route('admin_create_product')}}">Добавление товара</a>
    </div>
    <table class="table" style="margin: 10px; width: 98%;">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
            <th scope="col">Цена</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>

                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td><a href="{{route('admin_product_edit', ['id' => $product->id])}}">Редактировать</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection

@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{route('admin_product_store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="" class="small mb-1">Название</label>
                <input type="text" class="form-control py-4" name="name">
            </div>

            <div class="form-group">
                <label for="" class="small mb-1">Описание</label>
                <textarea name="description" id="" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="" class="small mb-1">Цена</label>
                <input type="number" min="0" max="10000" class="form-control py-4" name="price">
            </div>
            <div class="form-group">
                <button class="btn btn-sm btn-info" type="submit">Сохранить</button>
            </div>
        </form>
    </div>

@endsection

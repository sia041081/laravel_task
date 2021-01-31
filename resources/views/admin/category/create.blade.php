@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{route('admin_category_store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="" class="small mb-1">Название</label>
                <input type="text" class="form-control py-4" name="name">
            </div>
            <div class="form-group">
                <label for="" class="small mb-1">Slug</label>
                <input type="text" class="form-control py-4" name="slug">
            </div>
            <div class="form-group">
                <textarea name="description" id="" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" class="form-control py-4" value="1" name="isActive">
            </div>
            <div class="form-group">
                <button class="btn btn-sm btn-info" type="submit">Сохранить</button>
            </div>
        </form>
    </div>

@endsection

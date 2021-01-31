@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{route('admin_category_update', ['id' => $category->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="" class="small mb-1">Название</label>
                <input type="text" class="form-control py-4" name="name" value="{{$category->name}}">
            </div>
            <div class="form-group">
                <label for="" class="small mb-1">Slug</label>
                <input type="text" class="form-control py-4" name="slug" value="{{$category->slug}}">
            </div>
            <div class="form-group">
                <textarea name="description" id="" class="form-control">{!! $category->description !!}</textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" class="form-control py-4" value="1" name="isActive"
                    {{$category->isActive?'checked':''}}/>

            </div>
            <div class="form-group">
                <button class="btn btn-sm btn-info" type="submit">Сохранить</button>
            </div>
        </form>
    </div>

@endsection

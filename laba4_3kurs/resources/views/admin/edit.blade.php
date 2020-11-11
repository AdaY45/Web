@extends('admin.layouts.app_admin')

@section('title','admin | lovely')

@section('content')
    <h1>Редагувати продукт</h1>
        <form action="/admin/save{{$product->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="image_admin">
                <h3>Картинка</h3>
                <input type="file" class="input_admin" name="image">
            </div>
            <div class="text_admin">
                <h3>Назва</h3>
                <input type="text" id="title" name="title">
                <h3>Опис</h3>
                <textarea class="textarea_admin" name="content">{{old('content',$product->content)}}</textarea>
                <h3>Ціна</h3>
                <input type="number" id="price" name="price">
            </div>
            <input type="submit" value="Save" class="savebtn">
        </form>
@endsection
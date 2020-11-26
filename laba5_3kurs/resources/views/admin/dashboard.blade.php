@extends('admin.layouts.app_admin')

@section('title','admin | lovely')

@section('content')
    <div class="new_products_title">Всі продукти</div>
    <div class="cards">
        @foreach($products as $product)
            <div class="card">
                <a href="/{{$product->id}}product" class="card_img">
                    <img src="images/{{$product->img}}.jpg"  alt="Card Back">
                    <img src="images/{{$product->img}}_hover.jpg" class="img-top" alt="Card Front">
                </a>
                <div class="card_text">
                    <div class="card_text_title">{{$product->title}}</div>
                    <div class="card_price">&#8372; {{$product->price}}</div>
                </div>
                <div class="update_buttons">
                    <a href="/admin/edit{{$product->id}}" class="adminBtn">Редагувати</a>
                    <a href="/admin/delete{{$product->id}}"class="adminBtn">Видалити</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
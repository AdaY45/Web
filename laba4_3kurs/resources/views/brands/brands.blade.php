@extends('layouts.add')

@section('title','brands | lovely')

@section('content')
            <main>
                <div class="sections_hero">
                    <div class="sections_hero_text">
                        <h2>Магазин</h2>
                        <div class="link"><a href="/">Головна</a> > Магазин</div>
                    </div>
                </div>
                <div class="all_products">
                    <div class="top">
                        <div class="new_products_title">Всі продукти</div>
                    </div>
                    <div class="products">
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
                        </div>
                    @endforeach
                    </div>
                </div>
@endsection
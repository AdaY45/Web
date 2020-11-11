@extends('layouts.add')

@section('title','lovely')

@section('content')
            <main>
            </div>
                <div class="slider_img">
                    <s id="s1"></s> 
                    <s id="s2"></s>
                    <s id="s3"></s>
                    <s id="s4"></s>

                    <div class="slider">
                        <div class="slide-1"></div>
                        <div class="slide-2"></div>
                        <div class="slide-3"></div>
                        <div class="slide-4"></div>
                    </div>
  
                    <div class="prevNext">
                        <div><a href="#s4"></a><a href="#s2"></a></div>
                        <div><a href="#s1"></a><a href="#s3"></a></div>
                        <div><a href="#s2"></a><a href="#s4"></a></div>
                        <div><a href="#s3"></a><a href="#s1"></a></div>
                    </div>

                    <div class="bullets">
                        <a href="#s1">1</a>
                        <a href="#s2">2</a>
                        <a href="#s3">3</a>
                        <a href="#s4">4</a>
                    </div>
                </div>
                <div class="new_products">
                    <div class="new_products_title">Нові надходження</div>
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
                <a href="#" class="hero_link">
                    <div class="hero_div">
                    <div class="hero">
                        <div class="hero_text">Догляд = здоров'я</div>
                    </div>
                </div>
                </a>
                <div class="new_block">
                    <div class="new_products_title">Нові категорії</div>
                    <div class="new_categories">
                    @foreach ($newCategories as $category)
                        @if ($category->aliasOf != null)
                            <div class="new_categories_card">
                                <img src="/images/{{$category->img}}.jpg">
                                <div class="card_text_card">{{$category->title}}</div>
                                <a class="button read_more" href="/{{$category->aliasOf}}category">See More</a>
                            </div>
                        @endif
                    @endforeach
                    </div>
                </div>
                <div class="blog">
                    <div class="new_products_title">Блог</div>
                        <div class="blog_cards">
                        @foreach($blogs as $blog)
                            <div class="blog_card">
                                <div class="blog_img"><img src="/images/{{$blog->img}}.jpg"></div>
                                <div class="blog_text">
                                    <div class="text_title">{{$blog->title}}</div>
                                    <div class="text_description">{{$blog->content}}</div>
                                </div>
                                <a class="button read_more" href="/{{$blog->id}}blog">Read More</a>
                            </div>
                        @endforeach
                </div>
@endsection
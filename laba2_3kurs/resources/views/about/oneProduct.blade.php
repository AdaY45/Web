@extends('layouts.add')

@section('title','oneProduct | lovely')

@section('content')
            <main>
                <div class="product">
                    <div class="product-gallery">
                        <div class="product-image">
                            <img id="expandedImg" src="/images/{{$oneProduct->img}}.jpg">
                        </div>
                        <div class="row">
                            <div class="column">
                                <img src="/images/{{$oneProduct->img}}.jpg" onclick="changeImg(this);">
                            </div>
                            <div class="column">
                                <img src="/images/product_1_hover.jpg" onclick="changeImg(this);">
                            </div>
                            <div class="column">
                                <img src="/images/product_1_2.jpg" onclick="changeImg(this);">
                            </div>
                            <div class="column">
                                <img src="/images/product_1_3.jpg" onclick="changeImg(this);">
                            </div>
                            <div class="column">
                                <img src="/images/product_1_4.jpg" onclick="changeImg(this);">
                            </div>
                            <div class="column">
                                <img src="/images/product_1_5.jpg" onclick="changeImg(this);">
                            </div>
                        </div>
                    </div>
                    <div class="product_desc">
                        <h2>{{$oneProduct->title}}</h2> 
                        <p>{{$oneProduct->content}}</p>
                        <div class="product_price">&#8372; {{$oneProduct->price}}</div>
                        <div class="instock">
                            @if($oneProduct->in_stock == 1)
                                Є в наявності
                            @else 
                                Немає в наявності
                            @endif
                        </div>
                        <div class="product_buttons">
                        @if($oneProduct->in_stock != 1) 
                            <button disabled id="myBtn">Додати у кошик</button>
                        @else 
                            <button id="myBtn">Додати у кошик</button>
                        @endif
                            <div class="heart-button">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox">
                                <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                                    <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"/>
                                    <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"/>

                                    <g id="grp7" opacity="0" transform="translate(7 6)">
                                        <circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2"/>
                                        <circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2"/>
                                    </g>

                                    <g id="grp6" opacity="0" transform="translate(0 28)">
                                        <circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2"/>
                                        <circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2"/>
                                    </g>

                                    <g id="grp3" opacity="0" transform="translate(52 28)">
                                        <circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2"/>
                                        <circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2"/>
                                    </g>

                                    <g id="grp2" opacity="0" transform="translate(44 6)">
                                        <circle id="oval2" fill="#CC8EF5" cx="5" cy="6" r="2"/>
                                        <circle id="oval1" fill="#CC8EF5" cx="2" cy="2" r="2"/>
                                    </g>

                                    <g id="grp5" opacity="0" transform="translate(14 50)">
                                        <circle id="oval1" fill="#91D2FA" cx="6" cy="5" r="2"/>
                                        <circle id="oval2" fill="#91D2FA" cx="2" cy="2" r="2"/>
                                    </g>

                                    <g id="grp4" opacity="0" transform="translate(35 50)">
                                        <circle id="oval1" fill="#F48EA7" cx="6" cy="5" r="2"/>
                                        <circle id="oval2" fill="#F48EA7" cx="2" cy="2" r="2"/>
                                    </g>

                                    <g id="grp1" opacity="0" transform="translate(24)">
                                        <circle id="oval1" fill="#9FC7FA" cx="2.5" cy="3" r="2"/>
                                        <circle id="oval2" fill="#9FC7FA" cx="7.5" cy="2" r="2"/>
                                    </g>
                                    </g>
                                </svg>
                                </label>
                            </div>
                        </div>
                        <div class="share_buttons">
                            <ul>
                                <li>
                                  <a class="facebook" href="#">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <img src="images/icons/social/facebook.svg">
                                  </a>
                                </li>
                                <li>
                                  <a class="twitter" href="#">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <img src="images/icons/social/twitter.svg">
                                  </a>
                                </li>
                                <li>
                                  <a class="instagram" href="#">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <img src="images/icons/social/instagram.svg">
                                  </a>
                                </li>
                                <li>
                                  <a class="google" href="#">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <img src="images/icons/social/telegram.svg">
                                  </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="description_title">Опис</div>
                    <div class="ingredients">Інгредієнти:</div>
                    <p>Isododecane, Cyclopentasiloxane, Trimethylsiloxysilicate, Kaolin, Silica 
                        Dimethyl Silylate, Dimethicone, Disteardimonium Hectorite, Hydrogenated 
                        Polyisobutene, Hydrogenated Soybean Oil, Paraffin, Microcrystalline Wax 
                        (Cera Microcristallina), Oryza Sativa (Rice) Bran Extract, Helianthus 
                        Annuus (Sunflower) Extract, Rosmarinus Officinalis (Rosemary) Leaf Extract, 
                        Tocopherol, Caprylyl Glycol, Stearic Acid, Propylene Carbonate, PEG/PPG-18/18 
                        Dimethicone, Triethoxycaprylylsilane, Ethylhexyl Methoxycinnamate, 
                        Ethylhexylglycerin, Flavor (Aroma). May Contain/Peut Contenir [+/-]: Iron 
                        Oxides (CI 77491, CI 77492, CI 77499), Red 7 Lake (CI 15850), Red 28 Lake 
                        (CI 45410), Red 30 Lake (CI 73360), Titanium Dioxide (CI 77891), Blue 1 Lake 
                        (CI 42090), Manganese Violet (CI 77742).
                    </p>
                    <div class="volume"><strong>Об’єм</strong>: 3,5 мл</div>
                </div>
                <div class="new_products new">
                    <div class="new_products_title fam_prod">Схожі товари</div>
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
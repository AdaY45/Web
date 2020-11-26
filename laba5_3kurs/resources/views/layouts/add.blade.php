<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">        <title>lovely</title>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" type="text/css" href="style/media.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
        <script type="text/javascript" src="./script/script.js"></script>
    </head>
    
    <body>
        <div class="container">
            <div class="topbar">
                <div class="topbar_caption">Офіційний партнер The Ordinary в Україні</div>
                <div class="topbar_menu">
                    <nav>
                        <a href="#">Про нас</a>
                        <a href="#">Контакти</a>
                        <a href="#">Оплата і доставка</a>
                        <!-- <a href="#">Благодійність</a> -->
                        <a href="/admin">Адмін</a>
                    </nav>
                </div>
            </div>
            <header>
                <a href="/" class="logo_link"><div class="logo">lovely</div></a>
                <nav class="topnav" id="myTopnav">
                    <a class="menu-burger" href='javascript:void(0);' onclick="menu()"><img src="/images/icons/menu.svg"></a>
                    <a href="/brands" class="menu-btn">Бренди</a>
                    <a href="/admin/category/additem" class="menu-btn">Макіяж</a>
                    <a href="#" class="menu-btn">Догляд</a>
                    <a href="#" class="menu-btn">Волосся</a>
                </nav>
                <div class="buttons">
                    <a href="#" class="search"><img src="images/icons/search.svg"></a>
                    <a href="#"><img src="images/icons/shopping-bag.svg"></a>
                </div>
            </header>

            @yield('content')

            <div class="instagram pages">
                    <div class="new_products_title">Instagram</div>
                    <div class="insta_imgs">
                    @for($i = 1; $i < 9; $i++)
                        <a href="#"><img src="/images/instagram_{{$i}}.jpg"></a>  
                    @endfor
                    </div>
                </div>
            </main>
            <footer>
                <nav>
                    <a href="#">Про нас</a>
                    <a href="#">Контакти</a>
                    <a href="#">Оплата і доставка</a>
                    <a href="#">Благодійність</a>
                </nav>
                <div class="copyright">&copy; 2015-2020 lovely&trade;</div>
            </footer>
        </div>
    </body>

</html>
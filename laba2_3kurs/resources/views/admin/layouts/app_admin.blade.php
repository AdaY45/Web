<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <title>lovely</title>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('style/media.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
        <script type="text/javascript" src="{{asset('script/script.js')}}"></script>
    </head>
    
    <body>
        <div class="container">
            <header>
                <a href="/admin" class="logo_link"><div class="logo">lovely</div></a>
                <nav class="topnav" id="myTopnav">
                    <a class="menu-burger" href='javascript:void(0);' onclick="menu()"><img src="/images/icons/menu.svg"></a>
                    <a href="/admin" class="menu-btn">Головна</a>
                    <a href="/admin/categories" class="menu-btn">Категорії</a>
                    <a href="/admin/blog" class="menu-btn">Блог</a>
                    <a href="/admin/contacts" class="menu-btn">Контакти</a>
                </nav>
            </header>
            <main>
                <div class="container admin">
                    @if(Session::has('message'))
                        <div class="alert-success">
                        {{Session::get('message')}}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @yield('content')

                </div>
            </main>
        </div>
    </body>

</html>
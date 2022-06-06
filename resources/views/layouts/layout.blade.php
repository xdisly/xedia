<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Описание">
    <meta name="keywords" content="Xedia Project, интернет-проекты, медиа-проекты, выгодное размещение рекламы, сайты, проекты">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') — Xedia Project</title>
    <link rel="icon" href="{{ asset ('assets/front/img/ico.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">
        <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(62897644, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/62897644" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
<div id="preloder">
    <div class="loader"></div>
</div>
<div class="offcanvas__menu__overlay"></div>
<div class="offcanvas__menu__wrapper">
    <div class="canvas__close">
        <span class="fa fa-times-circle-o"></span>
    </div>
    <nav class="offcanvas__menu mobile-menu">
        <ul>
            <li class><a href="{{route('home')}}">Главная</a></li>
            <li class><a href="{{route('home.blog')}}">Блог</a></li>
            <li class><a href="{{route('home.projects')}}">Проекты</a></li>
            <li class><a href="{{route('home.contacts')}}">Контакты</a></li>
            <li class><a href="{{route('search.index')}}"><i class="fas fa-search"></i></a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
</div>
<header class="header-section header-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="/"><img src="{{ asset ('assets/front/img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <nav class="header__menu">
                    <ul>
                        <li class><a href="{{route('home')}}">Главная</a></li>
                        <li class><a href="{{route('home.blog')}}">Блог</a></li>
                        <li class><a href="{{route('home.projects')}}">Проекты</a></li>
                        <li class><a href="{{route('home.contacts')}}">Контакты</a></li>
                        <li class><a href="{{route('search.index')}}"><i class="fas fa-search"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="canvas__open">
            <span class="fa fa-bars"></span>
        </div>
    </div>
</header>
    @yield('content')
<footer class="footer-section">
    <div class="set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 sol-sm-6">
                    <div class="footer__text-widget">
                        <h5>Интернет-проекты</h5>
                        <ul>
                            <li><a href="/">TopSoundboard</a></li>
                            <li><a href="/">tvcube▢</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__text-widget">
                        <h5>Медиа-проекты</h5>
                        <ul>
                            <li><a href="/">6X6</a></li>
                            <li><a href="/">NEO TV</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__text-widget">
                        <h5>Xedia Project</h5>
                        <ul>
                            <li class><a href="{{route('home.blog')}}">Блог</a></li>
                            <li class><a href="{{route('home.projects')}}">Проекты</a></li>
                            <li class><a href="{{route('home.contacts')}}">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__text-copyright">
                <p>Xedia Project &copy; <script>document.write(new Date().getFullYear());</script></p>
            </div>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/a38b075292.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('assets/front/js/front.js') }}"></script>
</body>
</html>

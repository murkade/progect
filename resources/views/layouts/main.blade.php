<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/mainStyle.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/script.js') }}" defer></script>
    @stack('scripts')
    <title>Auctions</title>
</head>
<body>
<header>
    <div class="containerTop">
        <div class="wrapTopContainer">
            <div class="btnMenu">
                <div class="btnDecoLine"></div>
                <div class="btnDecoLine"></div>
                <div class="btnDecoLine"></div>
            </div>
            <div class="containerTitle">
                <a href="" class="wrapLogo">
                    <img src="{{asset('images/logo.png')}}" alt="logo" class="logo">
                </a>
                <div class="wrapH">
                    <h1>Wizard Bet</h1>
                    <p>аукционны для поклонников Wizards </p>
                </div>
            </div>
            <ul class="topMenu">
                <li class="topMenuItem"><a href="" class="linkMenu">аукционы</a></li>
                <li class="topMenuItem"><a href="" class="linkMenu">правила</a></li>
                <li class="topMenuItem"><a href="" class="linkMenu">инфо</a></li>
                <li class="topMenuItem"><a href="" class="linkMenu">кабинет</a></li>
                <li class="topMenuItem"><a href="" class="linkMenu">AD_panel</a></li>
            </ul>
            <div class="wrapTopLine">
                <form  action="" method="post" class="wrapSearch">
                    <input type="search" class="input_search" placeholder="что ищем?">
                    <button class="btn search">Поиск</button>
                </form>
                <a href="" class="enter">Войти</a>
            </div>
        </div>

    </div>
</header>
 @yield("content")
</body>
</html>
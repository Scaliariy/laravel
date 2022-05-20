<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @admin
    <title>Панель адміністратора: @yield('title')</title>
    @endadmin
    @person
    <title>Кабінет: @yield('title')</title>
    @endperson
    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/img/site.webmanifest">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                @lang('main.return_home')
            </a>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @admin
                    <li><a href="{{route('categories.index')}}">Категорії</a></li>
                    <li><a href="{{ route('products.index') }}">Товари</a></li>
                    <li><a href="{{ route('properties.index') }}">Властивості</a></li>
                    <li><a href="{{ route('home') }}">Замовлення</a></li>
                    <li><a href="{{ route('users.index') }}">Користувачі</a></li>
                    @endadmin
                    @person
                    <li><a href="{{ route('person.orders.index') }}">Замовлення</a></li>
                    @endperson
                </ul>

                @guest
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">@lang('main.login')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">@lang('main.registration')</a>
                        </li>
                    </ul>
                @endguest

                @auth
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" v-pre>
                                @admin
                                    Адміністратор - {{\Illuminate\Support\Facades\Auth::user()->name}}
                                @else
                                    Користувач - {{\Illuminate\Support\Facades\Auth::user()->name}}
                                    @endadmin
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout')}}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Вийти
                                </a>

                                <form id="logout-form" action="{{ route('logout')}}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>

                                <a class="dropdown-item" href="{{ route('profile.edit', Auth::user()) }}">
                                    Редагувати профіль
                                </a>
                            </div>
                        </li>
                    </ul>
                @endauth
            </div>
        </div>
    </nav>

    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @admin
    <title>Панель адміністратора: @yield('title')</title>
    @endadmin
    @person
    <title>Кабінет: @yield('title')</title>
    @endperson

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/bootstrap5_2/css/main-navbar.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/img/site.webmanifest">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

</head>

<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
    <div class="container">
        <!-- Site Logo Here -->
        @person
        <a class="navbar-brand" href="{{ route('index') }}">@lang('main.return_home')</a>
        @endperson
        @admin
        <a class="navbar-brand" href="{{ route('index') }}">Повернутись на сайт</a>
        @endadmin
        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobileToggle"
                aria-controls="navbarMobileToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMobileToggle">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @admin
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Замовлення</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('categories.index')}}">Категорії</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('products.index') }}">Товари</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('properties.index') }}">Властивості</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('users.index') }}">Користувачі</a>
                </li>
                @endadmin
                @person
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('person.orders.index') }}">Замовлення</a>
                </li>
                @endperson
            </ul>

            <!-- Right Side -->
            <div class="btn-group float-end">
                <a href="#" class="dropdown-toggle text-decoration-none text-light" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle"></i>
                    <span>
                        @admin
                                    Адміністратор - {{\Illuminate\Support\Facades\Auth::user()->name}}
                        @else
                            Користувач - {{\Illuminate\Support\Facades\Auth::user()->name}}
                            @endadmin
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a href="{{ route('profile.edit', Auth::user()) }}" class="dropdown-item">
                            <i class="bi bi-gear"></i> Редагувати профіль</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="{{ route('logout')}}" class="dropdown-item"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i> Вийти </a>
                        <form id="logout-form" action="{{ route('logout')}}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<body>
<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>
</html>

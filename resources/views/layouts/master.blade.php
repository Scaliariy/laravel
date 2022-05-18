<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@lang('main.online_shop'): @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/bootstrap5_2/css/main-navbar.css">

</head>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">@lang('main.online_shop')</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-lg-center align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page"
                       href="{{ route('index') }}">@lang('main.all_products')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories') }}">@lang('main.categories')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('basket') }}">@lang('main.cart')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('locale', __('main.set_lang')) }}">
                        @if(Lang::locale() == 'ua')
                            <img src="/img/us.png" alt="EN" style="width:20px;height:20px;">
                        @else
                            <img src="/img/ua.png" alt="RU" style="width:20px;height:20px;">
                        @endif</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $currencySymbol }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="currencys-dropdown">
                        @foreach ($currencies as $currency)
                            <li><a class="dropdown-item"
                                   href="{{ route('currency', $currency->code) }}">{{ $currency->symbol }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            <form class="d-flex" method="GET" role="search" action="{{route("index")}}">
                <input class="form-control me-2" type="search" placeholder="@lang('main.search')" aria-label="Search"
                       name="search" id="search">
                {{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
            </form>
            <ul class="navbar-nav d-flex justify-content-lg-center align-items-lg-center">
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">@lang('main.login')</a></li>
                @endguest

                @auth
                    @admin
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">@lang('main.admin_panel')</a>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('person.orders.index') }}">@lang('main.my_orders')</a></li>
                    @endadmin
                    <li class="nav-item"><a class="nav-link" href="{{ route('get-logout') }}">@lang('main.logout')</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div id="main">
    <div class="container">
        @if(session()->has('success'))
            <div class="text-center py-1"><p class="alert alert-success">{{ session()->get('success') }}</p></div>
        @endif
        @if(session()->has('warning'))
            <div class="text-center py-1"><p class="alert alert-warning">{{ session()->get('warning') }}</p></div>
        @endif
    </div>
    @yield('content')
</div>
<div class="container">
    <footer class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-5 pb-5 mb-5 pt-3 mt-3 border-top">
        <div class="col mb-3">
            <h5>@lang('main.categories')</h5>
            <ul class="nav flex-column">
                @foreach($categories as $category)
                    <li class="nav-item mb-2"><a href="{{ route('category', $category->code) }}"
                                                 class="nav-link p-0 text-muted">{{ $category->__('name') }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col mb-3">
            <h5>@lang('main.popular_products')</h5>
            <ul class="nav flex-column">
                @foreach ($bestSkus as $bestSku)
                    <li class="nav-item mb-2"><a
                            href="{{ route('sku', [$bestSku->product->category->code, $bestSku->product->code, $bestSku]) }}"
                            class="nav-link p-0 text-muted">{{ $bestSku->product->__('name') }}</a></li>
                @endforeach
            </ul>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
<script src="/bootstrap5_2/js/main-navbar.js"></script>
</body>
</html>

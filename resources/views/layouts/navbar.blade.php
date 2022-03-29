<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>@lang('main.online_shop'): @yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">


    <!-- Bootstrap core CSS -->
    <link href="/bootstrap5_1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/bootstrap5_1/css/navbar.css" rel="stylesheet">
</head>
<body>

<main>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">@lang('main.online_shop')</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
                    aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @activeadminpanel('index')"
                           href="{{ route('index') }}">@lang('main.all_products')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @activeadminpanel('categories')"
                           href="{{ route('categories') }}">@lang('main.categories')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @activeadminpanel('basket')"
                           href="{{ route('basket') }}">@lang('main.cart')</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown"
                           aria-expanded="false">{{ $currencySymbol }}</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown07">
                            @foreach ($currencies as $currency)
                                <li><a class="dropdown-item"
                                       href="{{ route('currency', $currency->code) }}">{{ $currency->symbol }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @activeadminpanel('basket')"
                           href="{{ route('locale', __('main.set_lang')) }}">@if(Lang::locale() == 'ru')
                                EN
                            @else
                                RU
                            @endif</a>
                    </li>
                </ul>
                <form>
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search" id="search">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="starter-template">
            @if(session()->has('success'))
                <p class="alert alert-success">{{ session()->get('success') }}</p>
            @endif
            @if(session()->has('warning'))
                <p class="alert alert-warning">{{ session()->get('warning') }}</p>
            @endif
            @yield('content')
        </div>
    </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>

<script src="/bootstrap5_1/js/bootstrap.bundle.min.js"></script>


</body>
</html>

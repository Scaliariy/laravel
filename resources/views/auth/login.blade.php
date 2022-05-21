@extends('auth.layouts.auth-master')

@section('title', __('main.authorization'))

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="mb-3">
                    <h3>@lang('main.authorization')</h3>
                </div>
                <form method="POST" action="{{ route('login') }}" class="bg-light shadow p-4">
                    <div class="mb-3">
                        <label for="email">@lang('main.email')</label>
                        <input type="email" class="form-control" name="email" id="email" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="password">@lang('main.password')</label>
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="Password" required>
                    </div>

                    <div class="row mb-3 ">
                        <a href="{{route('password.request')}}"
                           class="float-end text-decoration-none">@lang('main.forgot_password') </a>
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">@lang('main.login')</button>
                    </div>
                    <div class="mb-3 text-center">
                        <a class="btn btn-success" href="{{ route('index') }}">@lang('main.return_home')</a>
                    </div>
                    <hr>
                    <p class="text-center mb-0">@lang('main.if_you_havent') <a
                            href="{{ route('register') }}">@lang('main.registration')</a></p>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection


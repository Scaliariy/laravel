@extends('auth.layouts.auth-master')

@section('title', __('main.registration'))

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="mb-3">
                    <h3>@lang('main.registration')</h3>
                </div>
                <form method="POST" action="{{ route('register') }}" class="border p-4 bg-light shadow">
                    <div class="row">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="mb-3 col-md-12">
                            <label for="name">@lang('main.name')</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                                   required autofocus>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="email">@lang('main.email')</label>
                            <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}"
                                   required>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="password">@lang('main.password')</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="password-confirm">@lang('main.confirm_password')</label>
                            <input type="password" name="password_confirmation" id="password-confirm"
                                   class="form-control" required>
                        </div>

                        <div class="col-md-12 mb-3 text-center">
                            <button type="submit" class="btn btn-primary">@lang('main.registration')</button>
                        </div>
                        <div class="mb-3 text-center">
                            <a class="btn btn-success" href="{{ route('index') }}">@lang('main.return_home')</a>
                        </div>
                    </div>
                    <hr>
                    <p class="text-center mb-0">@lang('main.if_you_have') <a
                            href="{{ route('login') }}">@lang('main.login')</a></p>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection


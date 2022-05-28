@extends('layouts.master')

@section('title', 'About us')

@section('content')
    <div class="px-4 pt-5 mt-5 text-center">
        <img class="d-block mx-auto mb-4" src="/img/logo.svg" alt="" style="width: 10vh; height: 10vh">
        <h1 class="display-5 fw-bold">@lang('main.online_apteka')</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">@lang('main.about_us_txt_0')</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">@lang('main.to_goods')</button>
            </div>
        </div>
    </div>
    <div class="container px-4 py-5" id="featured-3">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                    <i class="bi bi-hand-thumbs-up"></i>
                </div>
                <h2>@lang('main.about_us_txt_1')</h2>
                <p>@lang('main.about_us_txt_1.1')</p>
                <a href="#" class="btn btn-success d-inline-flex align-items-center">
                    @lang('main.to_goods')
                </a>
            </div>
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                    <i class="bi bi-hourglass-split"></i>
                </div>
                <h2>@lang('main.about_us_txt_2')</h2>
                <p>@lang('main.about_us_txt_2.1')</p>
                <a href="#" class="btn btn-success d-inline-flex align-items-center">
                    @lang('main.to_goods')
                </a>
            </div>
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                    <i class="bi bi-line"></i>
                </div>
                <h2>@lang('main.about_us_txt_3')</h2>
                <p>@lang('main.about_us_txt_3.1')</p>
                <a href="#" class="btn btn-success d-inline-flex align-items-center">
                    @lang('main.to_goods')
                </a>
            </div>
        </div>
    </div>
@endsection

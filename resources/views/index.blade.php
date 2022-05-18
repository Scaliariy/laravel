@extends('layouts.master')

@section('title', __('main.title'))

@section('content')
    <header class="container text-center fs-2 py-2">@lang('main.all_products')</header>

    <div class="container">
        <div class="pb-2 d-md-none text-end">
            <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">@lang('main.filter')
            </button>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">@lang('main.filter')</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form method="GET" action="{{route("index")}}">
                    <div class="mb-3">
                        <label for="price_from" class="form-label">@lang('main.price_from')</label>
                        <input type="text" name="price_from" id="price_from" class="form-control"
                               value="{{ request()->price_from}}">
                    </div>
                    <div class="mb-3">
                        <label for="price_to" class="form-label">@lang('main.to')</label>
                        <input type="text" name="price_to" id="price_to" class="form-control"
                               value="{{ request()->price_to }}">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <label class="form-check-label" for="new">
                                @lang('main.properties.new')
                            </label>
                            <input type="checkbox"  name="new" id="new" class="form-check-input"
                                   @if(request()->has('new')) checked @endif>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="hit" id="hit"
                                   @if(request()->has('hit')) checked @endif>
                            <label class="form-check-label" for="hit">
                                @lang('main.properties.hit')
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="recommend" id="recommend"
                                   @if(request()->has('recommend')) checked @endif>
                            <label class="form-check-label" for="recommend">
                                @lang('main.properties.recommend')
                            </label>
                        </div>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="submit" class="btn btn-primary">@lang('main.filter')</button>
                        <a href="{{ route("index") }}" class="btn btn-warning">@lang('main.reset')</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-none d-md-block">
            <form method="GET" action="{{route("index")}}">
                <div class="row py-3 align-items-center text-center">
                    <div class="col-4">
                        <div class="input-group">
                            <span class="input-group-text">@lang('main.price_from')</span>
                            <input type="text" class="form-control" name="price_from" id="price_from" value="{{ request()->price_from}}">
                            <span class="input-group-text">@lang('main.to')</span>
                            <input type="text" class="form-control" name="price_to" id="price_to" value="{{ request()->price_to }}">
                        </div>
                    </div>
                    <div class="col-auto">
                        <input class="form-check-input" type="checkbox" name="new" id="new-lg"
                               @if(request()->has('new')) checked @endif>
                        <label class="form-check-label" for="new-lg">
                            @lang('main.properties.new')
                        </label>
                    </div>
                    <div class="col-auto">
                        <input class="form-check-input" type="checkbox" name="hit" id="hit-lg"
                               @if(request()->has('hit')) checked @endif>
                        <label class="form-check-label" for="hit-lg">
                            @lang('main.properties.hit')
                        </label>
                    </div>
                    <div class="col-md-auto">
                        <input class="form-check-input" type="checkbox" name="recommend" id="recommend-lg"
                               @if(request()->has('recommend')) checked @endif>
                        <label class="form-check-label" for="recommend-lg">
                            @lang('main.properties.recommend')
                        </label>
                    </div>

                    <div class="col text-end">
                        <div class="btn-group-vertical d-lg-none" role="group" aria-label="Basic mixed styles example">
                            <button type="submit" class="btn btn-primary">@lang('main.filter')</button>
                            <a href="{{ route("index") }}" class="btn btn-warning">@lang('main.reset')</a>
                        </div>
                        <div class="btn-group d-none d-lg-block" role="group" aria-label="Basic mixed styles example">
                            <button type="submit" class="btn btn-primary">@lang('main.filter')</button>
                            <a href="{{ route("index") }}" class="btn btn-warning">@lang('main.reset')</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div
            class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6
            g-3 g-sm-3 g-md-3 g-lg-3 g-xl-3">
            @foreach($skus as $sku)
                @include('layouts.card', compact('sku'))
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center pt-4">
        {{$skus->links('pagination::bootstrap-4')}}
    </div>
@endsection

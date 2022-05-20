@extends('layouts.master')

@section('title', __('basket.place_order'))

@section('content')
    <div class="container py-3 text-center">
        <h1>@lang('basket.approve_order'):</h1>
        <div class="row g-3 justify-content-center align-items-center">
            <div class="col-lg-6 col-8 mb-5">
                <p class="mt-3">@lang('basket.full_cost'): <b>{{ $order->getFullSum() }} {{ $currencySymbol }}</b></p>
                <p>@lang('basket.personal_data'):</p>
                <form action="{{ route('basket-confirm') }}" method="POST">
                    <div class="row pt-3 mb-3 justify-content-center align-items-center text-start">
                        <label for="name" class="col-md-2 col-sm-4 col-form-label">@lang('basket.data.name'): </label>
                        <div class="col-md-10 col-sm-8">
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="row pt-3 mb-3 justify-content-center align-items-center text-start">
                        <label for="phone" class="col-md-2 col-sm-4 col-form-label">@lang('basket.data.phone'): </label>
                        <div class="col-md-10 col-sm-8">
                            <input type="text" name="phone" class="form-control" id="phone">
                        </div>
                    </div>
                    @guest
                        <div class="row pt-3 mb-3 justify-content-center align-items-center text-start">
                            <label for="email" class="col-md-2 col-sm-4 col-form-label">@lang('basket.data.email'): </label>
                            <div class="col-md-10 col-sm-8">
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                        </div>
                    @endguest
                    @csrf
                    <input type="submit" class="mt-3 btn btn-success" value="@lang('basket.approve_order')">
                </form>
            </div>
        </div>
    </div>
@endsection

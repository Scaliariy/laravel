@extends('auth.layouts.master')

@section('title', 'Замовлення ' . $order->id)

@section('content')
    <div class="py-4">
        @admin
        @php
            App::setLocale('ua');
        @endphp
        @endadmin
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>@lang('main.order') №{{ $order->id }}</h1>
                    <p>@lang('main.customer'): <b>{{ $order->name }}</b></p>
                    <p>@lang('basket.data.phone'): <b>{{ $order->phone }}</b></p>
                    <div class="table-responsive-sm">
                        <table class="table table-striped align-middle">
                            <thead>
                            <tr>
                                <th>@lang('main.product')</th>
                                <th>@lang('basket.count')</th>
                                <th>@lang('product.price')</th>
                                <th>@lang('basket.cost')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($skus as $sku)
                                <tr>
                                    <td>
                                        <a href="{{route('sku', [$sku->product->category->code, $sku->product->code, $sku])}}">
                                            <img height="56px"
                                                 src="{{ Storage::url($sku->image) }}">
                                            {{ $sku->product->__('name') }}
                                        </a>
                                    </td>
                                    <td class="text-center"><span class="badge bg-secondary">{{$sku->pivot->count}}</span></td>
                                    <td>{{ $sku->pivot->price }} {{ $order->currency->symbol }}</td>
                                    <td>{{ $sku->pivot->price * $sku->pivot->count}} {{ $order->currency->symbol }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3" class="text-end"><b>@lang('basket.full_cost'):</b></td>
                                <td><b>{{ $order->sum }} {{ $order->currency->symbol }}</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection

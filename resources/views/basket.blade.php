@extends('layouts.master')

@section('title', __('basket.cart'))

@section('content')
    <div class="container  py-3">
        <h1>@lang('basket.cart')</h1>
        <p>@lang('basket.ordering')</p>

        <table class="table table-striped align-middle">
            <thead>
            <tr>
                <th>@lang('basket.name')</th>
                <th>@lang('basket.count')</th>
                <th>@lang('basket.price')</th>
                <th>@lang('basket.cost')</th>
            </tr>
            </thead>
            <colgroup>
                <col style="width: 30%"/>
            </colgroup>
            <tbody>
            @foreach($order->skus as $sku)
                <tr>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        <div class="row row-cols-1 row-cols-sm-1">
                            <div class="col">
                                <a
                                    href="{{ route('sku', [$sku->product->category->code, $sku->product->code, $sku]) }}">
                                    <img height="56px" src="{{ Storage::url($sku->image) }}">
                                </a>
                            </div>
                            <div class="col">
                                <div class="text-truncate"><a
                                        href="{{ route('sku', [$sku->product->category->code, $sku->product->code, $sku]) }}">
                                        {{ $sku->product->__('name') }}
                                    </a></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column flex-sm-row align-items-center">
                            <span
                                class="badge bg-secondary align-items-center justify-content-sm-center h-100 m-2">{{ $sku->countInOrder }}</span>
                            <div class="btn-group-vertical align-items-center justify-content-sm-center h-100">
                                <form action="{{ route('basket-remove', $sku) }}" method="POST">
                                    <button type="submit" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-dash-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
                                        </svg>@csrf
                                    </button>
                                </form>
                                <form action="{{ route('basket-add', $sku) }}" method="POST">
                                    <button type="submit" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                        </svg>
                                    </button>@csrf
                                </form>
                            </div>
                        </div>
                    </td>
                    <td>{{ $sku->price }} {{ $currencySymbol }}</td>
                    <td>{{ $sku->price * $sku->countInOrder }} {{ $currencySymbol }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3">@lang('basket.full_cost'):</td>
                <td>{{ $order->getFullSum() }} {{ $currencySymbol }}</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{ route('basket-place') }}">@lang('basket.place_order')</a>
        </div>
    </div>
@endsection

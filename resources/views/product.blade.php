@extends('layouts.navbar')
{{--@extends('layouts.master')--}}

@section('title', __('main.product'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">

                <h2 class="p-3">{{ $sku->product->category->name }} / {{ $sku->product->__('name') }}</h2>
                <img src="{{ Storage::url($sku->product->image) }}" style="max-height: 300px;">

                <div class="container p-3">
                    <div class="row">
                        <div class="col p-3 text-start">
                            <h1>{{ $sku->product->__('name') }}</h1>
                        </div>
                        <div class="w-100"></div>
                        <div class="col p-3">
                            @isset($sku->product->properties)
                                @foreach($sku->propertyOptions as $propertyOption)
                                    <h6 class="text-start">{{$propertyOption->property->__('name')}}
                                        : {{$propertyOption->__('name')}}</h6>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>

                <div class="row cols-3 row-cols-2 p-3">
                    <div class="col">
                        <p class="text-start">@lang('product.price'): <b>{{ $sku->price }} {{ $currencySymbol }}</b></p>
                    </div>
                    <div class="col text-end">
                        @if($sku->isAvailable())
                            <form action="{{ route('basket-add', $sku) }}" method="POST">
                                <button type="submit" class="btn btn-success"
                                        role="button">@lang('product.add_to_cart')</button>

                                @csrf
                            </form>
                        @else

                            <span>@lang('product.not_available')</span>
                            <br>
                            <span>@lang('product.tell_me'):</span>
                            <div class="warning">
                                @if($errors->get('email'))
                                    {!! $errors->get('email')[0] !!}
                                @endif
                            </div>
                            <form method="POST" action="{{ route('subscription', $sku) }}">
                                @csrf
                                <input type="text" name="email"/>
                                <button type="submit">@lang('product.subscribe')</button>
                            </form>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="row border border-white">
                    <div class="col text-start p-3"><p>{{ $sku->product->__('description') }}</p></div>
                </div>
            </div>
            <div class="col">
                @if(!is_null($sku->product->instruction) && !empty($sku->product->instruction))
                <iframe style="width: 100%; height: 80vh; border: 1px solid #D1D1D1;"
                        src="{{ Storage::url($sku->product->instruction) }}"></iframe>
                @else
                    <iframe style="width: 100%; height: 80vh; border: 1px solid #D1D1D1;"
                            src="{{ Storage::url('instructions/R6egiuZ72gyDT4FtVHTIDmb8aB9JrxPrhnnVECIp.html') }}"></iframe>
                @endif
            </div>
        </div>
    </div>




@endsection

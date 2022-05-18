@extends('layouts.master')

@section('title', __('main.product'))

@section('content')
    <div class="container">
        <h3 class="p-3">{{ $sku->product->category->__('name') }} / {{ $sku->product->__('name') }}</h3>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col-12 col-md-6">
                <div class="product-img">
                    <img id="product-img" src="{{ Storage::url($sku->image) }}">
                </div>
                <div class="container p-3">
                    <div class="row">
                        <div class="col p-3 text-start">
                            <h2>{{ $sku->product->__('name') }}</h2>
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
                            <div class="warning text-start">
                                @if($errors->get('email'))
                                    {!! $errors->get('email')[0] !!}
                                @endif
                            </div>
                            <form method="POST" action="{{ route('subscription', $sku) }}">
                                <div class="mb-3 text-start">
                                    <label for="exampleInputEmail1"
                                           class="form-label">@lang('product.not_available')</label>
                                    <label for="exampleInputEmail1" class="form-label">@lang('product.tell_me'):</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-primary">@lang('product.subscribe')</button>
                                @csrf
                            </form>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col text-start p-3"><p>{{ $sku->product->__('description') }}</p></div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                @if(!is_null($sku->product->instruction) && !empty($sku->product->instruction))
                    <iframe style="width: 100%; height: 80vh; border: 1px solid #D1D1D1;"
                            src="{{ Storage::url($sku->product->instruction) }}"></iframe>
                @else
                    <iframe style="width: 100%; height: 80vh; border: 1px solid #D1D1D1;"
                            src="{{ Storage::url('instructions/not_found_instruction.html') }}"></iframe>
                @endif
            </div>
        </div>
    </div>
@endsection

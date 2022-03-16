@extends('layouts.master')
@section('title', 'Товар')
@section('content')
    <h1>{{$product->name}}</h1>
    <h1>{{$product->category->name}}</h1>
    <p>Цена: <b>{{$product->price}} руб.</b></p>
    <img src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}">
    <p>{{$product->description}}</p>

    @if($product->isAvailable())
        <form action="{{route('basket-add', $product)}}" method="POST">
            <button type="submit" class="btn btn-success" href="">Добавить в корзину</button>
            @csrf
        </form>
    @else
        {{--            <button type="submit" class="btn btn-secondary" role="button" disabled>Не доступен</button>--}}
        <span>Не доступен</span>
        <br>
        <span>Сообщить мне, когда товар будет в наличии:</span>
        <div class="warning">
            @if($errors->get('email'))
                {!! $errors->get('email')[0]!!}
            @endif
        </div>
        <form method="POST" action="{{route('subscription', $product)}}">
            @csrf
            <input type="text" name="email">
            <button type="submit">Отправить</button>
        </form>
    @endif

@endsection

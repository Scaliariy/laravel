@extends('layouts.master')
@section('title', 'Товар')
@section('content')
    <h1>{{$product->name}}</h1>
    <h1>{{$product->category->name}}</h1>
    <p>Цена: <b>{{$product->price}} руб.</b></p>
    <img src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}">
    <p>{{$product->description}}</p>
    <form action="{{route('basket-add', $product)}}" method="POST">
        @if($product->isAvailable())
            <button type="submit" class="btn btn-success" href="">Добавить в корзину</button>
        @else
            <button type="submit" class="btn btn-secondary" role="button" disabled>Не доступен</button>
        @endif
        @csrf
    </form>
@endsection

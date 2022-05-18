@extends('layouts.master')

@section('title', __('main.category') . $category->__('name'))

@section('content')
    <div class="container text-center py-2">
        <h1>
            {{$category->__('name')}}
        </h1>
        <p>
            {{ $category->__('description') }}
        </p>
        <div class="container">
            <div
                class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6
            g-3 g-sm-3 g-md-3 g-lg-3 g-xl-3">
                @foreach($category->products->map->skus->flatten() as $sku)
                    @include('layouts.card', compact('sku'))
                @endforeach
            </div>
        </div>
    </div>
@endsection

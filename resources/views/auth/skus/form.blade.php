@extends('auth.layouts.master')
{{--@extends('auth.layouts.sidebar')--}}

@isset($sku)
    @section('title', 'Редагувати Sku ' . $sku->name)
@else
    @section('title', 'Створити Sku')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($sku)
            <h1>Редагувати Sku продукту <b>{{ \App\Models\Product::where('id',$sku->product_id)->get()->firstOrFail()->name }}</b></h1>
        @else
            <h1>Додати Sku</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($sku)
              action="{{ route('skus.update', [$product, $sku]) }}"
              @else
              action="{{ route('skus.store', $product) }}"
            @endisset
        >
            <div>
                @isset($sku)
                    @method('PUT')
                @endisset
                @csrf
                <br>
                <div class="input-group row">
                    <label for="price" class="col-sm-2 col-form-label">Ціна: </label>
                    <div class="col-sm-2">
                        @include('auth.layouts.error',['fieldName'=>'price'])
                        <input type="text" class="form-control" name="price" id="price"
                               value="@isset($sku){{ round($sku->getRawOriginal('price'),2) }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="count" class="col-sm-2 col-form-label">Количество: </label>
                    <div class="col-sm-2">
                        @include('auth.layouts.error',['fieldName'=>'count'])
                        <input type="text" class="form-control" name="count" id="count"
                               value="@isset($sku){{ $sku->count }}@endisset">
                    </div>
                </div>
                <br>

                @foreach($product->properties as $property)
                    <div class="input-group row">
                        <label for="property_id[{{$property->id}}]"
                               class="col-sm-2 col-form-label">{{ $property->name }}: </label>
                        <div class="col-sm-6">
                            <select name="property_id[{{$property->id}}]" class="form-control">
                                @foreach($property->propertyOptions as $propertyOption)
                                    <option value="{{$propertyOption->id}}"
                                            @isset($sku)
                                            @if($sku->propertyOptions->contains($propertyOption->id))
                                            selected
                                        @endif
                                        @endisset
                                    >{{$propertyOption->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    @endforeach
                    <div class="input-group row">
                        <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                        <div class="col-sm-6">
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                    </div>

                <div class="col-sm-10">
                    <br>
                    <button class="btn btn-success">Зберегти</button>
                </div>
            </div>
        </form>
    </div>
@endsection

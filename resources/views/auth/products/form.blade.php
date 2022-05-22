@extends('auth.layouts.master')

@isset($product)
    @section('title', 'Редагувати товар ' . $product->name)
@else
    @section('title', 'Створити товар')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($product)
            <h1>Редагувати товар <b>{{ $product->name }}</b></h1>
        @else
            <h1>Додати товар</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('products.update', $product) }}"
              @else
              action="{{ route('products.store') }}"
            @endisset
        >
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error',['fieldName'=>'code'])
                        <input type="text" class="form-control" name="code" id="code"
                               value="{{old('code', isset($product) ? $product->code : null)}}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Назва: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error',['fieldName'=>'name'])
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($product){{ $product->name }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Назва en: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error',['fieldName'=>'name_en'])
                        <input type="text" class="form-control" name="name_en" id="name_en"
                               value="@isset($product){{ $product->__('name') }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Категорія: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error',['fieldName'=>'category_id'])
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                        @isset($product)
                                        @if($product->category_id == $category->id)
                                        selected
                                    @endif
                                    @endisset
                                >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Опис: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error',['fieldName'=>'description'])
                        <div class="form-floating">
                            <textarea class="form-control pt-2" name="description" id="description"
                                      style="height: 100px">@isset($product){{ $product->description }}@endisset
                            </textarea>
                        </div>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description_en" class="col-sm-2 col-form-label">Опис en: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error',['fieldName'=>'description_en'])
                        <textarea class="form-control" name="description_en" id="description_en"
                                  style="height: 100px">@isset($product){{ $product->description_en }}@endisset
                            </textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="instruction" class="col-sm-2 col-form-label">Інструкція: </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="file" name="instruction" id="instruction">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Властивість: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error',['fieldName'=>'property_id'])
                        <select class="form-select" name="property_id[]" multiple aria-label="multiple select">
                            @foreach($properties as $property)
                                <option value="{{$property->id}}"
                                        @isset($product)
                                        @if($product->properties->contains($property->id))
                                        selected
                                    @endif
                                    @endisset
                                >{{$property->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                @foreach([
                    'hit' => 'Хіт',
                    'new' => 'Новинка',
                    'recommend' => 'Рекомендовано',
                ] as $field => $title)
                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">{{$title}}</label>
                        <div class="col-sm-10">
                            <input type="checkbox" class="form-check-label big-checkbox" name="{{$field}}"
                                   id="{{$field}}"
                                   @if(isset($product) && $product->$field === 1)
                                   checked="checked"
                                @endif
                            >
                        </div>
                    </div>
                    <br>
                @endforeach
                <button class="btn btn-success">Зберегти</button>
                <br><br>
            </div>
        </form>
    </div>
@endsection

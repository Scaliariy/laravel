@extends('auth.layouts.master')
{{--@extends('auth.layouts.sidebar')--}}

@isset($category)
    @section('title', 'Редагувати категорию ' . $category->name)
@else
    @section('title', 'Створити категорию')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($category)
            <h1>Редагувати Категорию <b>{{ $category->name }}</b></h1>
        @else
            <h1>Додати Категорию</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($category)
              action="{{ route('categories.update', $category) }}"
              @else
              action="{{ route('categories.store') }}"
            @endisset
        >
            <div>
                @isset($category)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        @error('code')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <input type="text" class="form-control" name="code" id="code"
                               value="{{old('code', isset($category) ? $category->code : null)}}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Назва: </label>
                    <div class="col-sm-6">
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($category){{ $category->name }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Назва en: </label>
                    <div class="col-sm-6">
                        @error('name_en')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <input type="text" class="form-control" name="name_en" id="name_en"
                               value="@isset($category){{ $category->name_en }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Опис: </label>
                    <div class="col-sm-6">
                        @error('description')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <div class="form-floating">
                            <textarea class="form-control" name="description"
                                      id="description"
                                      style="height: 100px">@isset($category){{ $category->description }}@endisset
                            </textarea>
                        </div>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Опис en: </label>
                    <div class="col-sm-6">
                        @error('description_en')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <div class="form-floating">
                            <textarea class="form-control" name="description_en"
                                      id="description_en"
                                      style="height: 100px">@isset($category){{ $category->description_en }}@endisset
                            </textarea>
                        </div>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="image" class="form-label col-sm-2 col-form-label">Зображення: </label>
                    <div class="col-sm-6 mb-3">
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                </div>
                <button class="btn btn-success mb-3">Зберегти</button>
            </div>
        </form>
    </div>
@endsection

@extends('auth.layouts.master')

@isset($propertyOption)
    @section('title', 'Редагувати варіант властивості ' . $propertyOption->name)
@else
    @section('title', 'Створити варіант властивості')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($propertyOption)
            <h1>Редагувати варіант властивості <b>{{ $propertyOption->name }}</b></h1>
        @else
            <h1>Додати варіант властивості <b>{{$property->name}}</b></h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($propertyOption)
              action="{{ route('property-options.update', [$property, $propertyOption]) }}"
              @else
              action="{{ route('property-options.store', $property) }}"
            @endisset
        >
            <div>
                @isset($propertyOption)
                    @method('PUT')
                @endisset
                @csrf
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Назва: </label>
                    <div class="col-sm-6">
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($propertyOption){{ $propertyOption->name }}@endisset">
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
                               value="@isset($propertyOption){{ $propertyOption->name_en }}@endisset">
                    </div>
                </div>
                <br>
                <button class="btn btn-success">Зберегти</button>
            </div>
        </form>
    </div>
@endsection

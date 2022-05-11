@extends('auth.layouts.master')
{{--@extends('auth.layouts.sidebar')--}}

@section('title', 'Редагувати інформацію - ' . $user->name)

@section('content')

    <div class="col-md-12">

        @isset($user)
            <h1>Редагування профілю <b>{{ $user->name }}</b></h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              action="{{ route('profile.update', $user) }}"
        >
            <div>
                @isset($user)
                    @method('PUT')
                @endisset
                @csrf
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Ім'я: </label>
                    <div class="col-sm-6">
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($user){{ $user->name }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Email: </label>
                    <div class="col-sm-6">
                        @error('name_en')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <input type="text" class="form-control" name="email" id="email"
                               value="@isset($user){{ $user->email }}@endisset">
                    </div>
                </div>
                <br>
                <a href="{{route('password.request')}}"> Змінити пароль? </a>
                <br>
                <br>
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection

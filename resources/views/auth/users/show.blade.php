@extends('auth.layouts.master')
{{--@extends('auth.layouts.sidebar')--}}

@section('title', 'Користувач ' . $user->name)

@section('content')
    <div class="col-md-12">
        <h1>Користувач {{$user->name}}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значення
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $user->id }}</td>
            </tr>
            <tr>
                <td>Ім'я</td>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td>Створено</td>
                <td>{{ $user->created_at }}</td>
            </tr>
            <tr>
                <td>Оновлено</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
            <tr>
                <td>Роль</td>
                <td>@if($user->is_admin == 1)
                        Адміністратор
                    @else
                        Користувач
                    @endif</td>
            </tr>
            <tr>
                <td>Замовлення</td>
                <td>
                    <a href="{{ route('user_orders', $user) }}">
                        {{ $user->orders->count() }}
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

@extends('auth.layouts.master')
{{--@extends('auth.layouts.sidebar')--}}

@section('title', 'Користувачі')

@section('content')
    <div class="col-md-12">
        <h1>Користувачі</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Ім'я
                </th>
                <th>
                    Email
                </th>
                <th>
                    Роль
                </th>
                <th>
                    Дії
                </th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>@if($user->is_admin == 1)
                            Адміністратор
                        @else
                            Користувач
                        @endif
                    </td>
                    <td>
                        <div class="btn-group" role="group" style="">
                            <form action="{{ route('users.destroy', $user) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('users.show', $user) }}">Открыть</a>
                            @csrf
{{--                                <a class="btn btn-warning" type="button"--}}
{{--                                   href="{{ route('users.edit', $user) }}">Редагувати</a>--}}
{{--                                --}}
{{--                                @method('DELETE')--}}
{{--                                <input class="btn btn-danger" type="submit" value="Удалить"></form>--}}
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$users->links('pagination::bootstrap-4')}}
{{--        <a class="btn btn-success" type="button"--}}
{{--           href="{{ route('users.create') }}">Додати адміністратора</a>--}}
    </div>
@endsection

@extends('auth.layouts.master')

@section('title', 'Користувачі')

@section('content')
    <div class="col-md-12">
        <h1>Користувачі</h1>
        <div class="table-responsive-sm">
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
                                       href="{{ route('users.show', $user) }}">Відкрити</a>
                                    @csrf
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$users->links('pagination::bootstrap-4')}}
    </div>
@endsection

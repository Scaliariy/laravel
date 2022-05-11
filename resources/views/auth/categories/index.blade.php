@extends('auth.layouts.master')
{{--@extends('auth.layouts.sidebar')--}}

@section('title', 'Категорії')

@section('content')
    <div class="col-md-12">
        <h1>Категорії</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Код
                </th>
                <th>
                    Назва
                </th>
                <th>
                    Дії
                </th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="btn-group" role="group" style="">
                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('categories.show', $category) }}">Открыть</a>
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('categories.edit', $category) }}">Редагувати</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$categories->links('pagination::bootstrap-4')}}
        <a class="btn btn-success" type="button"
           href="{{ route('categories.create') }}">Додати категорию</a>
    </div>
@endsection

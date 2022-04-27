@extends('auth.layouts.master')
{{--@extends('auth.layouts.sidebar')--}}

@section('title', 'Варианты свойства')

@section('content')
    <div class="col-md-12">
        <h1>Варианты свойства</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Властивість
                </th>
                <th>
                    Назва
                </th>
                <th>
                    Дії
                </th>
            </tr>
            @foreach($propertyOptions as $propertyOption)
                <tr>
                    <td>{{ $propertyOption->id }}</td>
                    <td>{{ $property->name}}</td>
                    <td>{{ $propertyOption->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('property-options.destroy', [$property, $propertyOption]) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('property-options.show', [$property, $propertyOption]) }}">Открыть</a>
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('property-options.edit', [$property, $propertyOption]) }}">Редагувати</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$propertyOptions->links('pagination::bootstrap-4')}}
        <a class="btn btn-success" type="button"
           href="{{ route('property-options.create', $property) }}">Додати вариант свойства</a>
    </div>
@endsection

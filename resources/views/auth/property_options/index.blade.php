@extends('auth.layouts.master')

@section('title', 'Варіанти властивості')

@section('content')
    <div class="col-md-12">
        <h1>Варіанти властивості</h1>
        <div class="table-responsive-sm">
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
                                <form action="{{ route('property-options.destroy', [$property, $propertyOption]) }}"
                                      method="POST">
                                    <a class="btn btn-success" type="button"
                                       href="{{ route('property-options.show', [$property, $propertyOption]) }}">Відкрити</a>
                                    <a class="btn btn-warning" type="button"
                                       href="{{ route('property-options.edit', [$property, $propertyOption]) }}">Редагувати</a>
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Видалити">
                                    @csrf
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$propertyOptions->links('pagination::bootstrap-4')}}
        <a class="btn btn-success" type="button"
           href="{{ route('property-options.create', $property) }}">Додати варіант властивості</a>
    </div>
@endsection

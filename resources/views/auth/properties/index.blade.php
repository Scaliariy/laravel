@extends('auth.layouts.master')

@section('title', 'Властивості')

@section('content')
    <div class="col-md-12">
        <h1>Властивості</h1>
        <div class="table-responsive-sm">
            <table class="table">
                <tbody>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Назва
                    </th>
                    <th>
                        Дії
                    </th>
                </tr>
                @foreach($properties as $property)
                    <tr>
                        <td>{{ $property->id }}</td>
                        <td>{{ $property->name }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <form action="{{ route('properties.destroy', $property) }}" method="POST">
{{--                                    <a class="btn btn-success" type="button"--}}
{{--                                       href="{{ route('properties.show', $property) }}">Відкрити</a>--}}
{{--                                    <a class="btn btn-warning" type="button"--}}
{{--                                       href="{{ route('properties.edit', $property) }}">Редагувати</a>--}}
{{--                                    <a class="btn btn-info" type="button"--}}
{{--                                       href="{{ route('property-options.index', $property) }}">Значення властивості</a>--}}

{{--                                    @method('DELETE')--}}
{{--                                    <input class="btn btn-danger" type="submit" value="Видалити">--}}

                                    <div class="dropdown">
                                        <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                           id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Дії
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item"
                                                   href="{{ route('properties.show', $property) }}">Відкрити</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                   href="{{ route('properties.edit', $property) }}">Редагувати</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                   href="{{ route('property-options.index', $property) }}">Значення
                                                    властивості</a>
                                            </li>
                                            <li>@method('DELETE')
                                                <input class="dropdown-item link-danger" type="submit" value="Видалити">
                                            </li>
                                        </ul>
                                    </div>
                                    @csrf
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$properties->links('pagination::bootstrap-4')}}
        <a class="btn btn-success" type="button"
           href="{{ route('properties.create') }}">Додати властивість</a>
    </div>
@endsection

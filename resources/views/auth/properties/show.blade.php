@extends('auth.layouts.master')

@section('title', 'Властивість ' . $property->name)

@section('content')
    <div class="col-md-12">
        <h1>Властивість {{ $property->name }}</h1>
        <div class="table-responsive-sm">
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
                    <td>{{ $property->id }}</td>
                </tr>
                <tr>
                    <td>Назва</td>
                    <td>{{ $property->name }}</td>
                </tr>
                <tr>
                    <td>Назва en</td>
                    <td>{{ $property->name_en }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

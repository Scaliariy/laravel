@extends('auth.layouts.master')

@section('title', 'Sku ' . $sku->name)

@section('content')
    <div class="col-md-12">
        <h1>Sku {{ $sku->product->name }}</h1>
        <h2>{{ $sku->propertyOptions->map->name->implode(', ') }}</h2>
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
                    <td>{{ $sku->id }}</td>
                </tr>
                <tr>
                    <td>Ціна</td>
                    <td>{{ $sku->price }} {{ $currencySymbol }}</td>
                </tr>
                <tr>
                    <td>Кількість</td>
                    <td>{{ $sku->count }}</td>
                </tr>
                <tr>
                    <td>Зображення</td>
                    <td>
                        <div class="admin-sku-img">
                            <img id="admin-sku-img" src="{{\Illuminate\Support\Facades\Storage::url($sku->image)}}"
                                 alt="">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

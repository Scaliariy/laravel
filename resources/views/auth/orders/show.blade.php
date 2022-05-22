@extends('auth.layouts.master')

@section('title', 'Замовлення ' . $order->id)

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Замовлення №{{ $order->id }}</h1>
                    <p>Замовник: <b>{{ $order->name }}</b></p>
                    <p>Номер телефону: <b>{{ $order->phone }}</b></p>
                    <div class="table-responsive-sm">
                        <table class="table table-striped align-middle">
                            <thead>
                            <tr>
                                <th>Назва</th>
                                <th>Кількість</th>
                                <th>Ціна</th>
                                <th>Вартість</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($skus as $sku)
                                <tr>
                                    <td>
                                        <a href="{{route('sku', [$sku->product->category->code, $sku->product->code, $sku])}}">
                                            <img height="56px"
                                                 src="{{ Storage::url($sku->image) }}">
                                            {{ $sku->product->name }}
                                        </a>
                                    </td>
                                    <td class="text-center"><span class="badge bg-secondary">{{$sku->pivot->count}}</span></td>
                                    <td>{{ $sku->pivot->price }} {{ $order->currency->symbol }}</td>
                                    <td>{{ $sku->pivot->price * $sku->pivot->count}} {{ $order->currency->symbol }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3" class="text-end"><b>Загальна вартість:</b></td>
                                <td><b>{{ $order->sum }} {{ $order->currency->symbol }}</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection

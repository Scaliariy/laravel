@extends('auth.layouts.master')

@section('title', 'Замовлення')

@section('content')
    <div class="col-md-12">
        @admin
        @php
            App::setLocale('ua');
        @endphp
        @endadmin
        <h1>@lang('main.orders')</h1>
        <div class="table-responsive-sm">
            <table class="table">
                <tbody>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        @lang('main.name')
                    </th>
                    <th>
                        @lang('main.phone')
                    </th>
                    <th>
                        @lang('main.time')
                    </th>
                    <th>
                        @lang('main.sum')
                    </th>
                    <th>
                        @lang('main.actions')
                    </th>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id}}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                        <td>{{ $order->sum }} {{ $order->currency->symbol }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a class="btn btn-success" type="button"
                                   @admin
                                   href="{{route('orders.show', $order)}}"
                                   @else
                                   href="{{route('person.orders.show', $order)}}"
                                    @endadmin
                                >@lang('main.open')</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$orders->links('pagination::bootstrap-4')}}
    </div>
@endsection

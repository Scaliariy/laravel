@extends('auth.layouts.master')

@section('title', 'Товарні пропозиції')

@section('content')
    <div class="col-md-12">
        <h1>Товарні пропозиції</h1>
        <h2>{{$product->name}}</h2>
        <div class="table-responsive-sm">
            <table class="table align-middle">
                <tbody>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Товарна пропозиція (властивості)
                    </th>
                    <th>
                        Дії
                    </th>
                </tr>
                @foreach($skus as $sku)
                    <tr>
                        <td>{{ $sku->id }}</td>
                        <td>{{ $sku->propertyOptions->map->name->implode(', ') }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <form action="{{ route('skus.destroy', [$product, $sku]) }}" method="POST">
                                    <a class="btn btn-success" type="button"
                                       href="{{ route('skus.show', [$product, $sku]) }}">Відкрити</a>
                                    <a class="btn btn-warning" type="button"
                                       href="{{ route('skus.edit', [$product, $sku]) }}">Редагувати</a>
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Видалити"></form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$skus->links('pagination::bootstrap-4')}}
        <a class="btn btn-success" type="button"
           href="{{ route('skus.create', $product) }}">Додати Sku</a>
    </div>
@endsection

@extends('auth.layouts.master')
{{--@extends('auth.layouts.sidebar')--}}

@section('title', 'Товары')

@section('content')
    <div class="col-md-12">
        <h1>Товары</h1>
        <div class="table-responsive-sm">
            <table class="table align-middle">
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
                        Категорія
                    </th>
                    <th>
                        Кількість товарних пропозицій
                    </th>
                    <th>

                    </th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id}}</td>
                        <td>{{ $product->code }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->skus->count() }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <form action="{{ route('products.destroy', $product) }}" method="POST">
                                    <div class="dropdown">
                                        <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                           id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Дії
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{ route('products.show', $product) }}">Відкрити</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('skus.index', $product) }}">Товарні
                                                    пропозиції</a></li>
                                            <li><a class="dropdown-item" href="{{ route('products.edit', $product) }}">Редагувати</a>
                                            </li>
                                            <li>@method('DELETE')
                                                <input class="dropdown-item link-danger" type="submit" value="Видалити"></li>
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
        {{$products->links('pagination::bootstrap-4')}}
        <a class="btn btn-success mb-3" type="button" href="{{ route('products.create') }}">Додати товар</a>
    </div>
@endsection

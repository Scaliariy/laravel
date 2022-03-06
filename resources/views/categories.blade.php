@extends('layouts.master')
@section('title', 'Все категории')
@section('content')
    @foreach($categories as $category)
        <div class="panel">
            <a href="{{ route('category', $category->code) }}">
                <img src="https://cdn.pixabay.com/photo/2013/07/13/12/46/iphone-160307_960_720.png" width="5%" height="5%">
                <h2>{{$category->name}}</h2>
            </a>
            <p>
                {{$category->description}}
            </p>
        </div>
    @endforeach
@endsection

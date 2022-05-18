@extends('layouts.master')

@section('title', __('main.all_categories'))

@section('content')
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">@lang('main.all_categories')</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 align-items-stretch g-4 py-4">
            @foreach($categories as $category)
                <div class="col text-center">
                    <div class="card h-100 overflow-hidden rounded-4"
                         style="background:  url('{{ Storage::url($category->image) }}'); background-size: cover;">
                        <div class="d-flex flex-column h-100 p-5">
                            <a href="{{ route('category', $category->code) }}" class="stretched-link"></a>
                            <h2 class="  display-7 lh-1 fw-bold p-3">
                                <span style="background-color: white; ">{{ $category->__('name') }}</span>
                            </h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

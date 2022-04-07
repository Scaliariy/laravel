<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            @if(!is_null($sku->product))
                @if($sku->product->isNew())
                    <span class="badge badge-success">@lang('main.properties.new')</span>
                @endif

                @if($sku->product->isRecommend())
                    <span class="badge badge-warning">@lang('main.properties.recommend')</span>
                @endif

                @if($sku->product->isHit())
                    <span class="badge badge-danger">@lang('main.properties.hit')</span>
                @endif
            @endif
        </div>
        @if(!is_null($sku->product))
        <img src="{{ Storage::url($sku->image) }}" alt="{{ $sku->product->__('name') }}">
        @endif
        <div class="caption">
            @if(!is_null($sku->product))
            <h3>{{ $sku->product->__('name') }}</h3>
            @endif
            @isset($sku->product->properties)
                @foreach($sku->propertyOptions as $propertyOption)
                    <h4>{{$propertyOption->property->__('name')}}: {{$propertyOption->__('name')}}</h4>
                @endforeach
            @endisset
            <p>{{ $sku->price}} {{ $currencySymbol }}</p>
            <p>
            <form action="{{ route('basket-add', $sku) }}" method="POST">
                @if($sku->isAvailable())
                    <button type="submit" class="btn btn-primary" role="button">@lang('main.add_to_basket')</button>
                @else
                    @lang('main.not_available')
                @endif
                    @if(!is_null($sku->product))
                <a href="{{ route('sku', [isset($category) ? $category->code : $sku->product->category->code, $sku->product->code, $sku->id]) }}"
                   class="btn btn-default"
                   role="button">@lang('main.more')</a>
                    @else
                        <button type="submit" class="btn btn-primary" disabled role="button">@lang('main.more')</button>
                    @endif
                @csrf
            </form>
            </p>
        </div>
    </div>
</div>

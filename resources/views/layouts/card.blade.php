<div class="col col-xl-2 col-lg-3 col-md-4 col-sm-6">
    <div class="card">
        <div class="labels">
            @if(!is_null($sku->product))
                @if($sku->product->isNew())
                    <span id="notify-badge"
                          class="badge rounded-pill text-bg-success">@lang('main.properties.new')</span>
                @endif

                @if($sku->product->isRecommend())
                    <span class="badge rounded-pill text-bg-warning">@lang('main.properties.recommend')</span>
                @endif

                @if($sku->product->isHit())
                    <span class="badge rounded-pill text-bg-danger">@lang('main.properties.hit')</span>
                @endif
            @endif</div>
        @if(!is_null($sku->product))
            <div class="img-card">
                <img id="product-img-card" class="bd-placeholder-img card-img-top"
                     src="{{ Storage::url($sku->image) }}" alt=""/>
            </div>
        @endif
        <div class="card-body">
            @if(!is_null($sku->product))
                <div class="module pb-2">
                    <a href="{{ route('sku', [isset($category) ? $category->code : $sku->product->category->code, $sku->product->code, $sku->id]) }}">
                        {{ $sku->product->__('name') }}</a>
                </div>

            @endif
            <div class="row row-cols-2 align-items-center justify-content-between text-center py-2 px-1">
                <div class="col-auto pe-0">
                    <p class="price card-text">{{ $sku->price}} {{ $currencySymbol }}</p>
                </div>
                <div class="col-auto ps-0">
                    <form action="{{ route('basket-add', $sku) }}" method="POST">
                        @if($sku->isAvailable())
                            <button type="submit" class="btn btn-success" name="button_add">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                            </button>
                        @else
                            <button class="btn btn-danger" disabled>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-x" viewBox="0 0 16 16">
                                    <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"/>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </button>
                        @endif
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

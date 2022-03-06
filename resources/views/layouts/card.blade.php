<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="https://cdn.pixabay.com/photo/2013/07/13/12/46/iphone-160307_960_720.png" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}} руб. </p>
            <p>
            <form action="{{route('basket-add', $product)}}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="{{route('product', [$product->category->code, $product->code])}}" class="btn btn-default"
                   role="button">Подробнее</a>
                @csrf
            </form>

            </p>
        </div>
    </div>
</div>

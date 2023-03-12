<div class="product_woman">
    <h4>Sản phẩm nữ</h4>
    <div class="product_item d-flex justify-content-center flex-wrap">
        @foreach ($womenProducts as $womenProduct)
            <div class="item bg-light p-2 m-2  text-center w-20">
                @if ($womenProduct->discount != null)
                    <div class="bg-warning w-25  sale">
                        Sale
                    </div>
                @endif
                <a href="{{ route('shop_product', $womenProduct->id) }}"><img class="w-100"
                        src="/front/img/products/{{ $womenProduct->productImages[0]->path }}" alt=""></a>
                <a href="{{ route('shop_product', $womenProduct->id) }}">
                    <h5>{{ $womenProduct->name }}</h5>
                </a>
                <p>${{ $womenProduct->price }}</p>
                <button class="bg-danger border-0 rounded ">Xem ngay </button>
            </div>
        @endforeach
    </div>
</div>

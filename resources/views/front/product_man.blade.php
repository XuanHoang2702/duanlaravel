<div class="product_man">
    <h4>Sản phẩm nam</h4>
    <div class="product_item d-flex justify-content-center flex-wrap">
        @foreach ($menProducts as $menProduct)
            <div class="item bg-light p-2 m-2  text-center w-20">
                @if ($menProduct->discount != null)
                    <div class="bg-warning w-25  sale">
                        Sale
                    </div>
                @endif
                <a href="{{ route('shop_product', $menProduct->id) }}"><img class="w-100"
                        src="/front/img/products/{{ $menProduct->productImages[0]->path }}" alt=""></a>
                <a href="{{ route('shop_product', $menProduct->id) }}">
                    <h5>{{ $menProduct->name }}</h5>
                </a>
                <div class="">
                    @if ($menProduct->discount != null)
                        <span class="font-weight-normal fs-3 text-danger"> ${{ $menProduct->discount }}</span>
                        <span class="price-old fs-5">${{ $menProduct->price }}</span>
                    @else
                        <span>${{ $menProduct->price }}</span>
                    @endif
                </div>
                <button class="bg-danger border-0 rounded ">Đặt hàng </button>

            </div>
        @endforeach
    </div>
</div>
{{-- <div class="page justify-content-center">
    {{ $menProducts->links() }}
</div> --}}
</div>

<div class="product_new ">
    <h4>Sản phẩm mới</h4>
    <div class="product_item d-flex justify-content-center flex-wrap">
        @foreach ($product_news as $product_new)
            <div class="item bg-light p-2 m-2  text-center w-20">
                @if ($product_new->discount != null)
                    <div class="bg-warning w-25  sale">
                        Sale
                    </div>
                @endif
                <img class="w-100" src="/front/img/products/{{ $product_new->productImages[0]->path }}" alt="">
                <p>{{ $product_new->name }}</p>
                <div class="">
                    @if ($product_new->discount != null)
                        <span class="font-weight-normal fs-3 text-danger"> ${{ $product_new->discount }}</span>
                        <span class="price-old fs-5">${{ $product_new->price }}</span>
                    @else
                        <span>${{ $product_new->price }}</span>
                    @endif
                </div>
                <button class="bg-danger border-0 rounded ">Đặt hàng </button>
            </div>
        @endforeach
    </div>
    <div class="page ">
        
        {{ $product_news->appends('trang', 'sanphammoi')->links() }}
    </div>
</div>

@extends('front.layout.master')

@section('title', 'Tìm kiếm sản phẩm')
@section('body')
    <div class="product_search">
        <div class="title text-center mt-5">
            <h1>tìm kiếm sản phẩm</h1>
        </div>
        <div class="block">
            @if (count($product_searchs) > 0)
                <div class="row">
                    @foreach ($product_searchs as $product_search)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="item bg-light p-2 m-2  text-center w-20">
                                @if ($product_search->discount != null)
                                    <div class="bg-warning w-25  sale">
                                        Sale
                                    </div>
                                @endif
                                <a href="{{ route('shop_product', $product_search->id) }}"><img class="w-100"
                                        src="/front/img/products/{{ $product_search->productImages[0]->path }}"
                                        alt=""></a>
                                <a href="{{ route('shop_product', $product_search->id) }}">
                                    <h5>{{ $product_search->name }}</h5>
                                </a>
                                <div class="">
                                    @if ($product_search->discount != null)
                                        <span class="font-weight-normal fs-3 text-danger">
                                            ${{ $product_search->discount }}</span>
                                        <span class="price-old fs-5">${{ $product_search->price }}</span>
                                    @else
                                        <span>${{ $product_search->price }}</span>
                                    @endif
                                </div>
                                <button class="bg-danger border-0 rounded ">Đặt hàng </button>
                            </div>
                        </div>
                        <!---->
                    @endforeach
                @else
                    <p>Không tìm thấy sản phẩm nào</p>
                </div>
            @endif
        </div>
    </div>


@endsection

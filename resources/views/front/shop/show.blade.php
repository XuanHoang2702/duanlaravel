@extends('front.layout.master')
@section('body')
    <!-- Start coding here -->
    <div class="show-title text-center mt-4">
        <h2>Product Detail</h2>
    </div>
    <div class="product-detail row mt-5">
        <div class="product-navbar col-lg-2 ">
            <div class="categories">
                <h4>Categories</h4>
                <form action="/action_page.php">
                    @foreach ($categories as $category)
                        <input class="m-2" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> {{ $category->name }}</label><br>
                    @endforeach
                </form>
            </div>
            <div class="Brand">
                <h4>Brans</h4>
                <form action="/action_page.php">
                    @foreach ($brands as $brand)
                        <input class="m-2" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> {{ $brand->name }}</label><br>
                    @endforeach

                </form>
            </div>
        </div>
        <div class="product-block col-lg-5">
            <div class="product-detail-image text-center">
                <img class="w-75 " src="/front/img/products/{{ $product_find->productImages[0]->path }}" alt="">
            </div>
        </div>
        <div class="product-block col-lg-5 ">
            <h2>Thông tin sản phẩm</h2>
            <div class="star-icon  mb-3">
                <i class="fas fa-star" style="color: #ebc610"></i>
                <i class="fas fa-star" style="color: #ebc610"></i>
                <i class="fas fa-star" style="color: #ebc610"></i>
                <i class="fas fa-star" style="color: #ebc610"></i>
                <i class="far fa-star" style="color: #ebc610"></i>
            </div>
            <div class="product-name ">
                <h3>{{ $product_find->name }}</h3>
            </div>
            <span>{{ $product_find->description }}</span>
            <div class="price mt-4">
                <span class="font-weight-normal fs-1 text-danger"> ${{ $product_find->discount }}</span>
                <span class="price-old fs-5 ">${{ $product_find->price }}</span>
            </div>
            <div class="color mt-2">
                <span class="ml-3 fs-5 " style="font-weight: bold" for="">Color</span>
                <i class="fas fa-circle m-1" style="color: yellow"></i>
                <i class="fas fa-circle" style="color: red"></i>
                <i class="fas fa-circle" style="color: blue"></i>
                <i class="fas fa-circle" style="color: green"></i>
            </div>
            <div class="size mt-3 mt-4">
                <button class="mr-2 rounded" style="width: 40px; ">S</button>
                <button class="mr-2 rounded" style="width: 40px; ">M</button>
                <button class="mr-2 rounded" style="width: 40px; ">L</button>
                <button class="mr-2 rounded" style="width: 40px; ">XL</button>
            </div>

            <div class="number mt-3  mt-5">
                <input type="number" class="fs-4 mr-3" min="0" value="0" style="width: 100px ;">
                <button class="cart bg-danger fs-4 p-1  text-white rounded border-0" style="width: 200px; ">Add to
                    cart</button>
            </div>

        </div>
    </div>
    <div class="product-similar">
        <div class="show-title text-center mt-4">
            <h2>Sản phẩm tương tự</h2>
        </div>
        <div class="content ">
            <div class="product_item d-flex justify-content-center flex-wrap">
                @foreach ($product_similars as $product_similar)
                    <div class="item bg-light p-2 m-2  text-center w-20">
                        <a href="{{ route('shop_product', $product_similar->id) }}"><img class="w-100"
                                src="/front/img/products/{{ $product_similar->productImages[0]->path }}" alt=""></a>
                        <a href="{{ route('shop_product', $product_similar->id) }}">
                            <h4>{{ $product_similar->name }}</h4>
                        </a>
                        <div class="">
                            <span class="font-weight-normal fs-3 text-danger"> ${{ $product_similar->discount }}</span>
                            <span class="price-old fs-5">${{ $product_similar->price }}</span>
                        </div>
                        <button class="bg-danger border-0 rounded ">Đặt hàng </button>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

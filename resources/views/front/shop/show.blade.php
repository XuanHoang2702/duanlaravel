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
                    <input class="m-2" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Man</label><br>
                    <input class="m-2" type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> Woman</label><br>
                    <input class="m-2" type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3"> Kid</label><br><br>
                </form>
            </div>
            <div class="Brand">
                <h4>Brans</h4>
                <form action="/action_page.php">
                    <input class="m-2" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Chanel</label><br>
                    <input class="m-2" type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> Guci</label><br>
                    <input class="m-2" type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3"> Yody</label><br><br>
                </form>
            </div>
        </div>
        <div class="product-block col-lg-5">
            <div class="product-detail-image text-center">
                <img class="w-75 " src="/front/img/products/product-1.jpg" alt="">
            </div>
            <p>dsfdsgfdsgsf</p>
        </div>
        <div class="product-block col-lg-5 ">
            <h3>Thông tin sản phẩm</h3>
            <div class="star-icon  mb-3">
                <i class="fas fa-star" style="color: #ebc610"></i>
                <i class="fas fa-star" style="color: #ebc610"></i>
                <i class="fas fa-star" style="color: #ebc610"></i>
                <i class="fas fa-star" style="color: #ebc610"></i>
                <i class="far fa-star" style="color: #ebc610"></i>
            </div>
            <span> I’m selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to
                handle. But if you can’t handle me at my worst, then you sure as hell don’t deserve me at my best. ― Marilyn
                Monroe</span>
            <div class="price mt-4">
                <span class="font-weight-normal fs-1 text-danger"> $400</span>
                <span class="price-old fs-5 ">$550</span>
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
                <div class="item bg-light p-2 m-2  text-center w-20">
                    <img class="w-100" src="/front/img/products/product-1.jpg" alt="">
                    <p>Sản phẩm 1</p>
                    <div class="">
                        <span class="font-weight-normal fs-3 text-danger"> $440</span>
                        <span class="price-old fs-5">$600</span>
                    </div>
                    <button class="bg-danger border-0 rounded ">Đặt hàng </button>

                </div>
                <div class="item bg-light p-2 m-2  text-center w-20">
                    <img class="w-100" src="/front/img/products/product-1.jpg" alt="">
                    <p>Sản phẩm 1</p>
                    <div class="">
                        <span class="font-weight-normal fs-3 text-danger"> $440</span>
                        <span class="price-old fs-5">$600</span>
                    </div>
                    <button class="bg-danger border-0 rounded ">Đặt hàng </button>

                </div>
                <div class="item bg-light p-2 m-2  text-center w-20">
                    <img class="w-100" src="/front/img/products/product-1.jpg" alt="">
                    <p>Sản phẩm 1</p>
                    <div class="">
                        <span class="font-weight-normal fs-3 text-danger"> $440</span>
                        <span class="price-old fs-5">$600</span>
                    </div>
                    <button class="bg-danger border-0 rounded ">Đặt hàng </button>

                </div>
                <div class="item bg-light p-2 m-2  text-center w-20">
                    <img class="w-100" src="/front/img/products/product-1.jpg" alt="">
                    <p>Sản phẩm 1</p>
                    <div class="">
                        <span class="font-weight-normal fs-3 text-danger"> $440</span>
                        <span class="price-old fs-5">$600</span>
                    </div>
                    <button class="bg-danger border-0 rounded ">Đặt hàng </button>

                </div>
            </div>
        </div>
    </div>
@endsection

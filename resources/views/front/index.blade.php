@extends('front.layout.master')


@section('title', 'Home')
@section('body')
    <div class="container">
        <header>
            <div class="Notification d-flex justify-content-center bg-success ">
                <p class="text-white fs-5 m-2">Miễn phí vận chuyển</p>
                <i class="fas fa-car-side fs-1 m-2 "></i>
            </div>
            <div class="logo d-flex  ">
                <div class="logo_img w-75  text-center">
                    <img width="200px" class="pl-3" src="/front/img/logoweb.jpg" alt="">
                </div>
                <div class="search w-25 ">
                    <form class="d-flex pt-5 ">
                        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn bg-warning border-success btn-outline-black " type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="icon d-flex justify-content-end">
                <i class="fab fa-facebook p-2 fs-3"></i>
                <i class="fab fa-instagram-square p-2 fs-3"></i>
                <i class="fab fa-twitter-square p-2 fs-3"></i>
                <i class="fab fa-twitter p-2 fs-3"></i>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class=" fs-4 p-1 font-weight-normal ">
                                <a class="nav-link text-success" href="#">Home</a>
                            </li>
                            <li class="fs-4 p-1">
                                <a class=" nav-link " href="#">Man</a>
                            </li>
                            <li class="fs-4 p-1">
                                <a class="nav-link " href="#">Woman</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img height="500px" src="/front/img/banner-1.jpg" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img height="500px" src="/front/img/banner-2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img height="500px" src="/front/img/banner-3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>

        <div class="content">
            <div class="product_new">
                <h4>Sản phẩm mới</h4>
                <div class="product_item d-flex justify-content-center flex-wrap">
                    <div class="item bg-light p-2 m-2  text-center  bg-image hover-zoom">
                        <img class=" w-100" src="/front/img/products/man-1.jpg" alt="">
                        <p>sản phẩm 1</p>
                    </div>
                    <div class="item bg-light p-2 m-2  text-center w-20 ">
                        <img class="w-100" src="/front/img/products/man-1.jpg" alt="">
                        <p>sản phẩm 2</p>
                    </div>
                    <div class="item bg-light p-2 m-2  text-center w-20">
                        <img class="w-100" src="/front/img/products/man-1.jpg" alt="">
                        <p>sản phẩm 3</p>
                    </div>
                    <div class="item bg-light p-2 m-2  text-center w-20">
                        <img class="w-100" src="/front/img/products/man-1.jpg" alt="">
                        <p>sản phẩm 4</p>
                    </div>

                </div>
            </div>
            <div class="product_man">
                <h4>Sản phẩm nam</h4>
                <div class="product_item d-flex justify-content-center flex-wrap">
                    <div class="item bg-light p-2 m-2  text-center w-20">
                        <img class="w-100" src="/front/img/products/product-2.jpg" alt="">
                        <p>sản phẩm 1</p>
                    </div>
                    <div class="item bg-light p-2 m-2  text-center w-20 ">
                        <img class="w-100" src="/front/img/products/product-2.jpg" alt="">
                        <p>sản phẩm 2</p>
                    </div>
                    <div class="item bg-light p-2 m-2  text-center w-20">
                        <img class="w-100" src="/front/img/products/product-2.jpg" alt="">
                        <p>sản phẩm 3</p>
                    </div>
                    <div class="item bg-light p-2 m-2  text-center w-20">
                        <img class="w-100" src="/front/img/products/product-2.jpg" alt="">
                        <p>sản phẩm 4</p>
                    </div>
                </div>
            </div>
            <div class="product_woman">
                <h4>Sản phẩm nữ</h4>
                <div class="product_item d-flex justify-content-center flex-wrap">
                    <div class="item bg-light p-2 m-2  text-center w-20">
                        <img class="w-100" src="/front/img/products/product-1.jpg" alt="">
                        <p>sản phẩm 1</p>
                    </div>
                    <div class="item bg-light p-2 m-2  text-center w-20 ">
                        <img class="w-100" src="/front/img/products/product-1.jpg" alt="">
                        <p>sản phẩm 2</p>
                    </div>
                    <div class="item bg-light p-2 m-2  text-center w-20">
                        <img class="w-100" src="/front/img/products/product-1.jpg" alt="">
                        <p>sản phẩm 3</p>
                    </div>
                    <div class="item bg-light p-2 m-2  text-center w-20">
                        <img class="w-100" src="/front/img/products/product-1.jpg" alt="">
                        <p>sản phẩm 4</p>
                    </div>
                </div>
            </div>
            <div class="blogs">
                <div class="blog_item">

                </div>
                <div class="blog_item">

                </div>
                <div class="blog_item">

                </div>
            </div>
        </div>
        @include('front.layout.footer')
        <footer class="bg-dark mt-5">
            <div class="row pt-3 ">
                <div class="col-lg-3 ">
                    <h6><a class="text-decoration-none text-white" href="">Thông tin cửa
                            hàng</a></h6>
                    <p><a class="text-decoration-none  text-white" href="">Giới thiệu</a> </p>
                    <p><a class="text-decoration-none text-white" href="">Blogger thời trang</a> </p>
                </div>
                <div class="col-lg-3">
                    <h6 class="font-weight-normal"><a class="text-decoration-none text-white" href="">Hỗ trợ
                            khách
                            hàng</a>
                    </h6>
                    <p><a class="text-decoration-none text-white" href=""> Phí vận chuyển</a></p>
                    <p><a class="text-decoration-none text-white" href="">Trả lại</a> </p>
                    <p><a class="text-decoration-none text-white" href="">Hướng dẫn đặt hàng</a> </p>
                    <p><a class="text-decoration-none text-white" href=""> Làm thế nào để theo dõi</a></p>
                    <p> <a class="text-decoration-none text-white " href=""> Hướng dẫn kích thước</a></p>
                    <p><a class="text-decoration-none text-white" href="">Trách nhiệm xã hội</a> </p>

                </div>
                <div class="col-lg-3">
                    <h6 class="font-weight-normal"><a class="text-decoration-none text-white" href="">Dịch vụ
                            khách hàng</a>
                    </h6>
                    <p><a class="text-decoration-none text-white" href="">Liên hệ chúng tôi</a> </p>
                    <p><a class="text-decoration-none text-white" href="">Phương thức thanh toán</a> </p>
                    <p><a class="text-decoration-none text-white" href="">Điểm thưởng</a> </p>
                </div>
                <div class="col-lg-3">
                    <h6 class="font-weight-normal"><a class="text-decoration-none text-white" href="">Kết nối
                            với
                            chúng
                            tôi</a> </h6>
                </div>
            </div>
        </footer>
    </div>


@endsection

@extends('front.layout.master')

@section('title', 'Blogs')
@section('body')
    <div class="blog-page-content">

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
                    <img height="500px"
                        src="https://images.pexels.com/photos/2749481/pexels-photo-2749481.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img height="500px"
                        src="https://binhminhdigital.com/StoreData/images/PageData/bi-quyet-chup-anh-hoang-hon-dep-Binhminhdigital(1).jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img height="500px" src="https://cdn.tgdd.vn/Files/2016/02/25/792452/smartphoneinsunset.jpg"
                        class="d-block w-100" alt="...">
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
        <div class="title text-center mt-5">
            <h1>Blog</h1>
        </div>
        <div class="block">
            @foreach ($blog_pages as $blog_page)
                <div class="block-content row mt-5">
                    <div class="item-image col-lg-4">
                        <a href=""><img src="/front/img/blog/{{ $blog_page->image }}" alt=""></a>
                    </div>
                    <div class="item-text col-lg-8">
                        <a href="">
                            <h3>{{ $blog_page->title }}</h3>
                        </a>
                        <div class="star-icon  mb-3">
                            <i class="fas fa-star" style="color: #ebc610"></i>
                            <i class="fas fa-star" style="color: #ebc610"></i>
                            <i class="fas fa-star" style="color: #ebc610"></i>
                            <i class="fas fa-star" style="color: #ebc610"></i>
                            <i class="far fa-star" style="color: #ebc610"></i>
                        </div>
                        <span style="font-style: italic">{{ $blog_page->subtitle }}</span>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="page ">

            {{ $blog_pages->appends('trang', 'blog')->links() }}
        </div>
        {{-- <div class="pagination justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div> --}}

    </div>

@endsection

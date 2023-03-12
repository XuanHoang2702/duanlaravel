    <header>
        <div class="Notification d-flex justify-content-center bg-success ">
            <p class="text-white fs-5 m-2">Miễn phí vận chuyển</p>
            <i class="fas fa-car-side fs-1 m-2 "></i>
        </div>
        <div class="logo row d-flex">
            <div class="logo_img col-lg-5 col-sm-5 justify-content-start">
                <img src="/front/img/logoweb.jpg" alt="" width="200px" class="pl-3">
            </div>
            <!---product search--->
            @include('front.layout.search')
            <div class="login col-lg-3 col-sm-2   row justify-content-end ">
                <div class="  justify-content-end ">
                    @if (Auth::check())
                        <img src="/front/img/avatar/{{ Auth::user()->avatar }}" alt="">
                        <label>{{ Auth::user()->name }}</label>
                    @endif
                    <div class="logout w-100">
                        <a href="{{ route('login.show') }}">
                            <p for="">Đăng xuất</p>
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <div class="icon d-flex justify-content-end">
            <i class="fab fa-facebook p-2 fs-3"></i>
            <i class="fab fa-instagram-square p-2 fs-3"></i>
            <i class="fab fa-twitter-square p-2 fs-3"></i>
            <i class="fab fa-twitter p-2 fs-3"></i>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class=" fs-4 p-1 font-weight-normal ">
                            <a class="nav-link text-success" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="fs-4 p-1">
                            <a class=" nav-link " href="{{ route('contact') }}">contact</a>
                        </li>
                        <li class="fs-4 p-1">
                            <a class="nav-link " href="{{ route('introduce') }}">Giới thiệu</a>
                        </li>
                        <li class="fs-4 p-1">
                            <a class="nav-link " href="{{ route('blog-page') }}">Blogs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

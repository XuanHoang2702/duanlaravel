    <header>
        <div class="Notification d-flex justify-content-center bg-success ">
            <p class="text-white fs-5 m-2">Miễn phí vận chuyển</p>
            <i class="fas fa-car-side fs-1 m-2 "></i>
        </div>
        <div class="logo row d-flex ">
            <div class="logo_img col-lg-5 col-sm-5  justify-content-start">
                <img width="200px" class="pl-3" src="/front/img/logoweb.jpg" alt="">
            </div>
            <div class="search col-log-4 col-sm-5 ">
                <form class=" d-flex pt-5 ">
                    <input class="form-control me-2 w-75 " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn bg-warning border-success btn-outline-black " type="submit">Search</button>
                </form>
            </div>
            <div class="login col-lg-2 col-sm-2 pt-5 d-flex justify-content-end">
                <i class="fas fa-user-cog fs-4"></i>
                <label for="">Đăng nhập</label>
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

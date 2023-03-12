<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="dashboad" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Trang chủ
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('product.show') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Sản phẩm
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('product.add') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thêm sản phẩm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('product.show') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách sản phẩm</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('category.show') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Danh mục
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('category.add') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thêm danh mục</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('category.show') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách danh mục</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Đơn hàng
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="cap-nhat-don-hang" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thêm đơn hàng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="ds-don-hang" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách đơn hàng</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.show') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    User
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('user.add') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thêm khách hàng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.show') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách khách hàng</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="thong-ke" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Thống kê
                </p>
            </a>
        </li>
    </ul>
</nav>

<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="backend/images/logo.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a class=""  href="#"  >
                <img src="backend/images/menu-icon/1.svg" alt="">
                <span>Dashboard</span>
            </a>


        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
                <img src="backend/images/menu-icon/2.svg" alt="">
                <span>Quản lý</span>
            </a>
            <ul>
                <li><a href="{{ route('category-index') }}">Danh mục sản phẩm</a></li>
                <li><a href="{{ route('product-index') }}">Sản phẩm</a></li>
                <li><a href="forgot_pass.html">Nhãn hàng</a></li>
                <li><a href="forgot_pass.html">Banner</a></li>
                <li><a href="forgot_pass.html">Bài viết</a></li>
                <li><a href="forgot_pass.html">Danh mục bài viết</a></li>
                <li><a href="forgot_pass.html">Bình luận</a></li>
                <li><a href="forgot_pass.html">Liên hệ của khách hàng</a></li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
                <img src="backend/images/menu-icon/6.svg" alt="">
                <span>Quản lý tài khoản</span>
            </a>
            <ul>
                <li><a href="#">Quản trị viên</a>
                </li>
                <li><a href="#">Khách hàng</a>
                </li>
                <li><a href="#">Vai trò</a>
                </li>
            </ul>
        </li>

    </ul>

</nav>
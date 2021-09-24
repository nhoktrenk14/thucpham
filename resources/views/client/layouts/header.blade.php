
<header id="organio-header" class="organio-header-section header-style-one">
    <div class="header-top">
        <div class="container">
            <div class="header-top-content d-flex justify-content-between align-items-center">
                <div class="header-slug">
                    <span> Chào mừng đến với Mixifood!</span>
                </div>
                <div class="or-header-cart-btn or-canvas-cart-trigger">
                    <i class="fas fa-shopping-cart"></i> Giỏ hàng: 0 - <span>0VND</span>
                </div>
            </div>
        </div>
    </div>
    <div class="organic-main-navigation">
        <div class="container">
            <div class="organic-header-content  position-relative">
                <div class="site-logo ">
                    <a href="#" ><img src="client/img/logo/logo1.png" alt="" ></a>
                </div>
                <nav class="main-navigation-area clearfix ul-li">
                    <ul class="menu-navigation left-nav">
                        <li class="dropdown">
                            <a href="%21.html#">Trang chủ</a>
                        </li>
                        <li class="dropdown">
                            <a href="%21.html#">Danh mục sản phẩm</a>
                            <ul class="dropdown-menu clearfix">
                                    @foreach($categories as $category)
                                        <li><a href="{{ route('client.category', ['category'=> $category->id]) }}">{{$category->name}} </a></li>
                                    @endforeach

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="%21.html#">Thông báo</a>
                        </li>
                    </ul>
                    <ul class="menu-navigation right-nav">
                        <li class="dropdown">
                            <a href="%21.html#">Tài khoản</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a target="_blank" href="blog.html">Đăng kí </a></li>
                                <li><a target="_blank" href="blog-single.html">Đăng nhập</a></li>
                            </ul>
                        </li>	
                        <li class="dropdown">
                            <a href="%21.html#">Liên hệ</a>
                        </li>
                    </ul>
                </nav>
                <div class="header-search-btn search-btn">
                    <button class="search-box-outer"><i class="fas fa-search"></i></button>
                </div>
                <div class="header-search-btn cart-btn">
                    <button class="or-canvas-cart-trigger"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile_menu position-relative">
        <div class="mobile_menu_button open_mobile_menu">
            <i class="fal fa-bars"></i>
        </div>
        <div class="mobile_menu_wrap">
            <div class="mobile_menu_overlay open_mobile_menu"></div>
            <div class="mobile_menu_content">
                <div class="mobile_menu_close open_mobile_menu">
                    <i class="fal fa-times"></i>
                </div>
                <div class="m-brand-logo">
                    <a href="%21.html#"><img src="assets/img/logo/logo1.png" alt=""></a>
                </div>
                <div class="mobile-search-wrapper position-relative">
                    <form action="#">
                        <input type="text" placeholder="Search Here...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>

        <!-- /Mobile-Menu -->
    </div>
</header>
<div class="search-popup">
    <button class="close-search style-two"><span class="fal fa-times"></span></button>
    <button class="close-search"><span class="fa fa-arrow-up"></span></button>
    <form method="post" action="https://html.themexriver.com/organio/blog.html">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<div class="or-ofcanvas-cart-wrapper">
    <div class="or-ofcanvas-cart-content">
        <div class="title-area d-flex justify-content-between align-items-center">
            <div class="cart-title">
                <span>Cart</span>
            </div>
            <div class="cart-close">
                <button class="or-canvas-cart-trigger"><i class="fal fa-times"></i></button>
            </div>
        </div>
        <div class="or-ofcart-product-wrapper">
            <div class="or-ofcart-product-item d-flex align-items-center position-relative">
                <div class="pro-remove position-absolute"><i class="fal fa-times"></i></div>
                <div class="or-ofcart-product-img">
                    <img src="assets/img/product/pro1.jpg" alt="">
                </div>
                <div class="or-ofcart-product-text headline">
                    <h3><a href="#">Organic Juice</a></h3>
                    <span>1 x $4.00</span>
                </div>
            </div>
            <div class="or-ofcart-product-item d-flex align-items-center position-relative">
                <div class="pro-remove position-absolute"><i class="fal fa-times"></i></div>
                <div class="or-ofcart-product-img">
                    <img src="assets/img/product/pro2.jpg" alt="">
                </div>
                <div class="or-ofcart-product-text headline">
                    <h3><a href="#">Fresh Orange</a></h3>
                    <span>1 x $4.00</span>
                </div>
            </div>
            <div class="or-ofcart-product-item d-flex align-items-center position-relative">
                <div class="pro-remove position-absolute"><i class="fal fa-times"></i></div>
                <div class="or-ofcart-product-img">
                    <img src="assets/img/product/pro3.jpg" alt="">
                </div>
                <div class="or-ofcart-product-text headline">
                    <h3><a href="#">Organic Onion</a></h3>
                    <span>1 x $4.00</span>
                </div>
            </div>
        </div>
        <div class="or-ofcart-total text-center">
            <span>Subtotal: $4.00</span>
            <div class="total-btn">
                <a href="cart.html">View Cart</a>
                <a href="checkout.html">Checkout</a>
            </div>
        </div>
    </div>
</div>
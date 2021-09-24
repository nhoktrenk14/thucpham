@extends('client.layouts.master', ['pageTitle'=>'Trang chủ'])
@section('content')
<section id="or-banner" class="or-banner-section" data-background="client/img/bg/banner-bg1.jpg">
	<div class="or-banner-content position-relative">
		<div class="container">
			<div class="or-banner-slider">
				<div class="or-banner-slider-item-wrapper headline-2 pera-content text-center">
					<div class="or-banner-slider-item">
						<h1>Luôn cung cấp <span>thực phẩm hữu cơ</span>
						tươi ngon và sạch sẽ</h1>
						<p>Công việc của chúng tôi là làm đầy bụng bạn với những món ăn ngon lành mạnh và dịch vụ giao hàng miễn phí. </p>
						<div class="or-banner-btn d-flex justify-content-center">
							<a href="#">Mua sắm ngay</a>
							<a href="#">About us</a>
						</div>
					</div>
				</div>
				<div class="or-banner-slider-item-wrapper headline-2 pera-content text-center">
					<div class="or-banner-slider-item">
						<h1>Luôn cung cấp <span>thực phẩm hữu cơ</span>
						tươi ngon và sạch sẽ</h1>
						<p>Công việc của chúng tôi là làm đầy bụng bạn với những món ăn ngon lành mạnh và dịch vụ giao hàng miễn phí. </p>
						<div class="or-banner-btn d-flex justify-content-center">
							<a href="#">Mua sắm ngay</a>
							<a href="#">About us</a>
						</div>
					</div>
				</div>
				<div class="or-banner-slider-item-wrapper headline-2 pera-content text-center">
					<div class="or-banner-slider-item">
						<h1>Luôn cung cấp <span>thực phẩm hữu cơ</span>
						tươi ngon và sạch sẽ</h1>
						<p>Công việc của chúng tôi là làm đầy bụng bạn với những món ăn ngon lành mạnh và dịch vụ giao hàng miễn phí. </p>
						<div class="or-banner-btn d-flex justify-content-center">
							<a href="#">Mua sắm ngay</a>
							<a href="#">About us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-deco-img position-absolute">
			<img src="client/img/bg/banner-side1.png" alt="">
		</div>
	</div>
</section>
<!-- End of Banner section
	============================================= -->

<!-- Start of Feeatur section
	============================================= -->
	<section id="or-feature" class="or-feature-section">
		<div class="container">
			<div class="or-section-title-3 text-center pera-content headline-2">
				<h2>Tại sao nên lựa chọn<span> Organico</span></h2>
				<p>Giờ đây, bạn chỉ cần thực hiện vài cú nhấp chuột hoặc chạm nhẹ là đã có thể đặt đồ ăn. </p>
			</div>
			<div class="or-feature-content position-relative">
				<span class="section-deco1 position-absolute"><img src="client/img/deco1.png" alt=""></span>
				<span class="section-deco2 position-absolute"><img src="client/img/deco2.png" alt=""></span>
				<span class="section-deco3 position-absolute"><img src="client/img/deco3.png" alt=""></span>
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="or-feature-innerbox text-center headline-2 pera-content">
							<div class="or-feature-img">
								<img src="client/img/icon/ft-icon1.png" alt="">
							</div>
							<div class="or-feature-text">
								<h3>Rau củ hữu cơ tươi ngon</h3>
								<p>Từ món ăn đặc sản địa phương đến các nhà hàng được ưa thích, nhiều lựa chọn đa dạng chắc chắn sẽ luôn làm hài lòng.</p>
								<a href="service-single.html">Tìm hiểu thêm</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="or-feature-innerbox text-center headline-2 pera-content">
							<div class="or-feature-img">
								<img src="client/img/icon/ft-icon2.png" alt="">
							</div>
							<div class="or-feature-text">
								<h3>Giao hàng tiết kiệm nhanh chóng</h3>
								<p>Giao và nhận đồ ăn thật dễ dàng. Thanh toán bằng GrabPay thậm chí còn dễ dàng hơn nữa.</p>
								<a href="service-single.html">Tìm hiểu thêm</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="or-feature-innerbox text-center headline-2 pera-content">
							<div class="or-feature-img">
								<img src="client/img/icon/ft-icon3.png" alt="">
							</div>
							<div class="or-feature-text">
								<h3>Hệ thống thanh toán rất dễ dàng</h3>
								<p>Thanh toán bằng GrabPay thậm chí còn dễ dàng hơn nữa.Thanh toán bằng GrabPay thậm chí còn dễ dàng hơn nữa.</p>
								<a href="service-single.html">Tìm hiểu thêm</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Feeatur section
	============================================= -->

<!-- Start of Category section
	============================================= -->
	<section id="or-popular-category" class="or-popular-category-section">
		<div class="container">
			<div class="or-popular-category-top-content d-flex justify-content-between align-items-end">
				<div class="or-section-title-3 pera-content headline-2">
					<h2><span>Thực phẩm ưa thích</span></h2>
					<p>Tích điểm GrabRewards cho mỗi đơn hàng của bạn và sử dụng điểm thưởng để đổi lấy nhiều ưu đãi hơn. </p>
				</div>
				<div class="carousel_nav  clearfix">
					<button type="button" class="or-pop-cat-left_arrow"><i class="far fa-chevron-left"></i></button>
					<button type="button" class="or-pop-cat-right_arrow"><i class="far fa-chevron-right"></i></button>
				</div>
			</div>
			<div class="or-popular-category-slider-area">
				<div class="or-popular-category-slider-wrap">
					<div class="or-popular-cat-slider">
						<div class="organio-inner-item">
							<div class="or-p-cat-innerbox headline-2">
								<a href="shop.html">
									<div class="or-p-cat-img">
										<img src="client/img/category/h5-icon1.png" alt="">
									</div>
									<h3> Rau củ</h3>
								</a>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-p-cat-innerbox headline-2">
								<a href="shop.html">
									<div class="or-p-cat-img">
										<img src="client/img/category/h5-icon2.png" alt="">
									</div>
									<h3>  Trái cây</h3>
								</a>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-p-cat-innerbox headline-2">
								<a href="shop.html">
									<div class="or-p-cat-img">
										<img src="client/img/category/h5-icon3.png" alt="">
									</div>
									<h3> Hoa quả sấy</h3>
								</a>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-p-cat-innerbox headline-2">
								<a href="shop.html">
									<div class="or-p-cat-img">
										<img src="client/img/category/h5-icon4.png" alt="">
									</div>
									<h3> Nước ép</h3>
								</a>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-p-cat-innerbox headline-2">
								<a href="shop.html">
									<div class="or-p-cat-img">
										<img src="client/img/category/h5-icon1.png" alt="">
									</div>
									<h3> Rau củ</h3>
								</a>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-p-cat-innerbox headline-2">
								<a href="shop.html">
									<div class="or-p-cat-img">
										<img src="client/img/category/h5-icon2.png" alt="">
									</div>
									<h3>  Trái cây</h3>
								</a>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-p-cat-innerbox headline-2">
								<a href="shop.html">
									<div class="or-p-cat-img">
										<img src="client/img/category/h5-icon3.png" alt="">
									</div>
									<h3> Hoa quả sấy</h3>
								</a>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-p-cat-innerbox headline-2">
								<a href="shop.html">
									<div class="or-p-cat-img">
										<img src="client/img/category/h5-icon4.png" alt="">
									</div>
									<h3> Nước ép</h3>
								</a>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-p-cat-innerbox headline-2">
								<a href="shop.html">
									<div class="or-p-cat-img">
										<img src="client/img/category/h5-icon1.png" alt="">
									</div>
									<h3> Rau củ</h3>
								</a>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-p-cat-innerbox headline-2">
								<a href="shop.html">
									<div class="or-p-cat-img">
										<img src="client/img/category/h5-icon2.png" alt="">
									</div>
									<h3>  Trái cây</h3>
								</a>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-p-cat-innerbox headline-2">
								<a href="shop.html">
									<div class="or-p-cat-img">
										<img src="client/img/category/h5-icon3.png" alt="">
									</div>
									<h3> Hoa quả sấy</h3>
								</a>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-p-cat-innerbox headline-2">
								<a href="shop.html">
									<div class="or-p-cat-img">
										<img src="client/img/category/h5-icon4.png" alt="">
									</div>
									<h3> Nước ép</h3>
								</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Category section
	============================================= -->

<!-- Start of CTA  section
	============================================= -->
	<section id="or-cta" class="or-cta-section">
		<div class="container">
			<div class="or-cta-content" data-background="client/img/bg/cta-bg.jpg">
				<div class="or-cta-text text-center headline-2 pera-content">
					<p>Chỉ từ <span>49.000</span></p>
					<h3>Giảm giá lên tới 20%</h3>
					<a class="d-flex justify-content-center align-items-center" href="contact.html">Liên hệ với chúng tôi</a>
				</div>
			</div>
		</div>
	</section>
<!-- End of CTA  section
	============================================= -->

<!-- Start of Trending product  section
	============================================= -->
	<section id="or-trending-product" class="or-trending-product-section">
		<div class="container">
			<div class="or-trending-product-top d-flex justify-content-between align-items-end">
				<div class="or-section-title-3 pera-content headline-2">
					<h2><span>Sản phẩm thịnh hành</span></h2>
					<p>Tích điểm GrabRewards cho mỗi đơn hàng của bạn và sử dụng điểm thưởng để đổi lấy nhiều ưu đãi hơn. </p>
				</div>
				<div class="or-trending-item-filter-btn ul-li">
					<ul id="filters" class="nav-gallery">
						<li class="filtr-button filtr-active" data-filter="all">Tất cả sản phẩm</li>
						<li class="filtr-button" data-filter="1">Trái cây</li>
						<li class="filtr-button" data-filter="2">Rau củ</li>
						<li class="filtr-button" data-filter="3">Hoa quả sấy </li>
						<li class="filtr-button" data-filter="4">Nước ép </li>
					</ul>
				</div>
			</div>
			<div class="or-trending-item-wrapper filtr-container row">
				<div class="col-lg-3 col-sm-6 filtr-item" data-category="1, 3, 4" data-sort="Busy streets">
					<div class="or-trending-product-item text-center">
						<div class="or-trend-item-img position-relative">
							<img src="client/img/product/tp2.png" alt="">
							<div class="e-commerce-btn">
								<a href="#"><i class="fal fa-shopping-cart"></i></a>
								<a href="#"><i class="fal fa-heart"></i></a>
								<a href="#"><i class="fal fa-eye"></i></a>
							</div>
						</div>
						<div class="or-trend-item-text headline-2">
							<h3><a href="shop-single.html">Cam tươi</a></h3>
							<span>70.000 – 150.000VND </span>
							<a class="add-cart-btn" href="cart.html">Thêm vào giỏ</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 filtr-item" data-category="2, 3, 4" data-sort="Busy streets">
					<div class="or-trending-product-item text-center">
						<div class="or-trend-item-img position-relative">
							<img src="client/img/product/tp1.png" alt="">
							<div class="e-commerce-btn">
								<a href="#"><i class="fal fa-shopping-cart"></i></a>
								<a href="#"><i class="fal fa-heart"></i></a>
								<a href="#"><i class="fal fa-eye"></i></a>
							</div>
						</div>
						<div class="or-trend-item-text headline-2">
							<h3><a href="shop-single.html">Bơ</a></h3>
							<span>70.000 – 150.000VND </span>
							<a class="add-cart-btn" href="cart.html">Thêm vào giỏ</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 filtr-item" data-category="1, 2, 4" data-sort="Busy streets">
					<div class="or-trending-product-item text-center">
						<div class="or-trend-item-img position-relative">
							<img src="client/img/product/tp3.png" alt="">
							<div class="e-commerce-btn">
								<a href="#"><i class="fal fa-shopping-cart"></i></a>
								<a href="#"><i class="fal fa-heart"></i></a>
								<a href="#"><i class="fal fa-eye"></i></a>
							</div>
						</div>
						<div class="or-trend-item-text headline-2">
							<h3><a href="shop-single.html">Hành tây</a></h3>
							<span>70.000 – 150.000VND </span>
							<a class="add-cart-btn" href="cart.html">Thêm vào giỏ</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 filtr-item" data-category="2, 3, 4" data-sort="Busy streets">
					<div class="or-trending-product-item text-center">
						<div class="or-trend-item-img position-relative">
							<img src="client/img/product/tp5.png" alt="">
							<div class="e-commerce-btn">
								<a href="#"><i class="fal fa-shopping-cart"></i></a>
								<a href="#"><i class="fal fa-heart"></i></a>
								<a href="#"><i class="fal fa-eye"></i></a>
							</div>
						</div>
						<div class="or-trend-item-text headline-2">
							<h3><a href="shop-single.html">Khoai tây</a></h3>
							<span>70.000 – 150.000VND </span>
							<a class="add-cart-btn" href="cart.html">Thêm vào giỏ</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 filtr-item" data-category="2, 3, 4" data-sort="Busy streets">
					<div class="or-trending-product-item text-center">
						<div class="or-trend-item-img position-relative">
							<img src="client/img/product/tp5.png" alt="">
							<div class="e-commerce-btn">
								<a href="#"><i class="fal fa-shopping-cart"></i></a>
								<a href="#"><i class="fal fa-heart"></i></a>
								<a href="#"><i class="fal fa-eye"></i></a>
							</div>
						</div>
						<div class="or-trend-item-text headline-2">
							<h3><a href="shop-single.html">Khoai tây</a></h3>
							<span>70.000 – 150.000VND </span>
							<a class="add-cart-btn" href="cart.html">Thêm vào giỏ</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 filtr-item" data-category="4, 1, 2" data-sort="Busy streets">
					<div class="or-trending-product-item text-center">
						<div class="or-trend-item-img position-relative">
							<img src="client/img/product/tp6.png" alt="">
							<div class="e-commerce-btn">
								<a href="#"><i class="fal fa-shopping-cart"></i></a>
								<a href="#"><i class="fal fa-heart"></i></a>
								<a href="#"><i class="fal fa-eye"></i></a>
							</div>
						</div>
						<div class="or-trend-item-text headline-2">
							<h3><a href="shop-single.html">Cải bắp xanh</a></h3>
							<span>70.000 – 150.000VND </span>
							<a class="add-cart-btn" href="cart.html">Thêm vào giỏ</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 filtr-item" data-category="1, 3, 4" data-sort="Busy streets">
					<div class="or-trending-product-item text-center">
						<div class="or-trend-item-img position-relative">
							<img src="client/img/product/tp7.png" alt="">
							<div class="e-commerce-btn">
								<a href="#"><i class="fal fa-shopping-cart"></i></a>
								<a href="#"><i class="fal fa-heart"></i></a>
								<a href="#"><i class="fal fa-eye"></i></a>
							</div>
						</div>
						<div class="or-trend-item-text headline-2">
							<h3><a href="shop-single.html">Cà rốt</a></h3>
							<span>70.000 – 150.000VND </span>
							<a class="add-cart-btn" href="cart.html">Thêm vào giỏ</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 filtr-item" data-category="1, 3, 5" data-sort="Busy streets">
					<div class="or-trending-product-item text-center">
						<div class="or-trend-item-img position-relative">
							<img src="client/img/product/tp8.png" alt="">
							<div class="e-commerce-btn">
								<a href="#"><i class="fal fa-shopping-cart"></i></a>
								<a href="#"><i class="fal fa-heart"></i></a>
								<a href="#"><i class="fal fa-eye"></i></a>
							</div>
						</div>
						<div class="or-trend-item-text headline-2">
							<h3><a href="shop-single.html">Chanh</a></h3>
							<span>70.000 – 150.000VND </span>
							<a class="add-cart-btn" href="cart.html">Thêm vào giỏ</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Trending product  section
	============================================= -->

<!-- Start of Best Deal  section
	============================================= -->
	<section id="or-best-deal-3" class="or-best-deal-section-3" data-background="client/img/bg/deal-bg2.jpg">
		<div class="container">
			<div class="or-deal-content-3 headline-2 pera-content">
				<h2>Ưu đãi của <span>Tuần!</span></h2>
				<p>Rẻ Bất Ngờ 9.9
					Bão Mega Sale 9.9 Giá Rẻ Bất Ngờ.Giảm Kịch Sàn. Gì Cũng Rẻ Chỉ Từ 1K</p>
				<div class="best-deal-countdown ul-li">
					<ul>
						<li class="days">
							<span class="or-count-down-number"></span>
							<span class="count-unit">Ngày</span>
						</li>

						<li class="hours">
							<span class="or-count-down-number"></span>
							<span class="count-unit">Giờ</span>
						</li>

						<li class="minutes">
							<span class="or-count-down-number"></span>
							<span class="count-unit">Phút</span>
						</li>

						<li class="seconds">
							<span class="or-count-down-number"></span>
							<span class="count-unit">Giây</span>
						</li>
					</ul>
				</div>
				<a href="shop.html">Mua ngay</a>
			</div>
		</div>
	</section>
<!-- End of Best Deal  section
	============================================= -->

<!-- Start of team  section
	============================================= -->
	<section id="or-team-2" class="or-team-section-2">
		<div class="container">
			<div class="or-section-title-3 text-center pera-content headline-2">
				<h2>Nhưng người <span>quản lí</span> trang trại của chúng tôi</h2>
				<p>Bạn đừng bao giờ ghét những người hay đố kỵ với bạn. Hãy kính trọng sự đố kỵ đó, vì những người ấy chính là người nghĩ rằng bạn giỏi hơn họ.</p>
			</div>
			<div class="or-team-content-2">
				<div class="or-team-slide-wrapper-2">
					<div class="or-team-slide-2">
						<div class="organio-inner-item">
							<div class="or-team-innerbox-2 text-center position-relative">
								<div class="or-team-img position-relative">
									<img src="client/img/team/tm2.1.jpg" alt="">
									<div class="team-social">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
								<div class="or-team-text headline-2">
									<h3><a href="team-single.html">Trịnh Đình Đức</a></h3>
									<span>CEO/ Giám đốc điều hành</span>
								</div>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-team-innerbox-2 text-center position-relative">
								<div class="or-team-img position-relative">
									<img src="client/img/team/tm2.2.jpg" alt="">
									<div class="team-social">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
								<div class="or-team-text headline-2">
									<h3><a href="team-single.html">Trịnh Đình Đức</a></h3>
									<span>Quản lí</span>
								</div>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-team-innerbox-2 text-center position-relative">
								<div class="or-team-img position-relative">
									<img src="client/img/team/tm2.3.jpg" alt="">
									<div class="team-social">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
								<div class="or-team-text headline-2">
									<h3><a href="team-single.html">Trịnh Đình Đức</a></h3>
									<span>Nông dân</span>
								</div>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-team-innerbox-2 text-center position-relative">
								<div class="or-team-img position-relative">
									<img src="client/img/team/tm2.4.jpg" alt="">
									<div class="team-social">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
								<div class="or-team-text headline-2">
									<h3><a href="team-single.html">Trịnh Đình Đức</a></h3>
									<span>Nông dân</span>
								</div>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-team-innerbox-2 text-center position-relative">
								<div class="or-team-img position-relative">
									<img src="client/img/team/tm2.1.jpg" alt="">
									<div class="team-social">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
								<div class="or-team-text headline-2">
									<h3><a href="team-single.html">Trịnh Đình Đức</a></h3>
									<span>CEO/ Giám đốc điều hành</span>
								</div>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-team-innerbox-2 text-center position-relative">
								<div class="or-team-img position-relative">
									<img src="client/img/team/tm2.2.jpg" alt="">
									<div class="team-social">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
								<div class="or-team-text headline-2">
									<h3><a href="team-single.html">Trịnh Đình Đức</a></h3>
									<span>Quản lí</span>
								</div>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-team-innerbox-2 text-center position-relative">
								<div class="or-team-img position-relative">
									<img src="client/img/team/tm2.3.jpg" alt="">
									<div class="team-social">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
								<div class="or-team-text headline-2">
									<h3><a href="team-single.html">Trịnh Đình Đức</a></h3>
									<span>Nông dân</span>
								</div>
							</div>
						</div>
						<div class="organio-inner-item">
							<div class="or-team-innerbox-2 text-center position-relative">
								<div class="or-team-img position-relative">
									<img src="client/img/team/tm2.4.jpg" alt="">
									<div class="team-social">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
								<div class="or-team-text headline-2">
									<h3><a href="team-single.html">Trịnh Đình Đức</a></h3>
									<span>Nông dân</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of team  section
	============================================= -->

<!-- Start of Testimonial  section
	============================================= -->
	<section id="or-testimonial-2" class="or-testimonial-section-2" data-background="client/img/bg/h5-bg-testimonial1.png">
		<div class="container">
			<div class="or-testimonial-content-2">
				<div class="row">
					<div class="col-lg-6">
						<div class="or-testimonial-img-2 text-center">
							<img src="client/img/h5-testimonial-banner.png" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="or-testimonial-text-2 headline-2 pera-content">
							<h2><span>Khách hàng</span> của chúng tôi nói gì?
							</h2>
							<div class="or-testimonial-slider-content-2 position-relative">
								<span class="quote-icon position-absolute"><i class="fas fa-quote-right"></i></span>
								<div class="or-testimonial-slider-2">
									<div class="or-testimonial-item-2">
										<p>Trong tình yêu không ai là có lỗi, mà chỉ có người không biết cách trân quý một người mà thôi.</p>
										<div class="testimonial-meta">
											<h3>Trịnh Đình Đức</h3>
											<span>CEO/ Giám đốc điều hành</span>
										</div>
									</div>
									<div class="or-testimonial-item-2">
										<p>Đừng nên hỏi tại sao bạn sống. Mà nên hỏi ta phải sống thế nào mới hạnh phúc. Đừng cố tu để thoát khổ, mà hãy tu học để làm mình ngày càng hạnh phúc hơn.</p>
										<div class="testimonial-meta">
											<h3>Trịnh Đình Đức</h3>
											<span>CEO/ Giám đốc điều hành</span>
										</div>
									</div>
									<div class="or-testimonial-item-2">
										<p>Chỉ có cha mẹ mới yêu thương ta vô điều kiện. Bởi vậy, hãy yêu thương cha mẹ khi còn có thể bạn nhé!</p>
										<div class="testimonial-meta">
											<h3>Trịnh Đình Đức</h3>
											<span>CEO/ Giám đốc điều hành</span>
										</div>
									</div>
								</div>
								<div class="carousel_nav  clearfix">
									<button type="button" class="or-tst-cat-left_arrow"><i class="far fa-chevron-left"></i></button>
									<button type="button" class="or-tst-cat-right_arrow"><i class="far fa-chevron-right"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Testimonial  section
	============================================= -->

<!-- Start of blog  section
	============================================= -->
	<section id="or-blog-3" class="or-blog-section-3">
		<div class="container">
			<div class="or-section-title-3 text-center pera-content headline-2">
				<h2>Tin tức Blog <span>mới nhất</span> </h2>
				<p>Sự khác biệt duy nhất giữa một ngày tốt đẹp và một ngày tồi tệ nằm ở chính thái độ của bạn. </p>
			</div>
			<div class="or-blog-content-3">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6">
							<div class="or-blog-innerbox-3">
								<div class="or-blog-img">
									<img src="client/img/blog/blg2.1.jpg" alt="">
								</div>
								<div class="or-blog-text">
									<div class="or-blog-meta d-flex justify-content-between">
										<a href="#"><i class="fas fa-tags"></i> Thực phẩm hữ cơ</a>
										<a href="#"><i class="fas fa-calendar-alt"></i> 10/9/2021</a>
									</div>
									<div class="or-blog-title headline-2">
										<h3><a href="blog-single.html">Những điều cần biết về nước giải độc
										</a></h3>
										<a class="read-more" href="blog-single.html">Đọc thêm</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="or-blog-innerbox-3">
								<div class="or-blog-img">
									<img src="client/img/blog/blg2.2.jpg" alt="">
								</div>
								<div class="or-blog-text">
									<div class="or-blog-meta d-flex justify-content-between">
										<a href="#"><i class="fas fa-tags"></i> Thực phẩm hữ cơ</a>
										<a href="#"><i class="fas fa-calendar-alt"></i> 10/9/2021</a>
									</div>
									<div class="or-blog-title headline-2">
										<h3><a href="blog-single.html">Những điều cần biết về nước giải độc
										</a></h3>
										<a class="read-more" href="blog-single.html">Đọc thêm</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="or-blog-innerbox-3">
								<div class="or-blog-img">
									<img src="client/img/blog/blg2.3.jpg" alt="">
								</div>
								<div class="or-blog-text">
									<div class="or-blog-meta d-flex justify-content-between">
										<a href="#"><i class="fas fa-tags"></i> Thực phẩm hữ cơ</a>
										<a href="#"><i class="fas fa-calendar-alt"></i> 10/9/2021</a>
									</div>
									<div class="or-blog-title headline-2">
										<h3><a href="blog-single.html">Những điều cần biết về nước giải độc
										</a></h3>
										<a class="read-more" href="blog-single.html">Đọc thêm</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="or-blog-btn-3">
						<a href="blog.html">Xem thêm</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
	

@extends('client.layouts.master', ['pageTitle'=>'Trang chủ'])
@section('content')
<section id="or-breadcrumbs" class="or-breadcrumbs-section position-relative" data-background="client/img/bg/bg-page-title.jpg">
	<div class="background_overlay"></div>
	<div class="container">
		<div class="or-breadcrumbs-content text-center">
			<div class="page-title headline"><h1>Cửa hàng</h1></div>
			<div class="or-breadcrumbs-items ul-li">
				<ul>
					<li><a href="#">Trang chủ</a></li>
					<li>Của hàng</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="or-shop-product" class="or-shop-product-section">
    <div class="container">
        <div class="or-section-title headline pera-content text-center middle-align">
            <span class="sub-title">Các sản phẩm</span>
            <h2>Tất cả các sản phẩm của chúng tôi là hữu cơ và tươi.</h2>
        </div>
        <div class="or-product-shop-content">
            <div class="container">
                <div class="row">
                    @foreach ($product as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="or-product-innerbox-item type-1 text-center position-relative">
                            <div class="e-commerce-btn">
                                <a href="#"><i class="fal fa-shopping-cart"></i></a>
                                <a href="#"><i class="fal fa-heart"></i></a>
                                <a href="#"><i class="fal fa-eye"></i></a>
                            </div>
                            <div class="or-product-inner-img">
                                <img src="{{ asset('uploads/products/'.$item->image) }}" alt="">
                            </div>
                            <div class="or-product-inner-text headline">
                                <h3><a href="{{ route('product.detail', ['product'=> $item->id]) }}" tabindex="0">{{$item->name}}</a></h3>
                                <span class="price">{{$item->regular_price}} VND</span>
                                <div class="or-product-rate ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="or-product-btn text-center">
                                <a class="d-flex justify-content-center align-items-center" href="#" tabindex="0">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="or-pagination text-center ul-li">
                    <ul>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
	

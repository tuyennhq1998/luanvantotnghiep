<!-- Hero section -->
@extends('master')
@section('content')
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="frontend/img/bg.png">
			</div>
			<div class="hs-item set-bg" data-setbg="frontend/img/bg-2.png">
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="frontend/img/icons/1.png" alt="#">
						</div>
						<h2>Giao hàng nhanh chóng</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="frontend/img/icons/2.png" alt="#">
						</div>
						<h2>Sản phẩm đặc biệt</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="frontend/img/icons/3.png" alt="#">
						</div>
						<h2>Miễn phí vận chuyển</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>SẢN PHẨM MỚI NHẤT</h2>
			</div>
			<div class="product-slider owl-carousel">
				@foreach($product as $p)
				<div class="product-item">
					<div class="pi-pic">
						<img src="./frontend/img/product/{{$p->avatar}}" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Thêm</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>{{$p->ten}}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>SẢN PHẨM TÌM KIẾM NHIỀU</h2>
			</div>
			<div class="row">
				@foreach($viewproduct as $v)
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./frontend/img/product/{{$v->avatar}}" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>{{$v->ten}} </p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	@endsection
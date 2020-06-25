@extends('master')
@section('content')
	<div class="page-top-info">
		<div class="container">
			<h4>CAtegory PAge</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Shop</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Hãng</h2>
						<ul class="category-menu">
							@foreach($menu as $m)
								<li><a href="#">{{$m->mahang}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">Bộ lọc</h2>
						<div class="price-range-wrap">
							<h4>Khoãng giá</h4>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
								</span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
								</span>
							</div>
							<div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
					</div>
					<div class="filter-widget">
						<h2 class="fw-title">RAM</h2>
						<ul class="category-menu">
							<li><a href="#">Abercrombie & Fitch </a></li>
							<li><a href="#">Asos</a></li>
							<li><a href="#">Bershka</a></li>
							<li><a href="#">Missguided</a></li>
							<li><a href="#">Zara</a></li>
						</ul>
					</div>
					<div class="filter-widget">
						<h2 class="fw-title">Sắp xếp</h2>
						<ul class="category-menu">
							<li><a href="#">Giá từ cao tới thấp <span>(2)</span></a></li>
							<li><a href="#">Già từ thấp đến cao<span>(56)</span></a></li>
							<li><a href="#">Bán chạy nhất<span>(36)</span></a></li>
							<li><a href="#">Mới nhất<span>(27)</span></a></li>
							
						</ul>
					</div>
				</div>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">	
						@foreach($product as $p)
						<a href="#">
							<div class="col-lg-4 col-sm-6">
						
							<div class="product-item">
								<div class="pi-pic">
									<img src="frontend/img/product/{{$p->avatar}}" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>{{$p->ten}}</p>
								</div>
							</div>
							
						</div></a>
						@endforeach
						<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">XEM THÊM</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
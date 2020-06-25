<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Divisima | eCommerce Template</title>
	<base href="{{URL :: asset(' ')}}">
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="frontend/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="frontend/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="frontend/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="frontend/css/flaticon.css"/>
	<link rel="stylesheet" href="frontend/css/slicknav.min.css"/>
	<link rel="stylesheet" href="frontend/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="frontend/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="frontend/css/animate.css"/>
	<link rel="stylesheet" href="frontend/css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site-logo">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Tìm sản phẩm">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#">Đăng nhập</a> Hoặc <a href="#">Đăng ký</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="#">Giỏ hàng</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="{{URL::to('/')}}">Trang chủ</a></li>
					<li><a href="#">Hãng</a>
						<ul class="sub-menu">
							@foreach($menu as $m)
								<li><a href="#">{{$m->mahang}}</a></li>
							@endforeach
						</ul>
					</li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Giới thiệu</a></li>
					<li><a href="#">Hỏi đáp</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->



	@yield('content')
	<!-- Product filter section end -->


	<!-- Banner section -->
	
	<!-- Banner section end  -->


	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img src="frontend/img/logo-light.png" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
			
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>THÔNG TIN</h2>
						<div class="con-info">
							<span>LVTN</span>
							
						</div>
						<div class="con-info">
							<span>180 Cao Lỗ , Phường 4 , Quận 8 , TPHCM</span>
							
						</div>
						<div class="con-info">
							<span>0772781926</span>
							
						</div>
						<div class="con-info">
							<span>nguyenhuynh.quynhtuyen@gmail.com</span>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="frontend/js/jquery-3.2.1.min.js"></script>
	<script src="frontend/js/bootstrap.min.js"></script>
	<script src="frontend/js/jquery.slicknav.min.js"></script>
	<script src="frontend/js/owl.carousel.min.js"></script>
	<script src="frontend/js/jquery.nicescroll.min.js"></script>
	<script src="frontend/js/jquery.zoom.min.js"></script>
	<script src="frontend/js/jquery-ui.min.js"></script>
	<script src="frontend/js/main.js"></script>

	</body>
</html>

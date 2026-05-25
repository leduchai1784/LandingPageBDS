<!DOCTYPE html>
<html lang="vi">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title', 'LDH Homes - Bất động sản cao cấp')</title>
	<!-- Latest Bootstrap min CSS -->
	<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}">
	<!--- owl carousel Css-->
	<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
	<!--fonts icons Css-->
	<link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
	<!--prettyPhoto css-->
	<link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet">
	<!-- magnific-popup css -->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<!-- flexslider css -->
	<link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- Slick css -->
	<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	@yield('styles')
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body data-spy="scroll" data-offset="80">

	<!-- START PRELOADER -->
	<div class="preloader">
		<div class="status">
			<div class="status-mes"></div>
		</div>
	</div>
	<!-- END PRELOADER -->

	<!-- START NAVBAR -->
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
				<span class="icon-close2 js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6 col-xl-2">
					<h1 class="mb-0 site-logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a></h1>
				</div>
				<div class="col-12 col-md-10 d-none d-xl-block">
					<nav class="site-navigation position-relative text-right" role="navigation">
						<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
							<li class="has-children">
								<a href="{{ url('/') }}" class="nav-link">Trang chủ</a>
								<ul class="dropdown">
									<li><a href="{{ url('/home-map') }}" class="nav-link">Bản đồ</a></li>
									<li><a href="{{ url('/home-parallax') }}" class="nav-link">Hiệu ứng Parallax</a></li>
									<li><a href="{{ url('/home-slider') }}" class="nav-link">Trình chiếu slider</a></li>
									<li><a href="{{ url('/home-video') }}" class="nav-link">Video giới thiệu</a></li>
								</ul>
							</li>
							<li><a class="nav-link" href="{{ url('/about') }}">Giới thiệu</a></li>
							<li class="has-children">
								<a href="{{ url('/property') }}" class="nav-link">Dự án</a>
								<ul class="dropdown">
									<li><a href="{{ url('/property-details') }}" class="nav-link">Chi tiết dự án</a></li>
								</ul>
							</li>
							<li><a href="{{ url('/gallery') }}">Thư viện ảnh</a></li>
							<li class="has-children">
								<a href="#" class="nav-link">Trang</a>
								<ul class="dropdown">
									<li><a href="{{ url('/agent-profile') }}" class="nav-link">Hồ sơ môi giới</a></li>
									<li><a href="{{ url('/login') }}" class="nav-link">Đăng nhập</a></li>
									<li><a href="{{ url('/register') }}" class="nav-link">Đăng ký</a></li>
									<li><a href="{{ url('/faq') }}" class="nav-link">Hỏi đáp (FAQs)</a></li>
									<li><a href="{{ url('/404') }}" class="nav-link">Trang lỗi 404</a></li>
								</ul>
							</li>
							<li class="has-children">
								<a href="{{ url('/blog') }}" class="nav-link">Tin tức</a>
								<ul class="dropdown">
									<li><a href="{{ url('/blog') }}" class="nav-link">Danh sách tin</a></li>
									<li><a href="{{ url('/blog-post') }}" class="nav-link">Chi tiết bài viết</a></li>
								</ul>
							</li>
							<li><a class="nav-link" href="{{ url('/contact') }}">Liên hệ</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
					<a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
				</div>
			</div>
		</div>
	</header>
	<!-- END NAVBAR-->

	@yield('content')

	<!-- START FOOTER AREA -->
	<footer class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="footer_social">
						<ul>
							<li><a data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a data-toggle="tooltip" data-placement="top" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a data-toggle="tooltip" data-placement="top" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a data-toggle="tooltip" data-placement="top" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a data-toggle="tooltip" data-placement="top" title="Skype" href="#"><i class="fa fa-skype"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row footer-padding">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="single_footer">
						<h4>Liên hệ với chúng tôi</h4>
						<div class="footer_contact">
							<ul>
								<li><i class="fa fa-rocket"></i> <span>3481 Melrose Place, Beverly Hills, CA 90210</span></li>
								<li><i class="fa fa-phone"></i> <span>Điện thoại - (+1) 517 397 7100</span></li>
								<li><i class="fa fa-fax"></i> <span>Fax - (+12) 123 1234</span></li>
								<li><i class="fa fa-envelope"></i> <span>info@example.com</span></li>
							</ul>
						</div>
					</div>
				</div><!--- END COL -->
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="single_footer">
						<h4>Dịch vụ khách hàng</h4>
						<div class="footer_contact">
							<ul>
								<li><a href="#">Tài khoản của tôi</a></li>
								<li><a href="#">Lịch sử giao dịch</a></li>
								<li><a href="#">Câu hỏi thường gặp</a></li>
								<li><a href="#">Khuyến mãi đặc biệt</a></li>
								<li><a href="#">Trung tâm trợ giúp</a></li>
							</ul>
						</div>
					</div>
				</div><!--- END COL -->
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="single_footer">
						<h4>Liên kết hữu ích</h4>
						<div class="footer_contact">
							<ul>
								<li><a href="#">Giới thiệu</a></li>
								<li><a href="#">Dịch vụ chăm sóc</a></li>
								<li><a href="#">Công ty</a></li>
								<li><a href="#">Quan hệ đối tác</a></li>
								<li><a href="#">Tìm kiếm nâng cao</a></li>
							</ul>
						</div>
					</div>
				</div><!--- END COL -->
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="single_footer">
						<h4>Tại sao chọn chúng tôi</h4>
						<div class="footer_contact">
							<ul>
								<li><a href="#">Hướng dẫn mua nhà</a></li>
								<li><a href="#">Tin tức</a></li>
								<li><a href="#">Công ty thành viên</a></li>
								<li><a href="#">Cơ hội đầu tư</a></li>
								<li><a href="{{ url('/contact') }}">Liên hệ</a></li>
							</ul>
						</div>
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->
			<div class="row text-center">
				<div class="col-md-12 col-sm-12 col-xs-12 wow zoomIn">
					<p class="footer_copyright">LDH Homes &copy; 2026 Mọi quyền được bảo lưu. Bản quyền thuộc về <a href="https://themewagon.com" target="_blank">LDH</a></p>.
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</footer>
	<!-- END FOOTER AREA -->

	<!-- Latest jQuery -->
	<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
	<!-- Latest compiled and minified Bootstrap -->
	<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- modernizer JS -->
	<script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
	<!-- stellar js -->
	<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
	<!-- owl-carousel min js  -->
	<script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
	<!-- MAGNIFICANT JS -->
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- Slick JS -->
	<script src="{{ asset('assets/js/slick.min.js') }}"></script>
	<!-- jquery mixitup min js -->
	<script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
	<!-- Menu js -->
	<script src="{{ asset('assets/js/menu.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<!-- jquery.prettyPhoto js -->
	<script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
	<!-- scrolltopcontrol js -->
	<script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
	<!-- WOW - Reveal Animations When You Scroll -->
	<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<!-- flexslider js -->
	<script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
	<!-- mb.YTPlayer js -->
	<script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
	<!-- scripts js -->
	<script src="{{ asset('assets/js/scripts.js') }}"></script>
	@yield('scripts')
</body>

</html>
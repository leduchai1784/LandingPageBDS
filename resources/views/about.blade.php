@extends('layouts.app')

@section('title', 'Giới thiệu - LDH Homes')

@section('content')
<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 col-xs-12 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
					data-wow-offset="0">
					<h1>Giới thiệu</h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END SECTION TOP -->

	<!-- START ABOUT US -->
	<section id="about" class="about-us section-padding">
		<div class="container">
			<div class="section-title text-center wow zoomIn">
				<h2>Giới thiệu</h2>
				<div></div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-12 col-xs-12">
					<div class="about-us-content">
						<h2>Về đại lý của chúng tôi</h2>
						<p>Chúng tôi tự hào là đơn vị phân phối và tư vấn bất động sản hàng đầu, mang đến cho khách hàng những sản phẩm căn hộ, biệt thự và đất nền cao cấp với pháp lý minh bạch và giá trị sinh lời vượt trội. Với đội ngũ chuyên gia tận tâm, chúng tôi cam kết đồng hành cùng quý khách tìm kiếm không gian sống lý tưởng nhất.</p>
						<ul>
							<li><i class="fa fa-check"></i>Thông tin dự án chính xác, minh bạch</li>
							<li><i class="fa fa-check"></i>Hỗ trợ tư vấn pháp lý và thủ tục vay mua nhà</li>
							<li><i class="fa fa-check"></i>Đội ngũ tư vấn nhiệt tình, chuyên nghiệp 24/7</li>
							<li><i class="fa fa-check"></i>Cam kết đồng hành trọn đời cùng khách hàng</li>
						</ul>
						<a href="#">Xem thêm</a>
					</div>
				</div><!-- END COL -->
				<div class="col-lg-6 col-sm-12 col-xs-12">
					<div class="about_img">
						<img src="{{ asset('assets/img/2.jpg') }}" class="img-fluid" alt="" />
					</div>
				</div><!-- END COL -->
			</div><!-- END ROW -->
		</div><!-- END CONTAINER -->
	</section>
	<!-- END ABOUT US  -->

	<!-- START HOW IT WORKS -->
	<section data-stellar-background-ratio="0.3" class="about_video"
		style="background-image: url('{{ asset('assets/img/bg/video-bg.jpg') }}'); background-size:cover; background-position: center center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="our_video">
						<h1>Xem video giới thiệu</h1>
						<a class="video-play" href="https://vimeo.com/414300920"><i class="fa fa-play"></i></a>
					</div>
					<!-- END VIDEO POPUP -->
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END HOW IT WORKS -->

	<!-- START TEAM US -->
	<section id="team" class="our_team section-padding">
		<div class="container">
			<div class="section-title text-center wow zoomIn">
				<h2>Đội ngũ chuyên gia</h2>
				<div></div>
			</div>
			<div class="row text-center">
				<div class="col-lg-3 col-sm-3 col-xs-12">
					<div class="single_team">
						<img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="" />
						<h3>Juthi Ahmed</h3>
						<p>Đồng sáng lập</p>
						<ul class="list-inline">
							<li><a href="#" class="st-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="st-twitter"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="st-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div><!--- END SINGLE TEAM -->
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-3 col-xs-12">
					<div class="single_team">
						<img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="" />
						<h3>Masum Billah</h3>
						<p>Đồng sáng lập</p>
						<ul class="list-inline">
							<li><a href="#" class="st-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="st-twitter"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="st-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div><!--- END SINGLE TEAM -->
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-3 col-xs-12">
					<div class="single_team">
						<img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="" />
						<h3>Syed Ekram</h3>
						<p>Đồng sáng lập</p>
						<ul class="list-inline">
							<li><a href="#" class="st-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="st-twitter"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="st-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div><!--- END SINGLE TEAM -->
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-3 col-xs-12">
					<div class="single_team">
						<img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="" />
						<h3>Hanjala Haque</h3>
						<p>Đồng sáng lập</p>
						<ul class="list-inline">
							<li><a href="#" class="st-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="st-twitter"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="st-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div><!--- END SINGLE TEAM -->
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END TEAM US -->
@endsection

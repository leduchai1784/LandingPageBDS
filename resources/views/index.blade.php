@extends('layouts.app')

@section('title', 'Trang chủ - LDH Homes Bất động sản')

@section('content')
<!-- START HOME -->
	<section id="home" class="home_bg"
		style="background-image: url('{{ asset('assets/img/bg/home-bg.jpg') }}');  background-size:cover; background-position: center center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12 text-center">
					<div class="hero-text">
						<h2>Giao dịch bất động sản tốt nhất</h2>
						<p>Tìm kiếm và sở hữu những bất động sản mơ ước với mức giá tốt nhất cùng dịch vụ chuyên nghiệp hàng đầu từ chúng tôi.</p>
						<div class="home_btn">
							<a href="{{ url('/about') }}" class="app-btn wow bounceIn page-scroll home_btn_color_one"
								data-wow-delay=".6s">Giới thiệu</a>
							<a href="{{ url('/gallery') }}" class="app-btn wow bounceIn page-scroll home_btn_color_two"
								data-wow-delay=".8s">Dự án nổi bật</a>
						</div>
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END  HOME -->

	<!-- START SEARCH -->
	<div class="search_bar section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_search">
						<select>
							<option value="1">Vị trí</option>
							<option value="2">Hà Nội</option>
							<option value="3">TP. Hồ Chí Minh</option>
							<option value="3">Đà Nẵng</option>
							<option value="3">Nha Trang</option>
							<option value="3">Hải Phòng</option>
							<option value="3">Bình Dương</option>
							<option value="3">Cần Thơ</option>
						</select>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_search">
						<select>
							<option value="1">Danh mục</option>
							<option value="2">Căn hộ chung cư</option>
							<option value="3">Biệt thự liền kề</option>
							<option value="4">Nhà phố thương mại</option>
							<option value="5">Đất nền dự án</option>

						</select>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_search">
						<select>
							<option value="1">Loại bất động sản</option>
							<option value="1">Nhà ở dân dụng</option>
							<option value="1">Bất động sản thương mại</option>
							<option value="1">Đất nền</option>
						</select>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_search">
						<select>
							<option value="1">Trạng thái dự án</option>
							<option value="1">Cần bán</option>
							<option value="1">Cho thuê</option>
						</select>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_search">
						<select>
							<option value="1">Giá cả</option>
							<option value="1">$15000</option>
							<option value="1">$20000</option>
							<option value="1">$25000</option>
							<option value="1">$30000</option>
							<option value="1">$35000</option>
						</select>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_search">
						<select>
							<option value="1">Diện tích</option>
							<option value="1">50</option>
							<option value="1">150</option>
							<option value="1">250</option>
							<option value="1">350</option>
							<option value="1">450</option>
						</select>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_search">
						<select>
							<option value="1">Phòng ngủ</option>
							<option value="1">1</option>
							<option value="1">2</option>
							<option value="1">3</option>
							<option value="1">4</option>
							<option value="1">5</option>
							<option value="1">6</option>
							<option value="1">7</option>
						</select>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_search">
						<select>
							<option value="1">Phòng tắm</option>
							<option value="1">1</option>
							<option value="1">2</option>
							<option value="1">3</option>
							<option value="1">4</option>
						</select>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-12 text-center">
					<div class="search_btn">
						<a href="#" class="btn btn-serach-bg">Tìm kiếm</a>
					</div>
				</div>
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</div>
	<!-- END  SEARCH -->

	<!-- START PROPERTY -->
	<section class="template_property">
		<div class="container">
			<div class="section-title text-center wow zoomIn">
				<h2>Tin rao bán mới nhất</h2>
				<div></div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-12 col-xs-12">
					<div class="single_property">
						<img src="{{ asset('assets/img/property/1.jpg') }}" class="img-fluid" alt="" />
						<div class="single_property_description text-center">
							<span><i class="fa fa-object-group"></i> 900 m²</span>
							<span><i class="fa fa-bed"></i> 4 Phòng ngủ</span>
							<span><i class="fa fa-star-o"></i> 2 Phòng tắm</span>
						</div>
						<div class="single_property_content">
							<h4><a href="#">Căn hộ Lodgeville Road</a></h4>
							<p>Dự án sở hữu vị trí đắc địa, giao thông thuận tiện và đầy đủ tiện ích cao cấp xung quanh.</p>

						</div>
						<div class="single_property_price">
							Đường Lodgeville, Beverly Hills <span>$ 170,000</span>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div><!--- END SINGLE PROPERTY -->
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-12 col-xs-12">
					<div class="single_property">
						<img src="{{ asset('assets/img/property/2.jpg') }}" class="img-fluid" alt="" />
						<div class="single_property_description text-center">
							<span><i class="fa fa-object-group"></i> 900 m²</span>
							<span><i class="fa fa-bed"></i> 4 Phòng ngủ</span>
							<span><i class="fa fa-star-o"></i> 2 Phòng tắm</span>
						</div>
						<div class="single_property_content">
							<h4><a href="#">Nhà phố Rinehart Road</a></h4>
							<p>Không gian sống yên tĩnh, trong lành với thiết kế mở hiện đại, đón ánh sáng tự nhiên.</p>

						</div>
						<div class="single_property_price">
							Đường Rinehart, Beverly Hills <span>$ 170,000</span>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
				</div><!--- END  COL-->
				<div class="col-lg-4 col-sm-12 col-xs-12">
					<div class="single_property">
						<img src="{{ asset('assets/img/property/3.jpg') }}" class="img-fluid" alt="" />
						<div class="single_property_description text-center">
							<span><i class="fa fa-object-group"></i> 900 m²</span>
							<span><i class="fa fa-bed"></i> 4 Phòng ngủ</span>
							<span><i class="fa fa-star-o"></i> 2 Phòng tắm</span>
						</div>
						<div class="single_property_content">
							<h4><a href="#">Biệt thự Brighton Circle</a></h4>
							<p>Biệt thự sân vườn cao cấp, nội thất sang trọng, hồ bơi riêng biệt đẳng cấp.</p>

						</div>
						<div class="single_property_price">
							Vòng xoay Brighton, Beverly Hills <span>$ 170,000</span>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
				</div><!--- END  COL-->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END  PROPERTY -->

	<!-- START PROPERTY -->
	<section class="template_property section-padding">
		<div class="container">
			<div class="section-title  text-center wow zoomIn">
				<h2>Tin cho thuê mới nhất</h2>
				<div></div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-12 col-xs-12">
					<div class="single_property">
						<img src="{{ asset('assets/img/property/4.jpg') }}" class="img-fluid" alt="" />
						<div class="single_property_description text-center">
							<span><i class="fa fa-object-group"></i> 900 m²</span>
							<span><i class="fa fa-bed"></i> 4 Phòng ngủ</span>
							<span><i class="fa fa-star-o"></i> 2 Phòng tắm</span>
						</div>
						<div class="single_property_content">
							<h4><a href="#">Nhà vườn Lynn Ogden</a></h4>
							<p>Sân vườn rộng rãi, thiết kế cổ điển thích hợp cho gia đình nghỉ dưỡng cuối tuần.</p>

						</div>
						<div class="single_property_price">
							Ngõ Lynn Ogden, Beverly Hills <span>$ 170,000</span>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
				</div><!--- END  COL-->
				<div class="col-lg-4 col-sm-12 col-xs-12">
					<div class="single_property">
						<img src="{{ asset('assets/img/property/5.jpg') }}" class="img-fluid" alt="" />
						<div class="single_property_description text-center">
							<span><i class="fa fa-object-group"></i> 900 m²</span>
							<span><i class="fa fa-bed"></i> 4 Phòng ngủ</span>
							<span><i class="fa fa-star-o"></i> 2 Phòng tắm</span>
						</div>
						<div class="single_property_content">
							<h4><a href="#">Căn hộ cao cấp B Street</a></h4>
							<p>Căn hộ tiện nghi ngay trung tâm thành phố, gần trung tâm thương mại và trường học.</p>

						</div>
						<div class="single_property_price">
							2045 Đường B, Beverly Hills <span>$ 170,000</span>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
				</div><!--- END  COL-->
				<div class="col-lg-4 col-sm-12 col-xs-12">
					<div class="single_property">
						<img src="{{ asset('assets/img/property/6.jpg') }}" class="img-fluid" alt="" />
						<div class="single_property_description text-center">
							<span><i class="fa fa-object-group"></i> 900 m²</span>
							<span><i class="fa fa-bed"></i> 4 Phòng ngủ</span>
							<span><i class="fa fa-star-o"></i> 2 Phòng tắm</span>
						</div>
						<div class="single_property_content">
							<h4><a href="#">Biệt thự liền kề Magnolia</a></h4>
							<p>Kiến trúc châu Âu tân cổ điển sang trọng, khu an ninh nghiêm ngặt 24/7.</p>

						</div>
						<div class="single_property_price">
							Phố Magnolia, Beverly Hills <span>$ 170,000</span>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
				</div><!--- END  COL-->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END  PROPERTY -->

	<!-- START PORTFOLIO -->
	<section id="gallery" class="works_area">
		<div class="container">
			<div class="section-title text-center wow zoomIn">
				<h2>Thư viện hình ảnh</h2>
				<div></div>
			</div>
			<div class="col-lg-12 text-center">
				<ul class="portfolio-filters">
					<li class="filter active" data-filter="all">Tất cả</li>
					<li class="filter" data-filter="bedroom">Phòng ngủ</li>
					<li class="filter" data-filter="bathroom">Phòng tắm</li>
					<li class="filter" data-filter="kitchen">Phòng bếp</li>
					<li class="filter" data-filter="garage">Nhà để xe</li>
					<li class="filter" data-filter="basement">Tầng hầm</li>
				</ul>
			</div><!-- END COL -->
			<div class="row portfolio-items-list">
				<div class="col-lg-4 col-sm-4 col-xs-12 mix bathroom kitchen garage">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="{{ asset('assets/img/portfolio/1.jpg') }}" class="img-fluid" alt="" />
							<figcaption>
								<a class="prettyPhoto image_zoom" href="{{ asset('assets/img/portfolio/1.jpg') }}"></a>
								<p><a href="#" data-toggle="modal" data-target="#projectModal">Ngôi nhà mơ ước của bạn</a></p>
							</figcaption>
						</figure>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-4 col-xs-12 mix bedroom garage">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="{{ asset('assets/img/portfolio/2.jpg') }}" class="img-fluid" alt="" />
							<figcaption>
								<a class="prettyPhoto image_zoom" href="{{ asset('assets/img/portfolio/2.jpg') }}"></a>
								<p><a href="#" data-toggle="modal" data-target="#projectModal">Ngôi nhà mơ ước của bạn</a></p>
							</figcaption>
						</figure>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-4 col-xs-12 mix bathroom">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="{{ asset('assets/img/portfolio/3.jpg') }}" class="img-fluid" alt="" />
							<figcaption>
								<a class="prettyPhoto image_zoom" href="{{ asset('assets/img/portfolio/3.jpg') }}"></a>
								<p><a href="#" data-toggle="modal" data-target="#projectModal">Ngôi nhà mơ ước của bạn</a></p>
							</figcaption>
						</figure>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-4 col-xs-12 mix garage kitchen">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="{{ asset('assets/img/portfolio/4.jpg') }}" class="img-fluid" alt="" />
							<figcaption>
								<a class="prettyPhoto image_zoom" href="{{ asset('assets/img/portfolio/4.jpg') }}"></a>
								<p><a href="#" data-toggle="modal" data-target="#projectModal">Ngôi nhà mơ ước của bạn</a></p>
							</figcaption>
						</figure>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-4 col-xs-12 mix bedroom">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="{{ asset('assets/img/portfolio/5.jpg') }}" class="img-fluid" alt="" />
							<figcaption>
								<a class="prettyPhoto image_zoom" href="{{ asset('assets/img/portfolio/5.jpg') }}"></a>
								<p><a href="#" data-toggle="modal" data-target="#projectModal">Ngôi nhà mơ ước của bạn</a></p>
							</figcaption>
						</figure>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-4 col-xs-12 mix bathroom kitchen">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="{{ asset('assets/img/portfolio/6.jpg') }}" class="img-fluid" alt="" />
							<figcaption>
								<a class="prettyPhoto image_zoom" href="{{ asset('assets/img/portfolio/6.jpg') }}"></a>
								<p><a href="#" data-toggle="modal" data-target="#projectModal">Ngôi nhà mơ ước của bạn</a></p>
							</figcaption>
						</figure>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-4 col-xs-12 mix basement garage">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="{{ asset('assets/img/portfolio/7.jpg') }}" class="img-fluid" alt="" />
							<figcaption>
								<a class="prettyPhoto image_zoom" href="{{ asset('assets/img/portfolio/7.jpg') }}"></a>
								<p><a href="#" data-toggle="modal" data-target="#projectModal">Ngôi nhà mơ ước của bạn</a></p>
							</figcaption>
						</figure>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-4 col-xs-12 mix bedroom basement">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="{{ asset('assets/img/portfolio/8.jpg') }}" class="img-fluid" alt="" />
							<figcaption>
								<a class="prettyPhoto image_zoom" href="{{ asset('assets/img/portfolio/8.jpg') }}"></a>
								<p><a href="#" data-toggle="modal" data-target="#projectModal">Ngôi nhà mơ ước của bạn</a></p>
							</figcaption>
						</figure>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-4 col-xs-12 mix bedroom basement">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="{{ asset('assets/img/portfolio/9.jpg') }}" class="img-fluid" alt="" />
							<figcaption>
								<a class="prettyPhoto image_zoom" href="{{ asset('assets/img/portfolio/9.jpg') }}"></a>
								<p><a href="#" data-toggle="modal" data-target="#projectModal">Ngôi nhà mơ ước của bạn</a></p>
							</figcaption>
						</figure>
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END PORTFOLIO -->

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

	<!-- START TESTIMONIAL -->
	<section data-stellar-background-ratio="0.3" class="our_testimonial section-padding"
		style="background-image: url('{{ asset('assets/img/bg/testimonial-bg.jpg') }}');  background-size:cover;background-position:center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-sm-12 col-xs-12 text-center">
					<div class="testimonial1-carousel">
						<div class="single-testimonial">
							<img src="{{ asset('assets/img/testimonial/1.jpg') }}" alt="">
							<h4>Mark Richard</h4>
							<span>Nhà đầu tư</span>
							<p>Tôi rất hài lòng với chất lượng dịch vụ và sự tận tâm của đội ngũ LDH Homes. Họ đã giúp tôi tìm thấy căn hộ lý tưởng cho gia đình một cách nhanh chóng và an tâm.</p>
						</div>
						<div class="single-testimonial">
							<img src="{{ asset('assets/img/testimonial/2.jpg') }}" alt="">
							<h4>David Beckham</h4>
							<span>Khách hàng mua nhà</span>
							<p>Dịch vụ tư vấn chuyên nghiệp, thông tin dự án cực kỳ chính xác. LDH Homes đã giúp tôi tối ưu hóa dòng tiền khi đầu tư vào biệt thự nghỉ dưỡng cao cấp.</p>
						</div>
						<div class="single-testimonial">
							<img src="{{ asset('assets/img/testimonial/3.jpg') }}" alt="">
							<h4>John Terry</h4>
							<span>Doanh nhân</span>
							<p>Thủ tục pháp lý minh bạch và nhanh chóng là điểm tôi ấn tượng nhất ở LDH Homes. Chắc chắn tôi sẽ tiếp tục hợp tác cùng họ trong các dự án bất động sản tiếp theo.</p>
						</div>
					</div>
				</div><!-- END COL -->
			</div><!--END  ROW  -->
		</div><!-- END CONTAINER  -->
	</section>
	<!-- END TESTIMONIAL -->

	<!-- START NEWSLETTER -->
	<section class="newsletter section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="partner  wow fadeInRight">
						<a href="#"><img src="{{ asset('assets/img/partner/1.png') }}" alt="image"></a>
						<a href="#"><img src="{{ asset('assets/img/partner/2.png') }}" alt="image"></a>
						<a href="#"><img src="{{ asset('assets/img/partner/3.png') }}" alt="image"></a>
						<a href="#"><img src="{{ asset('assets/img/partner/4.png') }}" alt="image"></a>
						<a href="#"><img src="{{ asset('assets/img/partner/5.png') }}" alt="image"></a>
						<a href="#"><img src="{{ asset('assets/img/partner/1.png') }}" alt="image"></a>
						<a href="#"><img src="{{ asset('assets/img/partner/2.png') }}" alt="image"></a>
						<a href="#"><img src="{{ asset('assets/img/partner/3.png') }}" alt="image"></a>
						<a href="#"><img src="{{ asset('assets/img/partner/4.png') }}" alt="image"></a>
						<a href="#"><img src="{{ asset('assets/img/partner/5.png') }}" alt="image"></a>
					</div>
				</div><!-- END COL  -->
			</div><!--END  ROW  -->
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-sm-12 col-xs-12 text-center">
					<div class="signup_form">
						<h3 class="section-title-white">Đăng ký để cập nhật thông tin mới nhất</h3>
						<!-- Replace the form action in the line below with your MailChimp embed action! -->
						<form novalidate="" class="validate" name="mc-embedded-subscribe-form" method="post" action="#">
							<input type="email" placeholder="Nhập địa chỉ Email của bạn" id="mce-email" class="form-control"
								name="EMAIL">
							<span><button class="btn btn-detault btn-light-bg" name="subscribe"
									type="submit">Đăng ký</button></span>
							<div id="mce-responses">
								<div style="display:none" id="mce-error-response" class="response"></div>
								<div style="display:none" id="mce-success-response" class="response"></div>
							</div>
						</form>
					</div>
				</div><!-- END COL  -->
			</div><!-- END ROW  -->
		</div><!-- END CONTAINER -->
	</section>
	<!-- END NEWSLETTER -->

	<!-- START BLOG -->
	<section id="blog" class="fresh-news section-padding">
		<div class="container">
			<div class="section-title text-center">
				<h2>Tin tức mới nhất</h2>
				<div></div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-4 col-xs-12">
					<div class="single_blog">
						<div class="blog_img">
							<a href="{{ url('/blog') }}"><img src="{{ asset('assets/img/blog/blog-1.jpg') }}" class="img-fluid"
									alt="image" /></a>
							<div class="post-date">
								<span class="date">15</span>
								<span class="month">Tháng 9</span>
							</div>
						</div>
						<div class="blog_content">
							<h3><a href="{{ url('/blog') }}">Đội ngũ tư vấn bất động sản chuyên nghiệp và uy tín</a></h3>
							<p>Tìm hiểu cách chọn đơn vị môi giới phù hợp giúp bạn an tâm giao dịch và tối ưu hóa dòng tiền đầu tư.</p>
						</div>
					</div>
				</div><!-- END COL-->
				<div class="col-lg-4 col-sm-4 col-xs-12">
					<div class="single_blog">
						<div class="blog_img">
							<a href="{{ url('/blog') }}"><img src="{{ asset('assets/img/blog/blog-2.jpg') }}" class="img-fluid"
									alt="image" /></a>
							<div class="post-date">
								<span class="date">16</span>
								<span class="month">Tháng 9</span>
							</div>
						</div>
						<div class="blog_content">
							<h3><a href="{{ url('/blog') }}">Xu hướng căn hộ xanh thân thiện với môi trường năm 2026</a></h3>
							<p>Những tiêu chí lựa chọn không gian sống xanh giúp cải thiện sức khỏe và tăng cường chất lượng sống gia đình.</p>
						</div>
					</div>
				</div><!-- END COL-->
				<div class="col-lg-4 col-sm-4 col-xs-12">
					<div class="single_blog">
						<div class="blog_img">
							<a href="{{ url('/blog') }}"><img src="{{ asset('assets/img/blog/blog-3.jpg') }}" class="img-fluid"
									alt="image" /></a>
							<div class="post-date">
								<span class="date">17</span>
								<span class="month">Tháng 9</span>
							</div>
						</div>
						<div class="blog_content">
							<h3><a href="{{ url('/blog') }}">Kinh nghiệm xin cấp sổ hồng cho nhà đất mua mới</a></h3>
							<p>Cập nhật quy định pháp lý mới nhất về thủ tục cấp giấy chứng nhận quyền sở hữu nhà ở và đất ở.</p>
						</div>
					</div>
				</div><!-- END COL-->
			</div><!-- END ROW -->
		</div><!-- END CONTAINER -->
	</section>
	<!-- END BLOG -->
@endsection

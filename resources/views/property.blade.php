@extends('layouts.app')

@section('title', 'Danh sách dự án - LDH Homes')

@section('content')
<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 col-xs-12 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
					data-wow-offset="0">
					<h1>Dự án bất động sản</h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END SECTION TOP -->

	<!-- START PROPERTY -->
	<section class="template_property">
		<div class="container">
			<div class="section-title text-center wow zoomIn">
				<h2>Tin rao bán mới nhất</h2>
				<div></div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
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
					</div>
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-12 col-xs-12">
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
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-12 col-xs-12">
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
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-12 col-xs-12">
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
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-12 col-xs-12">
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
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-12 col-xs-12">
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
				</div><!--- END COL -->
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
				<div class="col-md-4 col-sm-12 col-xs-12">
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
					</div>
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-12 col-xs-12">
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
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-12 col-xs-12">
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
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-12 col-xs-12">
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
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-12 col-xs-12">
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
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-12 col-xs-12">
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
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END  PROPERTY -->
@endsection

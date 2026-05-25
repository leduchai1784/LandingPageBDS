@extends('layouts.app')

@section('title', 'Chi tiết dự án - LDH Homes')

@section('content')
<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 col-xs-12 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
					data-wow-offset="0">
					<h1>Chi tiết dự án</h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END SECTION TOP -->

	<!-- START SINGLE PROPERTY DETAILS -->
	<section class="property_single_details section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="property_single_details_slide">
						<img src="{{ asset('assets/img/2.jpg') }}" class="img-fluid" alt="About-Slide">
					</div>
					<div class="property_single_details_price">
						<h1>Căn hộ cao cấp B Street</h1>
						<h4>$235,254</h4>
						<p>2045 Đường B, Beverly Hills</p>
						<ul>
							<li><i class="fa fa-check"></i> 4 Phòng ngủ</li>
							<li><i class="fa fa-check"></i> 1 Nhà để xe</li>
							<li><i class="fa fa-check"></i> 960 m²</li>
						</ul>
					</div>
					<div class="property_single_details_description">
						<h4>Mô tả dự án</h4>
						<p>Căn hộ cao cấp tọa lạc tại vị trí vàng trung tâm thành phố. Thiết kế sang trọng, tối ưu hóa công năng sử dụng với không gian thoáng mát đón nắng và gió tự nhiên. Hệ thống an ninh bảo mật 24/7 mang lại sự an tâm tuyệt đối cho gia đình bạn.</p>
					</div>
					<div class="property_info">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="single_property_list">
									<h4>Tiện ích dự án</h4>
									<ul class="single_property_list_mr">
										<li><i class="fa fa-check"></i> Hệ intercom</li>
										<li><i class="fa fa-check"></i> Máy sấy tóc</li>
										<li><i class="fa fa-check"></i> Giường trẻ em</li>
										<li><i class="fa fa-check"></i> Máy rửa bát</li>
										<li><i class="fa fa-check"></i> Sàn gỗ cao cấp</li>
										<li><i class="fa fa-check"></i> Bàn là quần áo</li>
									</ul>
									<ul class="single_property_list_mr">
										<li><i class="fa fa-check"></i> Điều hòa nhiệt độ</li>
										<li><i class="fa fa-check"></i> Truyền hình cáp</li>
										<li><i class="fa fa-check"></i> Lò nướng BBQ</li>
										<li><i class="fa fa-check"></i> Máy ép trái cây</li>
										<li><i class="fa fa-check"></i> Bể bơi vô cực</li>
										<li><i class="fa fa-check"></i> Máy nướng bánh mì</li>
									</ul>
									<ul>
										<li><i class="fa fa-check"></i> Phòng tập Gym</li>
										<li><i class="fa fa-check"></i> Khu vui chơi trẻ em</li>
										<li><i class="fa fa-check"></i> Hồ cảnh quan</li>
										<li><i class="fa fa-check"></i> Thẻ từ thang máy</li>
										<li><i class="fa fa-check"></i> Hệ thống báo cháy</li>
										<li><i class="fa fa-check"></i> Internet tốc độ cao</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="property_map">
						<h4>Vị trí trên bản đồ</h4>
						<div class="map-pro">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.957183635167!2d-74.00402768559431!3d40.71895904512855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598a1316e7a7%3A0x47bb20eb6074b3f0!2sNew%20Work%20City%20-%20(CLOSED)!5e0!3m2!1sbn!2sbd!4v1600305497356!5m2!1sbn!2sbd"
								style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
					<div class="single_similar_property">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="single_property">
									<img src="{{ asset('assets/img/property/1.jpg') }}" class="img-fluid" alt="" />
									<div class="single_property_description text-center">
										<span><i class="fa fa-object-group"></i> 900 m²</span>
										<span><i class="fa fa-bed"></i> 4 Phòng ngủ</span>
										<span><i class="fa fa-star-o"></i> 2 Phòng tắm</span>
									</div>
									<div class="single_property_content">
										<h4><a href="#">Căn hộ cao cấp B Street</a></h4>
										<p>Thiết kế hiện đại, đầy đủ tiện nghi, vị trí đắc địa ngay trung tâm thành phố.</p>

									</div>
									<div class="single_property_price">
										Đường B, Beverly Hills <span>$ 170,000</span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--- END SINGLE PROPERTY -->
							</div><!--- END COL -->
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="single_property">
									<img src="{{ asset('assets/img/property/2.jpg') }}" class="img-fluid" alt="" />
									<div class="single_property_description text-center">
										<span><i class="fa fa-object-group"></i> 900 m²</span>
										<span><i class="fa fa-bed"></i> 4 Phòng ngủ</span>
										<span><i class="fa fa-star-o"></i> 2 Phòng tắm</span>
									</div>
									<div class="single_property_content">
										<h4><a href="#">Nhà vườn Lynn Ogden</a></h4>
										<p>Không gian sân vườn thoáng mát rộng rãi thích hợp cho nghỉ dưỡng gia đình.</p>

									</div>
									<div class="single_property_price">
										Ngõ Lynn Ogden, Beverly Hills <span>$ 170,000</span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--- END SINGLE PROPERTY -->
							</div><!--- END COL -->
						</div>
					</div>
				</div><!--- END COL -->
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="single_property_form">
						<h4>Yêu cầu tư vấn</h4>
						<form class="form" name="enq" method="post" action="{{ url('/contact') }}"
							onsubmit="return validation();">
							@csrf
							<div class="row">
								<div class="form-group col-md-12">
									<input type="text" name="name" class="form-control" id="first-name"
										placeholder="Họ và tên" required="required">
								</div>
								<div class="form-group col-md-12">
									<input type="email" name="email" class="form-control" id="email" placeholder="Địa chỉ Email"
										required="required">
								</div>
								<div class="form-group col-md-12">
									<input type="text" name="phone" class="form-control" id="phone" placeholder="Số điện thoại"
										required="required">
								</div>
								<div class="form-group col-md-12 mbnone">
									<textarea rows="6" name="message" class="form-control" id="description"
										placeholder="Nội dung tin nhắn" required="required"></textarea>
								</div>
								<div class="col-md-12">
									<div class="actions">
										<input type="submit" value="Gửi yêu cầu" name="submit" id="submitButton"
											class="btn btn-lg btn-contact-bg" title="Gửi đi Nội dung tin nhắn!" />
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="single_property_form_agent">
						<div class="single_property_form_agent_profile">
							<img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="" />
							<h4><i class="fa fa-phone"></i> +88 123 123 123</h4>
							<h4><a href="#">info@example.com</a></h4>
						</div>
						<div class="single_property_form_agent_profile">
							<img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="" />
							<h4><i class="fa fa-phone"></i> +88 123 123 123</h4>
							<h4><a href="#">info@example.com</a></h4>
						</div>
					</div>
				</div><!--- END COL -->
			</div>
		</div>
	</section>
	<!-- START SINGLE PROPERTY DETAILS -->
@endsection

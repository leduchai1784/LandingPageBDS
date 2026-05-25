@extends('layouts.app')

@section('title', 'Thông tin môi giới - LDH Homes')

@section('content')
<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 col-xs-12 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
					data-wow-offset="0">
					<h1>Chi tiết môi giới</h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END SECTION TOP -->

	<!-- START AGENT PROFILE -->
	<section class="template_agent">
		<div class="container">
			<div class="row single_agent">
				<div class="col-lg-3 col-sm-3 col-xs-12">
					<div class="single_agent_image">
						<img src="{{ asset('assets/img/team/1.png') }}" class="img-fluid" alt="" />
					</div>
				</div><!--- END COL -->
				<div class="col-lg-5 col-sm-5 col-xs-12">
					<div class="single_agent_content">
						<h4>Thelma Banker</h4>
						<h5>Nhân viên tư vấn bất động sản</h5>
						<h6>Nhiều năm kinh nghiệm trong lĩnh vực bất động sản căn hộ và biệt thự cao cấp. Luôn tận tụy, hỗ trợ khách hàng hoàn thành thủ tục mua bán nhanh gọn và chính xác nhất.</h6>
						<p><i class="fa fa-envelope-o"></i>yourmail@gmail.com</p>
						<p><i class="fa fa-phone"></i>(+123) 123 123 123</p>
						<p><i class="fa fa-plane"></i>www.yourdomainname.com</p>
						<p><i class="fa fa-skype"></i>skype.address</p>
					</div>
					<div class="agent_social">
						<ul class="list-inline">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-instagram"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-4 col-xs-12">
					<div class="agent_contact">
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
										<input type="submit" value="Gửi tin nhắn" name="submit" id="submitButton"
											class="btn btn-lg btn-contact-bg" title="Gửi đi Nội dung tin nhắn!" />
									</div>
								</div>
							</div>
						</form>
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END AGENT PROFILE -->
@endsection

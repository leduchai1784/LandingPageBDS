@extends('layouts.app')

@section('title', 'Hồ sơ môi giới - LDH Homes')

@section('content')
<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 col-xs-12 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
					data-wow-offset="0">
					<h1>Hồ sơ môi giới</h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END SECTION TOP -->

	<!-- START AGENT PROFILE -->
	<section class="template_agent">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
					<div class="single_agent">
						<div class="single_agent_image">
							<img src="{{ asset('assets/img/team/1.png') }}" class="img-fluid" alt="" />
						</div>
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
					</div><!--- END SINGLE ITEM -->
					<div class="single_agent">
						<div class="single_agent_image">
							<img src="{{ asset('assets/img/team/2.png') }}" class="img-fluid" alt="" />
						</div>
						<div class="single_agent_content">
							<h4>Kallu Mastan</h4>
							<h5>Chuyên gia phong thủy & Bất động sản</h5>
							<h6>Hơn 10 năm kinh nghiệm tư vấn chọn hướng nhà, thiết kế hợp phong thủy cho các biệt thự lớn. Mang lại sự an tâm, may mắn và thịnh vượng cho mọi gia đình.</h6>
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
					</div><!--- END SINGLE ITEM -->
					<div class="single_agent">
						<div class="single_agent_image">
							<img src="{{ asset('assets/img/team/3.png') }}" class="img-fluid" alt="" />
						</div>
						<div class="single_agent_content">
							<h4>Keno Sha</h4>
							<h5>Trưởng phòng kinh doanh</h5>
							<h6>Chuyên gia phân tích thị trường, định giá tài sản và tư vấn giải pháp đầu tư bất động sản sinh lời cao. Cam kết mang lại lợi ích tối đa cho các nhà đầu tư.</h6>
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
					</div><!--- END SINGLE ITEM -->
					<div class="single_agent">
						<div class="single_agent_image">
							<img src="{{ asset('assets/img/team/4.png') }}" class="img-fluid" alt="" />
						</div>
						<div class="single_agent_content">
							<h4>Digbaji Kha</h4>
							<h5>Hỗ trợ pháp lý dự án</h5>
							<h6>Đồng hành cùng khách hàng trong việc thẩm định quy hoạch, chuẩn bị giấy tờ, hợp đồng mua bán và chuyển nhượng quyền sử dụng đất. An toàn - Bảo mật - Chuyên nghiệp.</h6>
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
					</div><!--- END SINGLE ITEM -->
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END AGENT PROFILE -->
@endsection

@extends('layouts.app')

@section('title', 'Tin tức - LDH Homes')

@section('content')
<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 col-xs-12 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
					data-wow-offset="0">
					<h1>Danh sách tin tức</h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END SECTION TOP -->

	<!-- START BLOG -->
	<section class="blog-page section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-sm-12 col-xs-12">
					<div class="single_blog_page">
						<a href="{{ url('/blog') }}"><img src="{{ asset('assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt="image" /></a>
						<h2><a href="{{ url('/blog-post') }}">Xu hướng thiết kế căn hộ thông minh và tối giản năm 2026</a></h2>
						<span><a href="#">Để lại bình luận</a></span> <span><a href="#"> Thiết kế nội thất</a> </span>
						<span> Bởi <a href="#">LDH Homes</a> </span>
						<p>Căn hộ thông minh ngày càng trở nên phổ biến nhờ khả năng tiết kiệm năng lượng và mang lại sự tiện nghi vượt trội cho chủ sở hữu. Cùng khám phá các giải pháp tích hợp công nghệ hiện đại vào không gian sống của bạn.</p>
						<a class="single_blog_page_btn" href="{{ url('/blog-post') }}">Đọc tiếp</a>
					</div>
					<div class="single_blog_page">
						<a href="{{ url('/blog') }}"><img src="{{ asset('assets/img/blog/blog-2.jpg') }}" class="img-fluid" alt="image" /></a>
						<h2><a href="{{ url('/blog-post') }}">Kinh nghiệm mua nhà trả góp không gặp rủi ro tài chính</a></h2>
						<span><a href="#">Để lại bình luận</a></span> <span><a href="#"> Tài chính bất động sản</a> </span>
						<span> Bởi <a href="#">LDH Homes</a> </span>
						<p>Mua nhà trả góp là giải pháp tối ưu cho gia đình trẻ, tuy nhiên cần nắm vững quy tắc cân đối thu nhập và chi phí để tránh áp lực lãi suất ngân hàng vượt quá khả năng chi trả.</p>
						<a class="single_blog_page_btn" href="{{ url('/blog-post') }}">Đọc tiếp</a>
					</div>
					<div class="single_blog_page">
						<a href="{{ url('/blog') }}"><img src="{{ asset('assets/img/blog/blog-3.jpg') }}" class="img-fluid" alt="image" /></a>
						<h2><a href="{{ url('/blog-post') }}">Tầm quan trọng của yếu tố phong thủy khi chọn mua đất nền</a></h2>
						<span><a href="#">Để lại bình luận</a></span> <span><a href="#"> Phong thủy nhà ở</a> </span>
						<span> Bởi <a href="#">LDH Homes</a> </span>
						<p>Yếu tố thế đất, hướng gió và mạch nước ngầm ảnh hưởng rất lớn đến vượng khí và sức khỏe của các thành viên trong gia đình khi định cư lâu dài. Hãy tìm hiểu các nguyên tắc cơ bản trước khi xuống tiền.</p>
						<a class="single_blog_page_btn" href="{{ url('/blog-post') }}">Đọc tiếp</a>
					</div>
					<!--- START PAGINATION -->
					<div id="pagination">
						<nav>
							<ul class="pagination blog_pagination">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
					</div><!--- END PAGINATION -->
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-12 col-xs-12">
					<div class="blog_search">
						<input type="text" class="form-control" placeholder="Tìm kiếm tin tức & Nhấn Enter">
					</div>
					<div class="latest_blog">
						<h4 class="blog_sidebar_title">Đọc nhiều nhất</h4>
						<div class="single_latest_blog">
							<a href="#">
								<h4>Lãi suất vay mua nhà giảm mạnh trong quý II/2026</h4>
							</a>
						</div>
						<div class="single_latest_blog">
							<a href="#">
								<h4>Top 5 căn hộ có view sông đẹp nhất khu vực phía Đông</h4>
							</a>
						</div>
						<div class="single_latest_blog">
							<a href="#">
								<h4>Lý do nên đầu tư đất nền vùng ven ở thời điểm hiện tại</h4>
							</a>
						</div>
						<div class="single_latest_blog">
							<a href="#">
								<h4>Tiêu chí đánh giá một dự án căn hộ xanh tiêu chuẩn quốc tế</h4>
							</a>
						</div>
					</div>
					<div class="categories">
						<h4 class="blog_sidebar_title">Danh mục</h4>
						<ul>
							<li><a href="#"><i class="ti-arrow-right"></i> Nhiếp ảnh kiến trúc</a></li>
							<li><a href="#"><i class="ti-arrow-right"></i> Thị trường bất động sản</a></li>
							<li><a href="#"><i class="ti-arrow-right"></i> Thiết kế cảnh quan</a></li>
							<li><a href="#"><i class="ti-arrow-right"></i> Nội thất & Kiến trúc</a></li>
							<li><a href="#"><i class="ti-arrow-right"></i> Đầu tư bất động sản</a></li>
							<li><a href="#"><i class="ti-arrow-right"></i> Thủ tục pháp lý dự án</a></li>
						</ul>
					</div>
					<div class="advertisement_post">
						<h4 class="blog_sidebar_title">Quảng cáo</h4>
						<a href="#"><img src="{{ asset('assets/img/blog/banner_3.jpg') }}" class="img-responsive" alt="" /></a>
					</div>
					<div class="video_post">
						<h4 class="blog_sidebar_title">Video giới thiệu</h4>
						<iframe src="https://player.vimeo.com/video/62026718"></iframe>
					</div>
					<div class="tag">
						<h4 class="blog_sidebar_title">Thẻ từ khóa</h4>
						<a href="#">Thiết kế</a>
						<a href="#">Phát triển</a>
						<a href="#">Pháp lý</a>
						<a href="#">Nhà đất</a>
						<a href="#">Kiến trúc</a>
						<a href="#">Cẩm nang</a>
						<a href="#">Dự án</a>
						<a href="#">Căn hộ xanh</a>
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END BLOG -->
@endsection

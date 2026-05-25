@extends('layouts.app')

@section('title', 'Chi tiết tin tức - LDH Homes')

@section('content')
<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 col-xs-12 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
					data-wow-offset="0">
					<h1>Chi tiết tin tức</h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END SECTION TOP -->

	<section class="blog_post section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="blog_post_left">
						<div class="home_blog_img">
							<img src="{{ asset('assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt="" />
						</div>
						<div class="home_blog blog-post-blog">
							<div class="single_blog_content">
								<p>Thiết kế căn hộ thông minh (Smart home) và tối giản (Minimalism) đang là hai phong cách hàng đầu được ưa chuộng. Không chỉ giúp tối ưu hóa diện tích sử dụng đối với các căn hộ vừa và nhỏ, phong cách này còn hướng con người tới sự cân bằng, thư thái trong tâm hồn sau những giờ làm việc mệt mỏi.</p>
								<p>Bằng cách sử dụng các trang thiết bị nội thất đa năng, tích hợp cảm biến thông minh và điều khiển từ xa qua smartphone, gia chủ sẽ có trải nghiệm sống tiện nghi nhất mà vẫn giữ được sự tinh gọn cho căn hộ.</p>
							</div>
						</div>
					</div>
					<div class="comments_part">
						<h3 class="blog_head_title">Bình luận</h3>
						<div class="single_comment">
							<img src="{{ asset('assets/img/blog/c1.jpg') }}" alt="" />
							<h4>Masum Billah</h4>
							<p>Bài viết chia sẻ rất hữu ích! Tôi đang dự định thiết kế lại căn hộ chung cư 70m2 của mình theo hướng tối giản và thông minh này. Mong nhận thêm nhiều tư vấn từ LDH Homes.</p>
						</div><!--- END SINGLE COMMENT -->
					</div><!--- END COMMENTS PART -->
					<div class="comment_form">
						<h3 class="blog_head_title">Thêm bình luận</h3>
						<form class="form" name="enq" method="post" action="{{ url('/contact') }}"
							onsubmit="return validation();">
							@csrf
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" name="name" class="form-control" id="first-name"
										placeholder="Họ và tên" required="required">
								</div>
								<div class="form-group col-md-6">
									<input type="email" name="email" class="form-control" id="email" placeholder="Địa chỉ Email"
										required="required">
								</div>
								<div class="form-group col-md-12 mbnone">
									<textarea rows="6" name="message" class="form-control" id="description"
										placeholder="Nội dung tin nhắn" required="required"></textarea>
								</div>
								<div class="col-md-12">
									<div class="actions">
										<input type="submit" value="Gửi bình luận" name="submit" id="submitButton"
											class="btn btn-lg btn-blog-bg" title="Gửi đi Nội dung tin nhắn!" />
									</div>
								</div>
							</div>
						</form>
					</div><!--- END COMMENT FORM -->
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="search wow fadeInRight">
						<input type="text" class="form-control" placeholder="Nhập từ khóa &amp; Tìm kiếm...">
					</div>
					<div class="categories wow fadeInRight">
						<h4 class="blog_sidebar_title">Danh mục</h4>
						<ul>
							<li><a href="#"><i class="fa fa-caret-right"></i> Căn hộ</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i> Căn hộ dịch vụ</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i> Nhà đơn lập</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i> Căn hộ Studio</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i> Biệt thự</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i> Thủ tục pháp lý</a></li>
						</ul>
					</div>
					<div class="video_post wow fadeInRight">
						<h4 class="blog_sidebar_title">Video giới thiệu</h4>
						<iframe src="https://player.vimeo.com/video/62026718"></iframe>
					</div>
					<div class="tag">
						<h4 class="blog_sidebar_title">Từ khóa phổ biến</h4>
						<a href="#">Căn hộ</a>
						<a href="#">Căn hộ dịch vụ</a>
						<a href="#">Studio</a>
						<a href="#">Dự án</a>
						<a href="#">Biệt thự</a>
						<a href="#">Pháp lý</a>
					</div>
				</div><!--- END COL -->
			</div>
		</div>
	</section>
@endsection

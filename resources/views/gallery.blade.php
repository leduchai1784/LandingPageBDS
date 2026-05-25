@extends('layouts.app')

@section('title', 'Thư viện ảnh - LDH Homes')

@section('content')
<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 col-xs-12 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
					data-wow-offset="0">
					<h1>Thư viện</h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END SECTION TOP -->

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
@endsection

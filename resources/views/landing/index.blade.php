@extends('auth-layouts.auth-app')
@section('auth-content')
	<div class="page-content bg-white">

		<!--Swiper Banner Start -->
		<div class="main-slider style-1">
			<div class="main-swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide bg-blue" style="background-image: url(images/background/waveelement.png);">
						<div class="container">
							<div class="banner-content">
								<div class="row">
									<div class="col-md-6">
										<div class="swiper-content">
											<div class="content-info">
												<h6 class="sub-title" data-swiper-parallax="-10">BEST MANAGEMENT </h6>
												<h1 class="title mb-0" data-swiper-parallax="-20">Think and Grow Rich</h1>
												<ul class="dz-tags" data-swiper-parallax="-30">
													<li><a href="javascript:void(0);">Napoleon Hill</a></li>
													<li><a href="javascript:void(0);">Business & Strategy</a></li>
												</ul>
												<p class="text mb-0" data-swiper-parallax="-40">Bookharbor is a dynamic online marketplace that revolutionizes the way book lovers buy and sell their cherished reads. With a vast collection spanning various genres, authors, and editions, BookStocks offers a treasure trove of literary delights waiting to be explored.</p>
												<div class="price" data-swiper-parallax="-50">
													<span class="price-num">$450</span>
													<del>$350</del>
													<span class="badge badge-danger">10% OFF</span>
												</div>
												<div class="content-btn" data-swiper-parallax="-60">
													<a class="btn btn-primary btnhover" href="{{route('ourproducts')}}">Buy Now</a>
													<a class="btn border btnhover ms-4 text-white" href="{{route('ourproducts')}}">See Details</a>
												</div>
											</div>
											<!-- <div class="partner">
												<p>Our partner</p>
												<div class="brand-logo">
													<img src="images/partner/partner-1.png" alt="client">
													<img  class="mid-logo" src="images/partner/partner-2.png" alt="client">
													<img src="images/partner/partner-3.png" alt="client">
												</div>
											</div> -->
										</div>
									</div>
									<div class="col-md-6">
										<div class="banner-media" data-swiper-parallax="-100">
											<img src="images/banner/banner-media.png" alt="banner-media">
										</div>
										<img class="pattern" src="images/Group.png" data-swiper-parallax="-100" alt="dots">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide bg-blue" style="background-image: url(images/background/waveelement.png);">
						<div class="container">
							<div class="banner-content">
								<div class="row">
									<div class="col-md-6">
										<div class="swiper-content">
											<div class="content-info">
												<h6 class="sub-title" data-swiper-parallax="-10">BEST SELLER</h6>
												<h1 class="title mb-0" data-swiper-parallax="-20">Pushing Clouds</h1>
												<ul class="dz-tags" data-swiper-parallax="-30">
													<li><a href="javascript:void(0);">Napoleon Hill</a></li>
													<li><a href="javascript:void(0);">Business & Strategy</a></li>
												</ul>
												<p class="text mb-0" data-swiper-parallax="-40">Bookharbor empowers both sellers and buyers by providing a convenient and secure platform to trade books. Sellers can easily list their books for sale, set competitive prices, and reach a wide audience of potential buyers. </p>
												<div class="price" data-swiper-parallax="-50">
													<span class="price-num">$550</span>
													<del>$450</del>
													<span class="badge badge-danger">20% OFF</span>
												</div>
												<div class="content-btn" data-swiper-parallax="-50">
													<a class="btn btn-primary btnhover" href="{{route('ourproducts')}}">Buy Now</a>
													<a class="btn border btnhover ms-4 text-white" href="{{route('ourproducts')}}">See Details</a>
												</div>
											</div>
											<!-- <div class="partner">
												<p>Our partner</p>
												<div class="brand-logo">
													<img src="images/partner/partner-1.png" alt="client">
													<img  class="mid-logo" src="images/partner/partner-2.png" alt="client">
													<img src="images/partner/partner-3.png" alt="client">
												</div>
											</div> -->
										</div>
									</div>
									<div class="col-md-6">
										<div class="banner-media" data-swiper-parallax="-100">
											<img src="images/banner/banner-media2.png" alt="banner-media1">
										</div>
										<img class="pattern" src="images/Group.png" data-swiper-parallax="-100" alt="dots">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container swiper-pagination-wrapper">
					<div class="swiper-pagination-five"></div>
				</div>
			</div>
			<div class="swiper main-swiper-thumb">
				<div class="swiper-wrapper">
					@foreach ($product_globe as $product)
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="storage/book_images/{{$product->book_image}}" alt="book">
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">{{$product->book_title}}</h5>
								<div class="dz-meta">
									<ul>
										<li>by {{$product->author_name}}</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">${{$product->book_selling_price}}</span>
									</div>
									<div class="rate">
										<i class="fas fa-star text-yellow"></i>
										<i class="fas fa-star text-yellow"></i>
										<i class="fas fa-star text-yellow"></i>
										<i class="fas fa-star text-yellow"></i>
										<i class="fas fa-star text-yellow"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!--Swiper Banner End-->

		<section class="content-inner-1 overlay-white-middle">
			<div class="container">
				<div class="row about-style1 align-items-center">
					<div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.1s">
						<div class="row sp10 about-thumb">
							<div class="col-sm-6 aos-item ">
								<div class="split-box">
									<div>
										<img class="m-b30" src="images/about/about1.jpg" alt="/">
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="split-box ">
									<div>
										<img class="m-b20 aos-item" src="images/about/about2.jpg" alt="/">
									</div>
								</div>
								<div class="exp-bx aos-item">
									<div class="exp-head">
										<div class="counter-num">
											<h2><span class="counter">{{ $userCount ?? 0 }}</span><small>+</small></h2>
										</div>
										<h6 class="title">Users</h6>
									</div>
									<div class="exp-info">
										<ul class="list-check primary">
											<li>Comics & Graphics</li>
											<li>Biography</li>
											<li>Literary Collections</li>
											<li>Children Fiction</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
						<div class="about-content px-lg-4">
							<div class="section-head style-1">
								<h2 class="title">Bookharbor Is a Best Platform For Passionate Readers & Learners.</h2>
								<p>We, Here at Bookharbor provide a platform for the users who can sell their books at a reasonable price and potential buyers can buy the books at the reasonable rate.</p>
							</div>
							<a href="{{route ('login')}}" class="btn btn-primary shadow-primary btnhover">Start Listing</a>
						</div>
					</div>
				</div>
		</section>

		<!-- icon-box1 -->
		<section class="content-inner-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="icon-bx-wraper style-1 m-b20 text-center">
							<div class="icon-bx-sm m-b10">
							<i class="fas fa-truck text-secondary"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Quick Delivery</h5>
								<p>Books Purchased from our store will provide quick delivery.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="icon-bx-wraper style-1 m-b20 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="fas fa-shield text-secondary text-secondary"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Secure Payment</h5>
								<p>We provide secure & hassle free payments options to the users.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="icon-bx-wraper style-1 m-b20 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="fas fa-thumbs-up text-secondary"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Trusted Sellers</h5>
								<p>1000+ Trusted Customers in the platform provide you various categories of books.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="icon-bx-wraper style-1 m-b20 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="fas fa-star text-secondary"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Return Guarantee</h5>
								<p>Books purchased from our store provide you 100% return guarantee.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- icon-box1 End-->

		<!-- Book Sale -->
        @if (!$products_offer->isEmpty())
		<section class="content-inner-1">
			<div class="container">
				<div class="section-head book-align">
					<h2 class="title mb-0">Books on Sale</h2>
					<div class="pagination-align style-1">
						<div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
						<div class="swiper-pagination-two"></div>
						<div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
					</div>
				</div>
				<div class="swiper-container books-wrapper-3 swiper-four">
					<div class="swiper-wrapper">
						@foreach ($products_offer as $product)
						<div class="swiper-slide">
							<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<img src="storage/book_images/{{$product->book_image}}" alt="book">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{route('book_details',$product->book_title)}}">{{$product->book_title}}</a></h5>
									<ul class="dz-tags">
										<li><a href="{{route('ourproducts',$product->category->slug)}}">{{$product->category->book_category}}</a></li>
									</ul>
									<div class="book-footer">
										<div class="rate">
											<i class="fas fa-star"></i> 6.8
										</div>
										<div class="price">
											<span class="price-num">${{$product->book_selling_price}}</span>
											<del>${{$product->book_original_price}}</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<!-- Book Sale End -->
        @endif

        @if (!$product_featured->isEmpty())
		<!-- Feature Product -->
		<section class="content-inner-1 bg-grey reccomend">
			<div class="container">
				<div class="section-head text-center">
					<div class="circle style-1"></div>
					<h2 class="title">Featured Product</h2>
					<p>Discover the power of storytelling as you explore our captivating catalog of bestsellers and hidden gems. </p>
				</div>
			</div>
			<div class="container">
				<div class="swiper-container books-wrapper-2 swiper-three">
					<div class="swiper-wrapper">
						@foreach ($product_featured as $product)
						<div class="swiper-slide">
							<div class="books-card style-2">
								<div class="dz-media">
									<img src="/storage/book_images/{{$product->book_image}}" alt="book">
								</div>
								<div class="dz-content">
									<h6 class="sub-title">BEST SELLER</h6>
									<h2 class="title">{{$product->book_title}}</h2>
									<ul class="dz-tags">
										<li>{{$product->author_name}}</li>
										<li>{{$product->category->category_name ?? ''}}</li>
									</ul>
									<p class="text">{{$product->book_description}}</p>
									<div class="price">
										<span class="price-num">${{$product->book_selling_price}}</span>
										<del>${{$product->book_original_price}}</del>
										<span class="badge">{{$discountPercentage}}% OFF</span>
									</div>
									<div class="bookcard-footer">
										<a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy Now</a>
										<a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div class="pagination-align style-2">
						<div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
						<div class="swiper-pagination-three"></div>
						<div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature Product End -->
        @endif

		<!-- Testimonial -->
		<section class="content-inner-2 testimonial-wrapper">
			<div class="container">
				<div class="testimonial">
					<div class="section-head book-align">
						<div>
							<h2 class="title mb-0">Testimonials</h2>
							<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
						</div>
						<div class="pagination-align style-1">
							<div class="testimonial-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
							<div class="testimonial-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-container testimonial-swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.1s">
							<div class="testimonial-info">
								<ul class="dz-rating">
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
								</ul>
								<div class="testimonial-text">
									<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
								</div>
								<div class="testimonial-detail">
									<div class="testimonial-pic">
										<img src="images/testimonial/testimonial1.jpg" alt="">
									</div>
									<div class="info-right">
										<h6 class="testimonial-name">Jason Huang</h6>
										<span class="testimonial-position">Book Lovers</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.2s">
							<div class="testimonial-info">
								<ul class="dz-rating">
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-muted"></i></li>
								</ul>
								<div class="testimonial-text">
									<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
								</div>
								<div class="testimonial-detail">
									<div class="testimonial-pic radius">
										<img src="images/testimonial/testimonial2.jpg" alt="">
									</div>
									<div>
										<h6 class="testimonial-name">Miranda Lee</h6>
										<span class="testimonial-position">Book Lovers</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.3s">
							<div class="testimonial-info">
								<ul class="dz-rating">
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-muted"></i></li>
									<li><i class="fas fa-star text-muted"></i></li>
								</ul>
								<div class="testimonial-text">
									<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
								</div>
								<div class="testimonial-detail">
									<div class="testimonial-pic radius">
										<img src="images/testimonial/testimonial3.jpg" alt="">
									</div>
									<div>
										<h6 class="testimonial-name">Steve Henry</h6>
										<span class="testimonial-position">Book Lovers</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.4s">
							<div class="testimonial-info">
								<ul class="dz-rating">
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-muted"></i></li>
								</ul>
								<div class="testimonial-text">
									<p>Thank you for filling a niche at an affordable price. Your book was just what I was looking for. Thanks again</p>
								</div>
								<div class="testimonial-detail">
									<div class="testimonial-pic radius">
										<img src="images/testimonial/testimonial4.jpg" alt="">
									</div>
									<div>
										<h6 class="testimonial-name">Angela Moss</h6>
										<span class="testimonial-position">Book Lovers</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.5s">
							<div class="testimonial-info">
								<ul class="dz-rating">
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-muted"></i></li>
								</ul>
								<div class="testimonial-text">
									<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
								</div>
								<div class="testimonial-detail">
									<div class="testimonial-pic radius">
										<img src="images/testimonial/testimonial2.jpg" alt="">
									</div>
									<div>
										<h6 class="testimonial-name">Miranda Lee</h6>
										<span class="testimonial-position">Book Lovers</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.6s">
							<div class="testimonial-info">
								<ul class="dz-rating">
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-muted"></i></li>
									<li><i class="fas fa-star text-muted"></i></li>
								</ul>
								<div class="testimonial-text">
									<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
								</div>
								<div class="testimonial-detail">
									<div class="testimonial-pic">
										<img src="images/testimonial/testimonial1.jpg" alt="">
									</div>
									<div class="info-right">
										<h6 class="testimonial-name">Jason Huang</h6>
										<span class="testimonial-position">Book Lovers</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Testimonial End -->


		<!-- Feature Box -->
		<section class="content-inner">
			<div class="container">
				<div class="row sp15">
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fa-solid fa-users icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">125,663</h2>
								<p class="font-20">Happy Customers</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fa-solid fa-book icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">50,672</h2>
								<p class="font-20">Book Collections</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fa-solid fa-store icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">1,562</h2>
								<p class="font-20">Our Stores</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fa-solid fa-leaf icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">457</h2>
								<p class="font-20">Famous Writers</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature Box End -->

		<!-- Newsletter -->
		<section class="py-5 newsletter-wrapper" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
			<div class="container">
				<div class="subscride-inner">
					<div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
						<div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
							<div class="section-head mb-0">
								<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
							<form class="dzSubscribe style-1" action="script/mailchamp.php" method="post">
								<div class="dzSubscribeMsg"></div>
								<div class="form-group">
									<div class="input-group mb-0">
										<input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
										<div class="input-group-addon">
											<button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
												<span>SUBSCRIBE</span>
												<i class="fa-solid fa-paper-plane"></i>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Newsletter End -->

	</div>

	<!-- Footer -->
	<footer class="site-footer style-1">
		<!-- Footer Category -->
		<div class="footer-category">
			<div class="container">
				<div class="category-toggle">
					<div class="toggle-items row">
						<div class="footer-col-book">

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Category End -->
        @endsection

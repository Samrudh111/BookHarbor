@extends('layouts.app')
@section('content')

<div class="page-content bg-white">
		<!--banner-->
		<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>About us</h1>
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
							<li class="breadcrumb-item">About us</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
		<!--Our Mission Section-->
		<section class="content-inner overlay-white-middle">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Our Founders</h2>
            </div>

            <div class="row justify-content-center">
                <!-- Founder/member 1 -->
                <div class="col-lg-3 col-md-6 m-b30">
                    <div class="team-box">
                        <div class="team-media">
                            <img src="/images/user_avatar.png" alt="Shrisudarshan Sreenath">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Shrisudarshan Sreenath</h4>
                            <span class="team-title">CEO</span>
                        </div>
                    </div>
                </div>

                <!-- Founder/member 2 -->
                <div class="col-lg-3 col-md-6 m-b30">
                    <div class="team-box">
                        <div class="team-media">
                            <img src="/images/user_avatar3.png" alt="Sohail Shaikh">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Sohail Shaikh</h4>
                            <span class="team-title">COO</span>
                        </div>
                    </div>
                </div>

                <!-- Founder/member 3 -->
                <div class="col-lg-3 col-md-6 m-b30">
                    <div class="team-box">
                        <div class="team-media">
                            <img src="/images/user_avatar1.png" alt="Samrudh Surendra">

                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Samrudh Surendra</h4>
                            <span class="team-title">Lead Developer</span>
                        </div>
                    </div>
                </div>

                <!-- Founder/member 4 -->
                <div class="col-lg-3 col-md-6 m-b30">
                    <div class="team-box">
                        <div class="team-media">
                            <img src="/images/user_avatar2.png" alt="Akarsh Jana">

                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Akarsh Jana</h4>
                            <span class="team-title">Lead Tester</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
		
		
		<!--icon-box3 section-->
		<section class="content-inner-1 bg-light">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Our Mission</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper style-3 m-b30">
                        <div class="icon-lg m-b20">
                            <i class="fas fa-book icon-cell"></i>
                        </div>
							<div class="icon-content">
								<h4 class="title">Best Bookstore</h4>
								<!-- <a href="about-us">Learn More <i class="fa-solid fa-angles-right"></i></a> -->
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper style-3 m-b30">
                        <div class="icon-lg m-b20">
                            <i class="fas fa-lock icon-cell"></i>
                        </div>
							<div class="icon-content">
								<h4 class="title">Trusted Seller</h4>
								<!-- <a href="about-us">Learn More <i class="fa-solid fa-angles-right"></i></a> -->
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="icon-bx-wraper style-3 m-b30">
							<div class="icon-lg m-b20">
								<i class="fas fa-store icon-cell"></i>
							</div>
							<div class="icon-content">
								<h4 class="title">Expand Store</h4>
								<!-- <a href="about-us">Learn More <i class="fa-solid fa-angles-right"></i></a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Testimonial -->
		<section class="content-inner-1 testimonial-wrapper">
			<div class="container">
				<div class="testimonial">
					<div class="section-head book-align">
						<div>
							<h2 class="title mb-0">Testimonials</h2>
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
						<div class="testimonial-1">
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
						<div class="testimonial-1">
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
						<div class="testimonial-1">
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
						<div class="testimonial-1">
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
						<div class="testimonial-1">
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
						<div class="testimonial-1">
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
		<section class="content-inner bg-light">
			<div class="container">
				<div class="row sp15">
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fas fa-users"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">125,663</h2>
								<p class="font-20">Happy Customers</p>
							</div>
						</div>
					</div>
					<div class=" col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fas fa-book text-yellow"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">50,672</h2>
								<p class="font-20">Book Collections</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-store text-yellow"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">1,562</h2>
								<p class="font-20">Our Stores</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-leaf text-yellow"></i>
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
		
		<!-- Client Start-->
		<div class="py-5">
			<div class="container">
			<!--Client Swiper -->
				<div class="swiper client-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img src="images/client/client1.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client2.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client3.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client4.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client5.svg" alt="client"></div>	
					</div>
				</div>
			</div>
		</div>
		<!-- Client End-->
		<!-- Newsletter -->
		<section class="py-5 newsletter-wrapper" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
			<div class="container">
				<div class="subscride-inner">
					<div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
						<div class="col-xl-7 col-lg-12">
							<div class="section-head mb-0">
								<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6">
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

@endsection
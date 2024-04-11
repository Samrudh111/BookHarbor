<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/x-icon" href="/images/favicon.png"/>

	<!-- PAGE TITLE HERE -->
	<title>Bookharbor- Buying & Selling books online.</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="/icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">

	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	@yield('css')

</head>
<body>

<div class="page-wraper">
	<div id="loading-area" class="preloader-wrapper-1">
		<div class="preloader-inner">
			<div class="preloader-shade"></div>
			<div class="preloader-wrap"></div>
			<div class="preloader-wrap wrap2"></div>
			<div class="preloader-wrap wrap3"></div>
			<div class="preloader-wrap wrap4"></div>
			<div class="preloader-wrap wrap5"></div>
		</div>
	</div>

	<!-- Header -->
	<header class="site-header mo-left header style-1">
		<!-- Main Header -->
		<div class="header-info-bar">
			<div class="container clearfix">
				<!-- Website Logo -->
				<div class="logo-header logo-dark">
					<a href="{{route('home')}}"><img src="/images/bookharbor_logo.png" alt="logo"></a>
				</div>

				<!-- EXTRA NAV -->
				<div class="extra-nav">
					<div class="extra-cell">
						<ul class="navbar-nav header-right">
							<li class="nav-item">
								<a href="{{route('cart')}}" class="nav-link box cart-btn">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
									<span class="badge"> {{ $cartCount ?? 0 }}</span>
								</a>
							</li>
							<li class="nav-item dropdown profile-dropdown  ms-4">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="https://www.gravatar.com/avatar/EMAIL_MD5?d=https%3A%2F%2Fui-avatars.com%2Fapi%2F/{{Auth::user()->first_name}}+{{Auth::user()->last_name}}/128" alt="/">
									<div class="profile-info">
										<h6 class="title">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h6>
										<span>{{Auth::user()->email}}</span>
									</div>
								</a>
								<div class="dropdown-menu py-0 dropdown-menu-end">
									<div class="dropdown-body">
										<a href="{{route('profile')}}" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
											<div>
												<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
												<span class="ms-2">Profile</span>
											</div>
										</a>
										<a href="{{route ('orders')}}" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
											<div>
												<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
												<span class="ms-2">My Orders</span>
											</div>
										</a>
									</div>
									<div class="dropdown-footer">
										<a href="{{ route('logout') }}" class="btn btn-primary w-100 btnhover btn-sm"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" ><i class="icofont-logout fs-6 me-3"></i>{{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                            </form>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<!-- header search nav -->
				<div class="header-search-nav">
					<form class="header-item-search" action="{{ route('search') }}" method="GET">
						<div class="input-group search-input">

							<input type="text" class="form-control" name="search" value="" aria-label="Text input with dropdown button" placeholder="Search Books Here">
							<button class="btn" type="submit"><i class="fas fa-magnifying-glass"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Main Header End -->

		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark">
						<a href="{{route('home')}}"><img src="/images/bookharbor_logo.png" alt="logo"></a>
					</div>

					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>

					@if(!Request::is('add-listing'))
					<!-- EXTRA NAV -->
					<div class="extra-nav">
						<div class="extra-cell">
							<a href="{{route('add-listing')}}" class="btn btn-primary btnhover">+ Add Listing</a>
						</div>
					</div>
					@endif

					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="{{route('home')}}"><img src="/images/bookharbor_logo.png" alt=""></a>
						</div>
						<form class="search-input">
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
								<button class="btn" type="button"><i class="fas fa-magnifying-glass"></i></button>
							</div>
						</form>
						<ul class="nav navbar-nav">
							<li><a href="{{route('home')}}"><span>Home</span></a>
							</li>
							<li><a href="{{route('ourproducts')}}"><span>Our Books</span></a></li>
							<li><a href="{{route('list-books')}}"><span>Listed Books</span></a></li>
							<li><a href="{{route('about-us')}}"><span>About Us</span></a></li>
                            <li><a href="{{route('contact-us')}}"><span>Contact Us</span></a></li>
						</ul>
						<div class="dz-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/dexignzone"></a></li>
								<li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/dexignzones"></a></li>
								<li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
								<li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/website_templates__/"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->

	</header>
	<!-- Header End -->

    @yield('content')
			<!-- Footer -->
	<footer class="site-footer style-1">
		 <!-- Footer Top -->
         <div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
						<div class="widget widget_about">
							<div class="footer-logo logo-white">
								<a href="{{route('home')}}"><img src="/images/bookharbor_logo.png" alt=""></a>
							</div>
							<p class="text">Bookharbor is a online buying and selling platform with huge varities of categories of books available for you.</p>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.2s">
						<div class="widget widget_services">
							<h5 class="footer-title">Our Links</h5>
							<ul>
								<li><a href="about-us">About us</a></li>
								<li><a href="contact-us">Contact us</a></li>
								<li><a href="our-books">Our Books</a></li>
								<li><a href="list-books">Listed Books</a></li>
								<li><a href="my-listings">My Listings</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
						<div class="widget widget_getintuch">
							<h5 class="footer-title">Get in Touch With Us</h5>
							<ul>
								<li>
									<i class="fas fa-location-dot"></i>
									<span>701 S Nedderman Dr, Arlington, TX 76019</span>
								</li>
								<li>
									<i class="fas fa-phone"></i>
									<span>+1 (123) 456-7890<br></span>
								</li>
								<li>
									<i class="fas fa-envelope"></i>
									<span>support@Bookharbor.id<br>
									info@Bookharbor.id</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Top End -->

		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row fb-inner">
					<div class="col-lg-6 col-md-12 text-start">
						<p class="copyright-text">Bookharbor - © 2024 All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Bottom End -->

	</footer>
	<!-- Footer End -->

	<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>
@stack('scripts')
<!-- JAVASCRIPT FILES ========================================= -->
<script src="/js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<!--<script src="/vendor/wow/wow.min.js"></script> WOW JS -->
<script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="/vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script><!-- BOOTSTRAP TOUCHSPIN JS -->
<script src="/vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="/vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="/vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="/js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="/js/dz.ajax.js"></script><!-- AJAX -->
<script src="/js/custom.js"></script><!-- CUSTOM JS -->
</body>
</html>

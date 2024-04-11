<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />

	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/x-icon" href="images/favicon.png"/>

	<!-- PAGE TITLE HERE -->
	<title>Bookharbor - Buy & Sell Books Online</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>

	<!-- Header -->
	<header class="site-header mo-left header style-1">
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark">
						<a href="{{ route('landing') }}"><img src="images/bookharbor_logo.png" alt="logo"></a>
					</div>

					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>

					<!-- EXTRA NAV -->
					<div class="extra-nav">
						<div class="extra-cell">
                            @if(Request::is('register') || Request::is('/'))
                            <a href="{{ route('login') }}" class="primary">Login</a>
                            @endif
						</div>
					</div>
                    <div class="extra-nav">
						<div class="extra-cell">
                            @if(Request::is('/'))
                            <a href="{{ route('register') }}" class="btn btn-primary btnhover">Sign Up</a>
                            @endif

						</div>
					</div>

					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="index.html"><img src="images/bookharbor_logo.png" alt=""></a>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->

	</header>
	<!-- Header End -->

    @yield('auth-content')

    <!-- Footer Top -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
						<div class="widget widget_about">
							<div class="footer-logo logo-white">
								<a href="index.html"><img src="images/bookharbor_logo.png" alt=""></a>
							</div>
							<p class="text">Bookharbor is a online buying and selling platform with huge varities of categories of books available for you.</p>
							<div class="dz-social-icon style-1">
								<ul>
									<li><a href="https://www.facebook.com/dexignzone" target="_blank" ><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UCGL8V6uxNNMRrk3oZfVct1g" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
									<li><a href="https://www.linkedin.com/showcase/3686700/admin/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
									<li><a href="https://www.instagram.com/website_templates__/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>
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
									<span>+1 (123) 456-7890</span>
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
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<!--<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->
</body>
</html>


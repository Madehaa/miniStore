
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.fancybox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/fonts/icomoon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/fonts/flaticon/font/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/daterangepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

	<title>eshop</title>
</head>

<body>

<header>
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body">

        </div>
	</div>

	<nav class="site-nav" >
		<div class="container">
			<div class="site-navigation">
				<a href="/" class="logo m-0">TravelTrove <span class="text-primary"></span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li class="active"><a href="/">Home</a></li>
					
					<!-- <li><a href="{{route('service')}}">Services</a></li>
					<li><a href="{{route('about')}}">About</a></li>
					<li><a href="{{route('contact')}}">Contact Us</a></li> -->
					<li><a href="{{route('login')}}">Login</a></li>
					<li><a href="{{route('reg')}}">Register</a></li>

				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>
</header>


@yield('homebg')
@yield('content')
@yield('testimonials')

    <div class="py-5 cta-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
					<p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>
					<p class="mb-0"><a href="booking.html" class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="site-footer">
		<div class="inner first">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">About Tour</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
						<div class="widget">
							<ul class="list-unstyled social">
								<li><a href="#"><span class="icon-twitter"></span></a></li>
								<li><a href="#"><span class="icon-instagram"></span></a></li>
								<li><a href="#"><span class="icon-facebook"></span></a></li>
								<li><a href="#"><span class="icon-linkedin"></span></a></li>
								<li><a href="#"><span class="icon-dribbble"></span></a></li>
								<li><a href="#"><span class="icon-pinterest"></span></a></li>
								<li><a href="#"><span class="icon-apple"></span></a></li>
								<li><a href="#"><span class="icon-google"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2 pl-lg-5">
						<div class="widget">
							<h3 class="heading">Pages</h3>
							<ul class="links list-unstyled">
								<li><a href="#">Blog</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2">
						<div class="widget">
							<h3 class="heading">Resources</h3>
							<ul class="links list-unstyled">
								<li><a href="#">Blog</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Contact</h3>
							<ul class="list-unstyled quick-info links">
								<li class="email"><a href="#">mail@example.com</a></li>
								<li class="phone"><a href="#">+1 222 212 3819</a></li>
								<li class="address"><a href="#">43 Raymouth Rd. Baltemoer, London 3910</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="inner dark">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 mb-3 mb-md-0 mx-auto">
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co" class="link-highlight">Untree.co</a> <!-- License information: https://untree.co/license/ -->Distributed By <a href="https://themewagon.com" target="_blank" >ThemeWagon</a>
						</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<script src="{{ asset('assets/frontend/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/jquery.fancybox.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/aos.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/moment.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/daterangepicker.js') }}"></script>

	<script src="{{ asset('assets/frontend/js/typed.js') }}"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ["San Francisco."," Paris."," New Zealand.", " Maui.", " London."],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>

	<script src="{{ asset('assets/frontend/js/custom.js') }}"></script>

</body>

</html>

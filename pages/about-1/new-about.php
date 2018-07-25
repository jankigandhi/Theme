<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../components/typography/css/typography.css">
<link rel="stylesheet" href="../../components/Buttons/css/button.css">
<link rel="stylesheet" href="../../css/libs/swiper.min.css">
<link rel="stylesheet" href="../../pages/about-1/css/new-about.css">
<link rel="stylesheet" type="text/css" href="../../components/nav-bar/css/nav-bar.css">
<link rel="stylesheet" type="text/css" href="../../components/breadcrumbs/css/breadcrumbs.css">
</head>
<body>
<?php $HederClass="bg-dark";?>
<?php include_once '../../components/nav-bar/nav-bar.php';?>
<main>
	<div class="breadcrumbs-section">
		<div class="container">
			<div class="row justify-content-lg-between justify-content-center align-items-center mx-0">
				<div>
					<h1 class="about-title mb-0 text-uppercase text-dark font-weight-medium">About Us</h1>
				</div>
				<div>
					<ul class="breadcrumb mb-0">
						<li class="breadcrumb-item">
							<a href="#">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="#">Pages</a>
						</li>
						<li class="breadcrumb-item active">About</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="my-4 text-center">
			<h3 class="heading-block text-uppercase text-dark">Interactive Office Environment</h3>
			<p class="descripsion mx-auto mb-0">We value Work Ethics & Environment as it helps in creating a Creative Thinktank</p>
		</div>
	</div>
	<div class="slider my-5">
		<div class="container">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="slider-image" style="background-image: url('images/slider-1.jpg');">
						</div>
					</div>
					<div class="swiper-slide">
						<div class="slider-image" style="background-image: url('images/slider-2.jpg');">
						</div>
					</div>
					<div class="swiper-slide">
						<div class="slider-image" style="background-image: url('images/slider-3.jpg');">
						</div>
					</div>
				</div>
				<div class="next-btn swiper-button-next swiper-button-white"></div>
				<div class="prev-btn swiper-button-prev swiper-button-white"></div>
			</div>
		</div>
	</div>
</main>
<?php include_once '../../inc/footer.php';?>
<script src="../../js/swiper.min.js"></script>
<script>
	var swiper = new Swiper('.swiper-container', {
	navigation: {
	nextEl: '.swiper-button-next',
	prevEl: '.swiper-button-prev',
	},
	effect: 'fade',
	speed: 750,
	mode: 'horizontal',
	grabCursor: true,
	autoplay: {
	delay: 3000,
	},
	loop:true,
	breakpoints: {
	1000: {
	slidesPerView: 3,
	spaceBetween: 20
	},
	768: {
	slidesPerView: 2,
	spaceBetween: 20
	},
	}
	});
</script>
</body>
</html>
<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../components/typography/css/typography.css">
<link rel="stylesheet" href="../../components/Buttons/css/button.css">
<link rel="stylesheet" href="../../css/libs/swiper.min.css">
<link rel="stylesheet" href="../../pages/about/css/about-1.css">
<link rel="stylesheet" type="text/css" href="../../components/nav-bar/css/nav-bar.css">
<link rel="stylesheet" type="text/css" href="../../components/breadcrumbs/css/breadcrumbs.css">
</head>
<body>
<?php $HederClass="";?>
<?php include_once '../../components/nav-bar/nav-bar.php';?>
<main>
	<div class="banner-section">
		<div class="banner d-flex align-items-center" style="background-image: url('images/banner-img.jpg');">
			<div class="container">
				<div>
					<div class="row section-title align-items-center justify-content-md-between mx-0">
						<div>
							<h2 class="text-white text-uppercase banner-title">About Us</h2>
							<p class="text-white">A descriptive subtitle for your page.</p>
						</div>
						<div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-white text-uppercase" href="#">
										<i class="zmdi zmdi-home"></i>
										Home
									</a>
								</li>
								<li class="breadcrumb-item">
									<a class="text-white text-uppercase" href="#">Pages</a>
								</li>
								<li class="breadcrumb-item active text-white text-uppercase">About Us</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="container">
		<div class="py-5">
			<h3 class="main-title text-center font-weight-normal">
			Diversity and difference are our guiding principles.
			<span class="d-block">Our approach is tailored and unique to each client.</span>
			</h3>
		</div>
		<div>
			<p class="sub-desc mx-auto small light-gray text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
		</div>
	</div>
	<div class="hover-section">
		<div class="row my-5 mx-0">
			<div class="col-md-4 px-0">
				<div class="images" style="background-image: url('images/team-1.jpg');">
					<div class="title text-center">
						<h5 class="text-white text-uppercase mb-0">Sally Marsh</h5>
						<p class="text-white mb-0">Creative Director</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 px-0">
				<div class="images" style="background-image: url('images/team-2.jpg');">
					<div class="title text-center">
						<h5 class="text-white text-uppercase mb-0">Tim Foley</h5>
						<p class="text-white mb-0">iOS Developer</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 px-0">
				<div class="images" style="background-image: url('images/team-3.jpg');">
					<div class="title text-center">
						<h5 class="text-white text-uppercase mb-0">Jake Robbins</h5>
						<p class="text-white mb-0">Brand Director</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="swiper-slider">
		<div class="container">
			<h4 class="text-center text-uppercase">Previous Collaborators</h4>
			<div class="swiper-container my-5">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img class="logo-img mw-100" src="images/slider-1.png" alt="image-1">
					</div>
					<div class="swiper-slide">
						<img class="logo-img mw-100" src="images/slider-2.png" alt="image-2">
					</div>
					<div class="swiper-slide">
						<img class="logo-img mw-100" src="images/slider-3.png" alt="image-3">
					</div>
					<div class="swiper-slide">
						<img class="logo-img mw-100" src="images/slider-4.png" alt="image-4">
					</div>
					<div class="swiper-slide">
						<img class="logo-img mw-100" src="images/slider-1.png" alt="image-1">
					</div>
					<div class="swiper-slide">
						<img class="logo-img mw-100" src="images/slider-2.png" alt="image-2">
					</div>
					<div class="swiper-slide">
						<img class="logo-img mw-100" src="images/slider-3.png" alt="image-3">
					</div>
					<div class="swiper-slide">
						<img class="logo-img mw-100" src="images/slider-4.png" alt="image-4">
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include_once '../../inc/footer.php';?>
<script src="../../js/swiper.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
slidesPerView: 4,
spaceBetween: 30,
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
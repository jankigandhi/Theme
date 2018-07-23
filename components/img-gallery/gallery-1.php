<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" href="../Buttons/css/button.css">
<link rel="stylesheet" href="../modal/css/modal.css">
<link rel="stylesheet" type="text/css" href="libs/swiper.min.css">
<link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>
<body>
<div class="container my-4">
	<h1 class="h2 text-center mt-3">Lightbox grid gallery</h1>
	<div class="p-4">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6 p-2">
				<a href="#" class="d-block">
					<div class="gallery-img" style="background-image: url('images/gallery-1.png');"></div>
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 p-2">
				<a href="#" class="d-block">
					<div class="gallery-img" style="background-image: url('images/gallery-2.png');"></div>
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 p-2">
				<a href="#" class="d-block">
					<div class="gallery-img" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2821%29.jpg');"></div>
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 p-2">
				<a href="#" class="d-block">
					<div class="gallery-img" style="background-image: url('images/gallery-1.png');"></div>
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 p-2">
				<a href="#" class="d-block">
					<div class="gallery-img" style="background-image: url('images/gallery-2.png');"></div>
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 p-2">
				<a href="#" class="d-block">
					<div class="gallery-img" style="background-image: url('images/gallery-3.jpg');"></div>
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 p-2">
				<a href="#" class="d-block">
					<div class="gallery-img" style="background-image: url('images/gallery-2.png');"></div>
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 p-2">
				<a href="#" class="d-block">
					<div class="gallery-img" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2821%29.jpg');"></div>
				</a>
			</div>
		</div>
		<div id="myModal" class="scroll iframe-modal modal fade show open">
			<div class="modal-lg modal-dialog my-0 mx-auto p-3">
				<div class="modal-content border-0 rounded-0 bg-transparent">
					<div class="modal-header d-inline-block w-100 p-md-4 border-0">
						<button type="button" class="close-btn close text-white px-0">
						<span class="ti-close"></span>
						</button>
					</div>
					<div class="modal-body p-0">
						<div class="swiper-container gallery-top">
							<div class="swiper-wrapper">
								<div class="swiper-slide gallery-img gallery-big-img" style="background-image: url('images/gallery-1.png');"></div>
								<div class="swiper-slide gallery-img gallery-big-img" style="background-image: url('images/gallery-2.png');"></div>
								<div class="swiper-slide gallery-img gallery-big-img" style="background-image: url('images/gallery-3.jpg');"></div>
								<div class="swiper-slide gallery-img gallery-big-img" style="background-image: url('images/gallery-1.png');"></div>
							</div>
							<!-- Add Arrows -->
							<div class="swiper-button-next swiper-button-white"></div>
							<div class="swiper-button-prev swiper-button-white"></div>
						</div>
						<div class="swiper-container gallery-thumbs">
							<div class="swiper-wrapper">
								<div class="thumbs-img swiper-slide" style="background-image:url('images/gallery-1.png')"></div>
								<div class="thumbs-img swiper-slide" style="background-image:url('images/gallery-2.png')"></div>
								<div class="thumbs-img swiper-slide" style="background-image:url('images/gallery-3.jpg')"></div>
								<div class="thumbs-img swiper-slide" style="background-image:url('images/gallery-1.png')"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal-backdrop fade show"></div>
<?php include_once '../../inc/footer.php';?>
<script src="libs/swiper.min.js"></script>
<script>
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 'auto',
      touchRatio: 0.2,
      slideToClickedSlide: true,
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;
  </script>
</body>
</html>
<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../components/typography/css/typography.css">
<link rel="stylesheet" href="../../components/Buttons/css/button.css">
<link rel="stylesheet" href="../../pages/about/css/about-1.css">
<link rel="stylesheet" type="text/css" href="../../components/nav-bar/css/nav-bar.css">
<link rel="stylesheet" type="text/css" href="../../components/breadcrumbs/css/breadcrumbs.css">
</head>
<body>
<?php $HederClass="bg-dark";?>
<?php include_once '../../components/nav-bar/nav-bar.php';?>
<main>
	<div class="banner-section">
		<div class="banner" style="background-image: url('images/banner-img.jpg');">
			<div class="container">
				<div class="">
					<div class="row min-height align-items-center">
						<div class="col-md-6 text-center">
							<h2 class="text-white text-uppercase banner-title">About Us</h2>
							<p class="text-white">A descriptive subtitle for your page.</p>
						</div>
						<div class="col-md-6 d-flex justify-content-md-end justify-content-center">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a class="text-white text-uppercase" href="#">Home</a></li>
								<li class="breadcrumb-item"><a class="text-white text-uppercase" href="#">Pages</a></li>
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
	</div>
	<div class="row my-5">
		<div class="col-md-4 px-0">
			<div class="images" style="background-image: url('images/team-1.jpg');">
				<div class="title text-center">
					<h5>Sally Marsh</h5>
					<p>Creative Director</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 px-0">
			<div class="images" style="background-image: url('images/team-2.jpg');"></div>
		</div>
		<div class="col-md-4 px-0">
			<div class="images" style="background-image: url('images/team-3.jpg');"></div>
		</div>
	</div>
	
</main>
<?php include_once '../../inc/footer.php';?>
</body>
</html>
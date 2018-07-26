<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../components/typography/css/typography.css">
<link rel="stylesheet" href="../../components/Buttons/css/button.css">
<link rel="stylesheet" href="../../css/libs/swiper.min.css">
<link rel="stylesheet" href="../../pages/contact-1/css/contact-1.css">
<link rel="stylesheet" href="../../pages/about-1/css/about-1.css">
<link rel="stylesheet" type="text/css" href="../../components/form-input/css/form-input.css">
<link rel="stylesheet" type="text/css" href="../../components/modal/css/modal.css">
<link rel="stylesheet" type="text/css" href="../../components/map/css/map.css">
<link rel="stylesheet" type="text/css" href="../../components/nav-bar/css/nav-bar.css">
<link rel="stylesheet" type="text/css" href="../../components/breadcrumbs/css/breadcrumbs.css">
</head>
<body>
<?php $HederClass="";?>
<?php include_once '../../components/nav-bar/nav-bar.php';?>
<div class="breadcrumbs-section">
	<div class="container">
		<div class="row justify-content-md-between justify-content-center align-items-center mx-0">
			<div class="line-height">
				<h1 class="breadcrumbs-title mb-0 text-uppercase text-dark font-weight-medium">Contact Us</h1>
				<p class="breadcrumbs-desc">Get in Touch with Us</p>
			</div>
			<div class="breadcrumbs-menu">
				<ul class="breadcrumb mb-0 justify-content-center">
					<li class="breadcrumb-item">
						<a href="#" class="text-primary">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#" class="text-primary">Pages</a>
					</li>
					<li class="breadcrumb-item active">About</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div>
	<div id="map" class="map-vh"></div>
	<div class="basic-modal modal fade scroll show open">
		<div class="modal-dialog modal-dialog-centered scroll-dialog my-0 mx-auto p-3">
			<div class="modal-content border-0 rounded-0">
				<div class="modal-header d-inline-block w-100 p-md-4">
					<button type="button" class="close-btn close">
					<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title mt-4 font-weight-medium text-center">Send us an Email</h4>
				</div>
				<div class="modal-body p-md-4">
					<div class="row mx-0">
						<div class="col-md-6">
							<div class="form-group my-4 mb-0">
								<input type="email" class="square-box form-control" placeholder="NAME">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group my-4 mb-0">
								<input type="email" class="square-box form-control" placeholder="EMAIL">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group my-4">
								<input type="email" class="square-box form-control" placeholder="PHONE">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group py-4">
								<div class="selectbox">
									<select class="square-box form-control">
										<option>-- Select One --</option>
										<option>Wordpress</option>
										<option class="text-uppercase">Php/MySQl</option>
										<option class="text-uppercase">Html5/Css3</option>
										<option class="text-uppercase">Graphic Design</option>
									</select>
									<span class="select-icon ti-angle-down"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group p-3">
						<input type="email" class="square-box form-control" placeholder="SUBJECT">
					</div>
					<div class="input-area input-effect p-3">
						<textarea class="square-box form-control" placeholder="WRITE HERE..."></textarea>
					</div>
				</div>
				<div class="modal-footer d-inline-block w-100 text-right p-md-4">
					<button type="button" class="btn-thick rounded-0 btn btn-primary py-2">Send Message</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-backdrop fade show"></div>
</div>
<?php include_once '../../inc/foot.php';?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCX-gnjI10taggMKTIc8jNd6VAobfU3leY" type="text/javascript"></script>
<script type="text/javascript">
	var map;
	var locations = [
	['Bondi Beach', -33.890542, 151.274856, 4],
	// ['Coogee Beach', -33.923036, 151.259052, 5],
	// ['Cronulla Beach', -34.028249, 151.157507, 3],
	// ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
	// ['Maroubra Beach', -33.950198, 151.259302, 1]
	];
	var map = new google.maps.Map(document.getElementById('map'), {
	zoom: 10,
	center: new google.maps.LatLng(-33.92, 151.25),
	mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	var infowindow = new google.maps.InfoWindow();
	var marker, i;
	for (i = 0; i < locations.length; i++) {
	marker = new google.maps.Marker({
	position: new google.maps.LatLng(locations[i][1], locations[i][2]),
	map: map
	});
	google.maps.event.addListener(marker, 'click', (function(marker, i) {
	return function() {
	infowindow.setContent(locations[i][0]);
	infowindow.open(map, marker);
	}
	})(marker, i));
	}
</script>
</body>
</html>
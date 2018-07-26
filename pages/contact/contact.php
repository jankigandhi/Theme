<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../components/typography/css/typography.css">
<link rel="stylesheet" href="../../components/Buttons/css/button.css">
<link rel="stylesheet" href="../../css/libs/swiper.min.css">
<link rel="stylesheet" href="../../pages/contact/css/contact.css">
<link rel="stylesheet" href="../../pages/about-1/css/about-1.css">
<link rel="stylesheet" type="text/css" href="../../components/form-input/css/form-input.css">
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
			<div>
				<h1 class="breadcrumbs-title mb-0 text-uppercase text-dark font-weight-medium">Contact Us</h1>
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
<div class="map-section">
	<div>
		<div id="map"></div>
	</div>
</div>
<div class="form-componet my-5">
	<div class="container">
		<div class="row mx-0">
			<div class="col-md-6">
				<div class="border-bottom border-secondary py-4">
					<h4 class="text-uppercase mb-0">GeT In Touch</h4>
					<p class="addrese-desc mb-0 pt-3 light-gray">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
				</div>
				<div class="border-bottom border-secondary py-4">
					<address class="light-gray addrese-desc">438 Marine Parade <span class="d-block">Elwood,Victoria</span><span class="d-block">P.O Box 3184</span></address>
				</div>
				<div class="phone-contact py-4">
					<p class="light-gray mb-1"><strong>Email:</strong> hello@foundry.net</p>
					<p class="light-gray"><strong>Phone:</strong> +614 3948 2726 </p>
				</div>
			</div>
			<div class="col-md-5 ml-md-5">
				<div class="form-group mb-0 my-4">
					<input type="email" class="square-box form-control" placeholder="YOUR NAME">
				</div>
				<div class="form-group py-2">
 					<input type="email" class="square-box form-control" placeholder="EMAIL ADDRESS">
				</div>
				<div class="input-area input-effect py-2">
					<textarea class="square-box form-control" placeholder="WRITE HERE..."></textarea>
				</div>
				<div class="py-3">
					<button type="button" class="btn-thick btn-min-w rounded-0 btn btn-primary text-uppercase w-100">Send message</button>
				</div>
			</div>
		</div>
	</div>
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
<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../components/map/css/map.css">
</head>
<body>
<?php $HederClass="fixed-header";?>
<?php include_once '../../components/nav-bar/nav-bar.php';?>
<main>
	<div id="map"></div>
	<div class="py-5">
		<div class="container">
			<div>
				<h4 class="text-center">Contact with Us</h4>
				<div class="row py-4">
					<div class="col-md-6">
						<form>
							<div class="form-group">
								<label class="small light-gray text-uppercase font-weight-medium">Name</label>
								<div class="input-with-icon">
									<input type="text" class="square-box form-control" name="name" placeholder="Name" />
									<span class="icon"><i class="fas fa-user"></i></span>
								</div>
							</div>
							<div class="form-group">
								<label class="small light-gray text-uppercase font-weight-medium">Email</label>
								<div class="input-with-icon">
									<input type="email" class="square-box form-control" name="email" placeholder="Email" />
									<span class="icon"><i class="fas fa-envelope"></i></span>
								</div>
							</div>
							<div class="form-group">
								<label class="small light-gray text-uppercase font-weight-medium">Phone Number</label>
								<div class="input-with-icon">
									<input type="text" class="square-box form-control" name="phone_no" placeholder="Phone Number" />
									<span class="icon"><i class="fas fa-phone"></i></span>
								</div>
							</div>
							<div class="form-group">
								<label class="small light-gray text-uppercase font-weight-medium">Subject</label>
								<div class="input-with-icon">
									<input type="text" class="square-box form-control" name="name" placeholder="Name" />
									<span class="icon"><i class="fas fa-address-book"></i></span>
								</div>
							</div>
							<div class="input-effect form-group">
								<label class="small light-gray text-uppercase font-weight-medium">Message</label>
								<div class="input-with-icon">
									<textarea class="square-box form-control" placeholder="Message"></textarea>
									<span class="icon"><i class="fas fa-comment-alt"></i></span>
								</div>
							</div>
							<div>
								<button class="btn-thick btn-min-w rounded-0 btn btn-primary">Send your message</button>
							</div>
						</form>
					</div>
					<div class="col-md-6">
						<div class="mt-4">
							<h5>Nice to hear You!</h5>
							<p class="light-gray small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab, perferendis earum accusamus, sunt error! Asperiores tenetur nobis commodi aliquam consequatur inventore eveniet. Labore, odit similique voluptas non. Sequi, rem!</p>
						</div>
						<div>
							<h5>Contact Information</h5>
							<div>
								<h6>Business Hours</h6>
								<p class="small light-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas temporibus, quis officia possimus voluptatum dolorem quo asperiores unde labore saepe vitae dolorum accusamus. Aperiam neque culpa commodi, similique repellat tenetur.</p>
							</div>
							<div>
								<h6>Address</h6>
								<p class="small light-gray">
									<span class="d-block">Hotel Finder</span>
									<span class="d-block">1400 Lenine Ave. Zaporizhzhya, UA</span>
								</p>
							</div>
							<div>
								<h6>Phone Number</h6>
								<p class="small light-gray">
									1-555-555-555
								</p>
							</div>
							<div>
								<h6>Email</h6>
								<p class="small light-gray">
									info@testhotel.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include_once '../../components/footer/footer.php';?>
<?php include_once '../../inc/foot.php';?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCX-gnjI10taggMKTIc8jNd6VAobfU3leY" type="text/javascript"></script>
<script type="text/javascript">
	var map;
	var locations = [
	['Bondi Beach', -33.890542, 151.274856, 4]
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

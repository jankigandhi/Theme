<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" type="text/css" href="css/map.css">
</head>
<body>
<div class="container py-5">
	<h1>My First Google Map</h1>
	<div id="map" style="width:400px;height:400px;background:yellow"></div>
	<script>
	// Initialize and add the map
	function initMap() {
	// The location of Uluru
	var uluru = {lat: -25.344, lng: 131.036};
	// The map, centered at Uluru
	var map = new google.maps.Map(
	document.getElementById('map'), {zoom: 4, center: uluru});
	// The marker, positioned at Uluru
	var marker = new google.maps.Marker({position: uluru, map: map});
	}
	</script>
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
	</script>
</div>
</body>
</html>
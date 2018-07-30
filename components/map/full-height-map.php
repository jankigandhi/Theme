<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" href="../Buttons/css/button.css">
<link rel="stylesheet" type="text/css" href="css/map.css">
</head>
<body>
<?php $HederClass="bg-dark";?>
<?php include_once '../nav-bar/nav-bar.php';?>
<main>
  <div id="map" class="map-vh"></div>
</main>
<?php include_once '../footer/footer.php';?>
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

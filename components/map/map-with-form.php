<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" href="../Buttons/css/button.css">
<link rel="stylesheet" href="../form-input/css/form-input.css">
<link rel="stylesheet" type="text/css" href="css/map.css">
</head>
<body>
<?php $HederClass="bg-dark";?>
<?php include_once '../nav-bar/nav-bar.php';?>
<main>
  <div class="map-with-form map-vh">
    <div id="map" class="h-100">
    </div>
    <button class="btn-connect btn btn-primary d-sm-none">
      <i class="fas fa-comments"></i>
    </button>
    <div class="contact-form p-4">
      <button class="btn-close btn btn-link d-sm-none float-right font-weight-bold">
        <span class="ti-close"></span>
      </button>
      <h4 class="title text-uppercase font-weight-bold mb-4">Connect</h4>
      <ul class="social-section list-unstyled mb-0 pb-3">
        <li class="d-inline-block align-top mr-3">
          <a href="#" class="social-icon"><i class="zmdi zmdi-facebook"></i></a>
        </li>
        <li class="d-inline-block align-top mr-3">
          <a href="#" class="social-icon"><i class="zmdi zmdi-twitter"></i></a>
        </li>
        <li class="d-inline-block align-top mr-3">
          <a href="#" class="social-icon"><i class="zmdi zmdi-google-plus"></i></a>
        </li>
        <li class="d-inline-block align-top mr-3">
          <a href="#" class="social-icon"><i class="zmdi zmdi-rss"></i></a>
        </li>
      </ul>
      <div class="form-section py-4">
        <h5 class="title text-uppercase font-weight-bold mb-4">Send a message</h5>
        <form>
          <div class="form-group">
            <input type="email" class="square-box form-control" placeholder="EMAIL ADDRESS" />
          </div>
          <div class="form-group">
            <input type="text" class="square-box form-control" placeholder="Subject" />
          </div>
          <div class="input-area input-effect mb-3">
            <textarea class="square-box form-control" placeholder="WRITE HERE..." rows="8"></textarea>
          </div>
          <div>
            <button type="button" class="btn-thick rounded-0 btn btn-primary mb-0 btn-block">
            Send
            </button>
          </div>
        </form>
      </div>
      <div class="py-2">
        <p>
          <i class="email-icon zmdi zmdi-email pr-2"></i>
          <a href="mailto:contact@atyantik.com" class="email">contact@atyantik.com </a>
        </p>
        <p>
          <i class="ph-icon zmdi zmdi-phone pr-2"></i>
          <a href="tel:+91-7600540105" class="phone">+91-7600540105</a>
        </p>
      </div>
    </div>
  </div>
</main>
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

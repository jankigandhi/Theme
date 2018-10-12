<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../components/map/css/map.css">
<link rel="stylesheet" href="css/contact.css">
</head>
<body>
<?php $HederClass="fixed-header";?>
<?php include_once '../../components/nav-bar/nav-bar.php';?>
<main>
  <div id="map"></div>
  <div class="contact-page mb-5 d-inline-block w-100">
    <div class="container">
      <div class="white-box shadow-sm mb-5">
        <div class="row">
          <div class="col-md-8">
            <h4 class="mb-4">Get in touch with us</h4>
            <form class="my-3">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="input-with-icon">
                      <input type="text" class="square-box form-control" name="name" placeholder="Your Name" />
                      <span class="icon"><i class="fas fa-user"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="input-with-icon">
                      <input type="email" class="square-box form-control" name="email" placeholder="Email Address" />
                      <span class="icon"><i class="fas fa-envelope"></i></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="input-with-icon">
                      <input type="text" class="square-box form-control" name="name" placeholder="Subject" />
                      <span class="icon"><i class="fas fa-address-book"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="input-with-icon">
                      <input type="text" class="square-box form-control" name="phone_no" placeholder="Phone Number" />
                      <span class="icon"><i class="fas fa-phone"></i></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="input-effect input-with-icon">
                    <textarea class="square-box form-control" placeholder="Message"></textarea>
                    <span class="icon"><i class="fas fa-comment-alt"></i></span>
                  </div>
                </div>
              </div>
              <div class="mt-3">
                <button class="btn-thick btn-min-w rounded-0 btn btn-primary">Send your message</button>
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <h4 class="mb-4">Our Contact Info</h4>
            <div>
              <div class="d-table mb-3">
                <p class="d-table-cell light-gray align-top pr-3"><i class="fas fa-map-marker-alt"></i></p>
                <p class="d-table-cell light-gray align-top">
                  304, Privilege Avenue,
                  <span class="d-block">
                    Dr. Vikram Sarabhai Road,Vadodara-390022
                  </span>
                  <span class="d-block">
                    Gujarat,India
                  </span>
                </p>
              </div>
              <div class="d-table mb-3">
                <p class="d-table-cell light-gray pr-3 align-top"><i class="far fa-envelope"></i></p>
                <p class="d-table-cell light-gray align-top">
                  <a href="mailto:contact@atyantik.com" class="light-gray">contact@atyantik.com</a>
                </p>
              </div>
              <div class="d-table mb-3">
                <p class="d-table-cell light-gray pr-3 align-top"><i class="fas fa-phone"></i></p>
                <p class="d-table-cell light-gray align-top">
                  <a href="tel:+91-7600540105" class="light-gray">+91-7600540105</a>
                </p>
              </div>
            </div>
            <div>
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
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
<script>
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

<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" href="../Buttons/css/button.css">
<link rel="stylesheet" href="libs/glightbox.min.css">
<link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>
<body>
<?php $HederClass="bg-dark";?>
<?php include_once '../nav-bar/nav-bar.php';?>
<div class="container my-4">
  <h1 class="h2 text-center mt-3">Filter</h1>
  <div class="p-4">
    <div>
      <div class="button-group filters-button-group">
        <button class="button btn btn-link px-0 is-checked" data-filter="*">
        View All
        <span class="px-2">/</span>
        </button>
        <button class="button btn btn-link px-0" data-filter=".web-design">
        Web Design
        <span class="px-2">/</span>
        </button>
        <button class="button btn btn-link px-0" data-filter=".graphic-design">     Graphic Design
        <span class="px-2">/</span>
        </button>
        <button class="button btn btn-link px-0" data-filter=".website-templates">
        Website Templates
        </button>
      </div>
      <div class="grid row my-4 mx-0">
        <div class="col-lg-3 col-md-4 col-sm-6 p-2 element-item web-design">
          <a href="images/gallery-1.png" class="img-block d-block glightbox">
            <div class="gallery-img hover-effect" style="background-image: url('images/gallery-1.png');"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-2 element-item web-design">
          <a href="images/gallery-2.png" class="img-block d-block glightbox">
            <div class="gallery-img hover-effect" style="background-image: url('images/gallery-2.png');"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-2 element-item website-templates">
          <a href="images/gallery-3.jpg" class="img-block d-block glightbox">
            <div class="gallery-img hover-effect" style="background-image: url('images/gallery-3.jpg');"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-2 element-item graphic-design">
          <a href="images/gallery-1.png" class="img-block d-block glightbox">
            <div class="gallery-img hover-effect" style="background-image: url('images/gallery-1.png');"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-2 element-item web-design">
          <a href="images/gallery-2.png" class="img-block d-block glightbox">
            <div class="gallery-img hover-effect" style="background-image: url('images/gallery-2.png');"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-2 element-item website-templates">
          <a href="images/gallery-3.jpg" class="img-block d-block glightbox">
            <div class="gallery-img hover-effect" style="background-image: url('images/gallery-3.jpg');"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-2 element-item website-templates">
          <a href="images/gallery-1.png" class="img-block d-block glightbox">
            <div class="gallery-img hover-effect" style="background-image: url('images/gallery-1.png');"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-2 element-item graphic-design">
          <a href="images/gallery-2.png" class="img-block d-block glightbox">
            <div class="gallery-img hover-effect" style="background-image: url('images/gallery-2.png');"></div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once '../../inc/footer.php';?>
<!-- light-box -->
<script src="libs/glightbox.min.js"></script>
<script>
  var lightbox = GLightbox();
</script>
<!-- isotop -->
<script type="text/javascript" src="js/isotope.pkgd.js"></script>
<script>
  // init Isotope
  var iso = new Isotope( '.grid', {
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
  });
  // filter functions
  var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function( itemElem ) {
  var number = itemElem.querySelector('.number').textContent;
  return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function( itemElem ) {
  var name = itemElem.querySelector('.name').textContent;
  return name.match( /ium$/ );
  }
  };
  // bind filter button click
  var filtersElem = document.querySelector('.filters-button-group');
  filtersElem.addEventListener( 'click', function( event ) {
  // only work with buttons
  if ( !matchesSelector( event.target, 'button' ) ) {
  return;
  }
  var filterValue = event.target.getAttribute('data-filter');
  // use matching filter function
  filterValue = filterFns[ filterValue ] || filterValue;
  iso.arrange({ filter: filterValue });
  });
  // change is-checked class on buttons
  var buttonGroups = document.querySelectorAll('.button-group');
  for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
  var buttonGroup = buttonGroups[i];
  radioButtonGroup( buttonGroup );
  }
  function radioButtonGroup( buttonGroup ) {
  buttonGroup.addEventListener( 'click', function( event ) {
  // only work with buttons
  if ( !matchesSelector( event.target, 'button' ) ) {
  return;
  }
  buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
  event.target.classList.add('is-checked');
  });
  }
</script>
</body>
</html>

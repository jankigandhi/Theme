<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>
<body>
<div class="container my-4">
    <h1 class="h2 text-center mt-3">Isotop Gallery Section</h1>
    <div class="container-fluid">
        <div class="gallery-section">
            <div class="gutter-sizer"></div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/joe-cooke-40727-1.jpg"  alt="" class="mw-100" />
                </a>
                <!-- <div class="content">
                    <h5 class="title mb-0">Art is freedom</h5>
                    <p class="h6 name mb-0">design photo</p>
                </div> -->
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/ruslan-bardash-351288.jpg"  alt="" class="mw-100" />
                </a>
                <!-- <div class="content">
                    <h5 class="title mb-0">Art is freedom</h5>
                    <p class="h6 name mb-0">design photo</p>
                </div> -->
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/09/alexandre-tsuchiya-333897.jpg"  alt="" class="mw-100" />
                </a>
                <!-- <div class="content">
                    <h5 class="title mb-0">Art is freedom</h5>
                    <p class="h6 name mb-0">design photo</p>
                </div> -->
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/marina-vitale-206980.jpg"  alt="" class="mw-100" />
                </a>
                <!-- <div class="content">
                    <h5 class="title mb-0">Art is freedom</h5>
                    <p class="h6 name mb-0">design photo</p>
                </div> -->
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/catherine-zaidova-6620.jpg"  alt="" class="mw-100" />
                </a>
                <!-- <div class="content">
                    <h5 class="title mb-0">Art is freedom</h5>
                    <p class="h6 name mb-0">design photo</p>
                </div> -->
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/scott-webb-367607.jpg"  alt="" class="mw-100" />
                </a>
                <!-- <div class="content">
                    <h5 class="title mb-0">Art is freedom</h5>
                    <p class="h6 name mb-0">design photo</p>
                </div> -->
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/joe-cooke-40727-1.jpg"  alt="" class="mw-100" />
                </a>
                <!-- <div class="content">
                    <h5 class="title mb-0">Art is freedom</h5>
                    <p class="h6 name mb-0">design photo</p>
                </div> -->
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/ruslan-bardash-351288.jpg"  alt="" class="mw-100" />
                </a>
                <!-- <div class="content">
                    <h5 class="title mb-0">Art is freedom</h5>
                    <p class="h6 name mb-0">design photo</p>
                </div> -->
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/09/alexandre-tsuchiya-333897.jpg"  alt="" class="mw-100" />
                </a>
                <!-- <div class="content">
                    <h5 class="title mb-0">Art is freedom</h5>
                    <p class="h6 name mb-0">design photo</p>
                </div> -->
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/marina-vitale-206980.jpg"  alt="" class="mw-100" />
                </a>
                <!-- <div class="content">
                    <h5 class="title mb-0">Art is freedom</h5>
                    <p class="h6 name mb-0">design photo</p>
                </div> -->
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/catherine-zaidova-6620.jpg"  alt="" class="mw-100" />
                </a>
                <!-- <div class="content">
                    <h5 class="title mb-0">Art is freedom</h5>
                    <p class="h6 name mb-0">design photo</p>
                </div> -->
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/scott-webb-367607.jpg"  alt="" class="mw-100" />
                </a>
                <!-- <div class="content">
                    <h5 class="title mb-0">Art is freedom</h5>
                    <p class="h6 name mb-0">design photo</p>
                </div> -->
            </div>
        </div>
    </div>
</div>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script>
$grid = $('.gallery-section');
var $listing = $grid.isotope({
// set itemSelector so .grid-sizer is not used in layout
itemSelector: '.gallery-box',
percentPosition: true,
masonry: {
// use element for option
gutter: '.gutter-sizer',
//isFitWidth: true,
}
});
/*$grid.imagesLoaded().progress( function() {
$grid.isotope('layout');
});*/
</script>
</body>
</html>
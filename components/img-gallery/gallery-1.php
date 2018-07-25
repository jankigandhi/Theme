<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" href="../Buttons/css/button.css">
<link rel="stylesheet" href="../../css/libs/glightbox.min.css">
<link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>
<body>
<?php $HederClass="bg-dark";?>
<?php include_once '../nav-bar/nav-bar.php';?>
<div class="container my-4">
    <h1 class="h2 text-center mt-3">Lightbox grid gallery</h1>
    <div class="p-4">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <a href="images/gallery-1.png" class="img-block d-block glightbox">
                    <div class="gallery-img hover-effect" style="background-image: url('images/gallery-1.png');"></div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <a href="images/gallery-2.png" class="img-block d-block glightbox">
                    <div class="gallery-img hover-effect" style="background-image: url('images/gallery-2.png');"></div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2821%29.jpg" class="img-block d-block glightbox">
                    <div class="gallery-img hover-effect" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2821%29.jpg');"></div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <a href="images/gallery-1.png" class="img-block d-block glightbox">
                    <div class="gallery-img hover-effect" style="background-image: url('images/gallery-1.png');"></div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <a href="images/gallery-1.png" class="img-block d-block glightbox">
                    <div class="gallery-img hover-effect" style="background-image: url('images/gallery-1.png');"></div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <a href="images/gallery-2.png" class="img-block d-block glightbox">
                    <div class="gallery-img hover-effect" style="background-image: url('images/gallery-2.png');"></div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2821%29.jpg" class="img-block d-block glightbox">
                    <div class="gallery-img hover-effect" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2821%29.jpg');"></div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <a href="images/gallery-1.png" class="img-block d-block glightbox">
                    <div class="gallery-img hover-effect" style="background-image: url('images/gallery-1.png');"></div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include_once '../../inc/footer.php';?>
<!-- light-box -->
<script src="../../js/glightbox.min.js"></script>
<script>
    var lightbox = GLightbox();
</script>
</body>
</html>

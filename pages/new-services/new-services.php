<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../components/card/css/card.css">
<link rel="stylesheet" href="../../components/breadcrumbs/css/breadcrumbs.css">
<link rel="stylesheet" href="../../components/testimonial/css/testimonial.css">
<link rel="stylesheet" href="css/new-services.css">
</head>
<body>
<?php $HederClass="header-transparent";?>
<?php include_once '../../components/nav-bar/nav-bar.php';?>
<main>
    <div class="services-section">
        <div class="banner-img" style="background-image:url('images/banner-image.jpg');">
            <div class="container">
                <div class="services-text">
                    <h2 class="text-white">Services</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-seaction">
            <div class="container">
                <ul class="breadcrumb py-3">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <i class="zmdi zmdi-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">
                            <i class="zmdi zmdi-shopping-basket"></i>
                            Pages
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Services</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="my-5 text-center">
                <h4 class="text-uppercase py-3">Capital Unlimitied Features</h4>
                <p class="sub-title">Absolutely Stunning Design and Functionality</p>
            </div>
            <div class="testimonial py-3 d-inline-block w-100">
                <div class="row">
                    <div class="col-md-4 col-sm-6 py-3">
                        <div class="custom-card card">
                            <div class="card-body text-center">
                                <div class="circle-img d-inline-block mt-0">
                                    <span class="round-img rounded-circle bg-primary">
                                        <i class="fas fa-power-off"></i>
                                    </span>
                                </div>
                                <h5 class="font-weight-medium">
                                <span class="d-block">Development</span>
                                </h5>
                                <hr>
                                <p class="light-gray small mb-0">
                                    <i class="fas fa-quote-left align-super"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci.
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
</body>
</html>
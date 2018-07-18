<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../css/libs/swiper.min.css">
<link rel="stylesheet" type="text/css" href="css/banner-slider.css">
</head>
<body>
<main>
    <!-- full screen banner -->
    <div class="banner-section">
        <div class="swiper-container h-100vh">
            <div class=" swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner" style="background-image: url('images/banner-3.jpg');"></div>
                </div>
                <div class="swiper-slide">
                    <div class="banner" style="background-image: url('images/banner-1.png');"></div>
                </div>
                <div class="swiper-slide">
                    <div class="banner" style="background-image: url('images/banner-2.png');"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="banner-slider-1.php" class="btn btn-dark">Bannerwith header</a>    
    </div>
    
</main>
<script src="../../js/swiper.min.js"></script>
    <script>
       var swiper = new Swiper('.banner-section .swiper-container', {
        slidesPerView: 1,
        effect: 'fade',
        autoplay: {
        delay: 3000,
        },
        });
    </script>
</body>
</html>
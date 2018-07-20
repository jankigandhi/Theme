<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../css/libs/swiper.min.css">
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" href="../nav-bar/css/nav-bar.css">
<link rel="stylesheet" href="../Buttons/css/button.css">
<link rel="stylesheet" href="css/banner-slider.css">
</head>
<body>
<main>
    <?php $HederClass="transparent absolute";?>
    <?php include_once '../nav-bar/nav-bar.php';?>
    <div class="banner-section w-100 d-inline-block">
        <div class="swiper-container">
            <div class=" swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner img" style="background-image: url('images/banner-3.jpg');"></div>
                </div>
                <div class="swiper-slide">
                    <div class="banner img" style="background-image: url('images/banner-1.png');"></div>
                </div>
                <div class="swiper-slide">
                    <div class="banner img" style="background-image: url('images/banner-2.png');"></div>
                </div>
            </div>
            <div class="next-btn swiper-button-next swiper-button-white"></div>
            <div class="prev-btn swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
</main>
<script src="../../js/swiper.min.js"></script>
<script>
var swiper = new Swiper('.banner-section .swiper-container', {
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
speed: 1000,
loop: true,
slidesPerView: 1,
autoplay: {
delay: 3000,
},
});
</script>
</body>
</html>

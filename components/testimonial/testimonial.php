<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../css/libs/swiper.min.css">
<link rel="stylesheet" type="text/css" href="css/testimonial.css">
</head>
<body>
<main>
    <div class="testimonial-content bg-dark py-5">
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-white">
                            <div class="p-3">
                                <h4 class="monials-title text-center">Google</h4>
                                <p class="monials-sub-title mb-2">Grammy award-winning artist</p>
                                <p class="mb-0">Where does the pure energy and drive of Grammy Award-winning artist, Pitbull come from? Learn how Pitbull's early-life introduction to Tony Robbins helped transform him into the internationally-renown man he is today.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white">
                            <div class="p-3">
                                <h4 class="monials-title text-center">Google</h4>
                                <p class="monials-sub-title mb-2">Grammy award-winning artist</p>
                                <p class="mb-0">Where does the pure energy and drive of Grammy Award-winning artist, Pitbull come from? Learn how Pitbull's early-life introduction to Tony Robbins helped transform him into the internationally-renown man he is today.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white">
                            <div class="p-3">
                                <h4 class="monials-title text-center">Google</h4>
                                <p class="monials-sub-title mb-2">Grammy award-winning artist</p>
                                <p class="mb-0">Where does the pure energy and drive of Grammy Award-winning artist, Pitbull come from? Learn how Pitbull's early-life introduction to Tony Robbins helped transform him into the internationally-renown man he is today.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white">
                            <div class="p-3">
                                <h4 class="monials-title text-center">Google</h4>
                                <p class="monials-sub-title mb-2">Grammy award-winning artist</p>
                                <p class="mb-0">Where does the pure energy and drive of Grammy Award-winning artist, Pitbull come from? Learn how Pitbull's early-life introduction to Tony Robbins helped transform him into the internationally-renown man he is today.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="next-btn swiper-button-next swiper-button-white"></div>
            <div class="prev-btn swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
</main>
<script src="../../js/swiper.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
slidesPerView: 3,
spaceBetween: 30,
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
breakpoints: {
1000: {
slidesPerView: 2,
spaceBetween: 40
},
768: {
slidesPerView: 1,
spaceBetween: 40
},
}
});
</script>
</body>
</html>
<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../css/libs/swiper.min.css">
<link rel="stylesheet" href="../../components/card/css/card.css">
<link rel="stylesheet" href="../../components/testimonial/css/testimonial.css">
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<?php $HederClass="fixed-header";?>
<?php include_once '../../components/nav-bar/nav-bar.php';?>
<main>
    <!-- banner-section -->
    <div class="banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-img swiper-lazy" style="background-image: url('../../images/banner-hotel.jpg');">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-img swiper-lazy" style="background-image: url('../../images/banner-hotel-4.jpg');">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-img swiper-lazy" style="background-image: url('../../images/banner-hotel-3.jpg');">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-img swiper-lazy" style="background-image: url('../../images/banner-hotel-6.jpg');">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-img swiper-lazy" style="background-image: url('../../images/banner-hotel-5.jpg');">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                </div>
            </div>
            <div class="btn-next swiper-button-next swiper-button-white"></div>
            <div class="btn-prev swiper-button-prev swiper-button-white"></div>
        </div>
        <div class="banner-content-section">
            <div class="banner-content mx-5 mt-sm-0 mt-5">
                <h2 class="text-white text-uppercase">To Travel is to live</h2>
                <p class="inst text-white">You Don't Need Magic to Disapper. All you need is a destination.</p>
                <div class="mt-4">
                    <button type="button" class="btn-thick btn-min-w btn btn-primary mx-1">
                    Show on the map
                    </button>
                    <button type="button" class="btn-thick btn-min-w btn btn-outline-white mx-1">
                    More info
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- find-search-section -->
    <div class="search-section mw-1280">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="border-line col-lg-2 col-md-3 py-3 px-3">
                    <div class="mt-md-4 mt-lg-0">
                        <span class="text-desc-gray text-uppercase">Find your</span>
                        <h4 class="font-weight-bold text-uppercase mb-0">Holidays</h4>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 py-3 px-3">
                    <form>
                        <div class="row mx-0">
                            <div class="px-0 col-xl-5 col-lg-4 col-sm-6">
                                <div class="form-group mb-0">
                                    <div class="input-with-icon">
                                        <input type="text" class="square-box form-control" name="destination" placeholder="destination" />
                                        <span class="icon"><i class="fas fa-globe-asia"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-0 col-xl-4 col-lg-4 col-sm-6">
                                <div class="form-group mb-0">
                                    <div class="input-with-icon">
                                        <input type="text" class="square-box form-control" name="date" placeholder="select date" />
                                        <span class="icon"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-0 col-xl-3 col-lg-4">
                                <button type="button" class="rounded-0 btn-block btn-thick btn-min-w btn btn-primary mb-0">
                                Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  about section -->
    <div class="py-5">
        <div class="container">
            <div class="row flex-row-reverse align-items-center">
                <div class="col-lg-6 col-md-4 py-3">
                    <div class="home-bg-img" style="background-image: url('../../images/banner-hotel.jpg');"></div>
                </div>
                <div class="col-lg-6 col-md-8 py-3">
                    <div>
                        <h5 class="text-uppercase">Welcome to the</h5>
                        <h3 class="text-uppercase">Lorem Ipsum is simply</h3>
                        <p class="light-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="#" class="btn-thick btn-min-w btn btn-outline-primary">
                            Readmore
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offer-section -->
    <div class="offer-section text-center py-5">
        <h3 class="text-uppercase">Special Offers</h3>
        <p class="light-gray">Best 2014 packages where people love to stay!</p>
        <div class="container">
            <div class="offer-slider offer-slider-2 my-4">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="custom-card card">
                                <div class="bg-img" style="background-image: url('../../images/hotel-1.jpg');"></div>
                                <div class="card-bg card-body text-left p-2">
                                    <h5 class="card-title font-weight-bold mb-2 text-uppercase">Hotel Name</h5>
                                    <div class="card-text d-inline-block w-100 light-gray">
                                        <p class="float-left small mb-0">Location</p>
                                        <p class="price float-right mb-0 font-weight-bold">$250</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="custom-card card">
                                <div class="bg-img" style="background-image: url('../../images/hotel-2.jpg');"></div>
                                <div class="card-bg card-body text-left p-2">
                                    <h5 class="card-title font-weight-bold mb-2 text-uppercase">Hotel Name</h5>
                                    <div class="card-text d-inline-block w-100 light-gray">
                                        <p class="float-left small mb-0">Location</p>
                                        <p class="price float-right mb-0 font-weight-bold">$250</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="custom-card card">
                                <div class="bg-img" style="background-image: url('../../images/banner-hotel.jpg');"></div>
                                <div class="card-bg card-body text-left p-2">
                                    <h5 class="card-title font-weight-bold mb-2 text-uppercase">Hotel Name</h5>
                                    <div class="card-text d-inline-block w-100 light-gray">
                                        <p class="float-left small mb-0">Location</p>
                                        <p class="price float-right mb-0 font-weight-bold">$250</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="custom-card card">
                                <div class="bg-img" style="background-image: url('../../images/banner-hotel-2.jpg');"></div>
                                <div class="card-bg card-body text-left p-2">
                                    <h5 class="card-title font-weight-bold mb-2 text-uppercase">Hotel Name</h5>
                                    <div class="card-text d-inline-block w-100 light-gray">
                                        <p class="float-left small mb-0">Location</p>
                                        <p class="price float-right mb-0 font-weight-bold">$250</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="custom-card card">
                                <div class="bg-img" style="background-image: url('../../images/banner-hotel-3.jpg');"></div>
                                <div class="card-bg card-body text-left p-2">
                                    <h5 class="card-title font-weight-bold mb-2 text-uppercase">Hotel Name</h5>
                                    <div class="card-text d-inline-block w-100 light-gray">
                                        <p class="float-left small mb-0">Location</p>
                                        <p class="price float-right mb-0 font-weight-bold">$250</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="custom-card card">
                                <div class="bg-img" style="background-image: url('../../images/banner-hotel-4.jpg');"></div>
                                <div class="card-bg card-body text-left p-2">
                                    <h5 class="card-title font-weight-bold mb-2 text-uppercase">Hotel Name</h5>
                                    <div class="card-text d-inline-block w-100 light-gray">
                                        <p class="float-left small mb-0">Location</p>
                                        <p class="price float-right mb-0 font-weight-bold">$250</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="custom-card card">
                                <div class="bg-img" style="background-image: url('../../images/banner-hotel-5.jpg');"></div>
                                <div class="card-bg card-body text-left p-2">
                                    <h5 class="card-title font-weight-bold mb-2 text-uppercase">Hotel Name</h5>
                                    <div class="card-text d-inline-block w-100 light-gray">
                                        <p class="float-left small mb-0">Location</p>
                                        <p class="price float-right mb-0 font-weight-bold">$250</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="custom-card card">
                                <div class="bg-img" style="background-image: url('../../images/banner-hotel-6.jpg');"></div>
                                <div class="card-bg card-body text-left p-2">
                                    <h5 class="card-title font-weight-bold mb-2 text-uppercase">Hotel Name</h5>
                                    <div class="card-text d-inline-block w-100 light-gray">
                                        <p class="float-left small mb-0">Location</p>
                                        <p class="price float-right mb-0 font-weight-bold">$250</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="btn-next swiper-button-next swiper-button-white"></div>
                    <div class="btn-prev swiper-button-prev swiper-button-white"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section -->
    <div class="service-section py-5 text-center">
        <div class="container">
            <h3 class="text-uppercase">Holidays type</h3>
            <p class="light-gray">Get explore your dream to travel the world!</p>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="circle-icon rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3">
                        <span class="icon"><i class="fas fa-hotel"></i></span>
                    </div>
                    <h5>Lorem Ipsum is</h5>
                    <p class="light-gray small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="font-weight-bold">Read more</a>
                </div>
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="circle-icon rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3">
                        <span class="icon"><i class="fas fa-home"></i></span>
                    </div>
                    <h5>Lorem Ipsum is</h5>
                    <p class="light-gray small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="font-weight-bold">Read more</a>
                </div>
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="circle-icon rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3">
                        <span class="icon"><i class="fas fa-grin-hearts"></i></span>
                    </div>
                    <h5>Lorem Ipsum is</h5>
                    <p class="light-gray small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="font-weight-bold">Read more</a>
                </div>
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="circle-icon rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3">
                        <span class="icon"><i class="fas fa-camera-retro"></i></span>
                    </div>
                    <h5>Lorem Ipsum is</h5>
                    <p class="light-gray small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="font-weight-bold">Read more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- parallax banner -->
    <div class="banner parallax-banner parallax-banner-sh">
        <div class="banner-img" style="background-image: url('../../images/banner-hotel-6.jpg');"></div>
        <div class="banner-content-section">
            <div class="banner-content">
                <div class="container">
                    <h3 class="h2 text-white text-uppercase">Star hotel</h3>
                    <p class="desc text-desc-gray mx-auto text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <button type="button" class="btn-thick btn-min-w btn btn-outline-white">
                    More info
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-section -->
    <div class="testimonial-section text-center py-5">
        <div class="container">
            <h3 class="text-uppercase">Happy Clients</h3>
            <p class="light-gray">What customer say about us and why love our services!</p>
            <div class="testimonial testimonial-slider my-4">
                <div class="swiper-container pb-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blockquote light-gray p-4 rounded mb-0">
                                <div>
                                    <div class="circle-img mx-auto">
                                        <div class="round-img rounded-circle" style="background-image: url('../../images/img-3.jpg');"></div>
                                    </div>
                                    <div>
                                        <div class="small font-italic mb-3">
                                            <i class="text-primary fas fa-quote-left align-super"></i>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                        </div>
                                        <h6 class="text-primary mb-0 text-center text-uppercase font-weight-bold">
                                        Yash
                                        <span class="d-block font-weight-bold font-italic">Frontend Developer</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blockquote light-gray p-4 rounded mb-0">
                                <div>
                                    <div class="circle-img mx-auto">
                                        <div class="round-img rounded-circle" style="background-image: url('../../images/img-7.jpg');"></div>
                                    </div>
                                    <div>
                                        <div class="small font-italic mb-3">
                                            <i class="text-primary fas fa-quote-left align-super"></i>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
                                        </div>
                                        <h6 class="text-primary mb-0 text-center text-uppercase font-weight-bold">
                                        Chirag
                                        <span class="d-block font-weight-bold font-italic">Web Developer</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blockquote light-gray p-4 rounded mb-0">
                                <div>
                                    <div class="circle-img mx-auto">
                                        <div class="round-img rounded-circle" style="background-image: url('../../images/img-8.jpg');"></div>
                                    </div>
                                    <div>
                                        <div class="small font-italic mb-3">
                                            <i class="text-primary fas fa-quote-left align-super"></i>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                        </div>
                                        <h6 class="text-primary mb-0 text-center text-uppercase font-weight-bold">
                                        Janki
                                        <span class="d-block font-weight-bold font-italic">Web designer</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blockquote light-gray p-4 rounded mb-0">
                                <div>
                                    <div class="circle-img mx-auto">
                                        <div class="round-img rounded-circle" style="background-image: url('../../images/img-6.jpg');"></div>
                                    </div>
                                    <div>
                                        <div class="small font-italic mb-3">
                                            <i class="text-primary fas fa-quote-left align-super"></i>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
                                        </div>
                                        <h6 class="text-primary mb-0 text-center text-uppercase font-weight-bold">
                                        Chirag
                                        <span class="d-block font-weight-bold font-italic">Web Developer</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once '../../components/footer/footer.php';?>
<?php include_once '../../inc/foot.php';?>
<script src="../../js/swiper.min.js"></script>
<script>
var swiper = new Swiper('.banner .swiper-container', {
effect: 'fade',
preloadImages: false,
lazy: true,
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
speed: 1500,
slidesPerView: 1,
autoplay: {
delay: 2000,
},
});
var swiper = new Swiper('.testimonial-slider .swiper-container', {
slidesPerView: 1,
effect: 'fade',
simulateTouch : true,
loop: true,
grabCursor: true,
speed: 1000,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
autoplay: {
delay: 3000,
},
});
var swiper = new Swiper('.offer-slider .swiper-container', {
slidesPerView: 3,
spaceBetween: 20,
grabCursor: true,
loop: true,
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
speed: 1000,
autoplay: {
delay: 3000,
},
breakpoints: {
767: {
slidesPerView: 2,
},
576: {
slidesPerView: 1,
},
}
});
</script>
</body>
</html>

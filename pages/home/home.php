<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../css/libs/swiper.min.css">
<link rel="stylesheet" href="../../components/card/css/card.css">
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<?php $HederClass="header-transparent";?>
<?php include_once '../../components/nav-bar/nav-bar.php';?>
<main>
  <!-- banner-section -->
  <div class="banner">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="banner-img" style="background-image: url('../../images/banner-2.png');"></div>
        </div>
        <div class="swiper-slide">
          <div class="banner-img" style="background-image: url('../../images/banner.png');"></div>
        </div>
        <div class="swiper-slide">
          <div class="banner-img" style="background-image: url('../../images/banner-2.png');"></div>
        </div>
      </div>
      <div class="btn-next swiper-button-next swiper-button-white"></div>
      <div class="btn-prev swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="banner-content">
      <div class="center-content mx-5 mt-sm-0 mt-5">
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
  <!-- find-section -->
  <div class="find-section">
    <div class="container">
      <div class="row mx-0 align-items-lg-center">
        <div class="border-line col-lg-2 col-md-3 py-3 px-md-3 px-0">
          <div class="mt-md-4 mt-lg-0">
            <span class="text-uppercase off-white">Find your</span>
            <h4 class="font-weight-bold text-uppercase mb-0 text-white">Holidays</h4>
          </div>
        </div>
        <div class="col-lg-10 col-md-9 py-3 px-md-3 px-0">
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
              <div class="px-0 col-xl-5 col-lg-4 col-sm-6">
                <div class="form-group mb-0">
                  <div class="input-with-icon">
                    <input type="text" class="square-box form-control" name="date" placeholder="select date" />
                    <span class="icon"><i class="far fa-calendar-alt"></i></span>
                  </div>
                </div>
              </div>
              <div class="px-0 col-xl-2 col-lg-4">
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
  <!-- offer-section -->
  <div class="offer-section text-center py-5">
    <h3 class="text-uppercase">Special Offers</h3>
    <p class="light-gray">Best 2014 packages where people love to stay!</p>
    <div class="offer-slider my-4">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="custom-card card">
              <div class="bg-img" style="background-image: url('http://www.pacifichoteldehradun.in/images/dehradun_landing_page.jpg');"></div>
              <div class="card-bg card-body text-left p-2">
                <h5 class="card-title font-weight-bold mb-2">Card title</h5>
                <p class="card-text small mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="custom-card card">
              <div class="bg-img" style="background-image: url('http://www.pacifichoteldehradun.in/images/dehradun_landing_page.jpg');"></div>
              <div class="card-bg card-body text-left p-2">
                <h5 class="card-title font-weight-bold mb-2">Card title</h5>
                <p class="card-text small mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="custom-card card">
              <div class="bg-img" style="background-image: url('http://www.pacifichoteldehradun.in/images/dehradun_landing_page.jpg');"></div>
              <div class="card-bg card-body text-left p-2">
                <h5 class="card-title font-weight-bold mb-2">Card title</h5>
                <p class="card-text small mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="custom-card card">
              <div class="bg-img" style="background-image: url('http://www.pacifichoteldehradun.in/images/dehradun_landing_page.jpg');"></div>
              <div class="card-bg card-body text-left p-2">
                <h5 class="card-title font-weight-bold mb-2">Card title</h5>
                <p class="card-text small mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="custom-card card">
              <div class="bg-img" style="background-image: url('http://www.pacifichoteldehradun.in/images/dehradun_landing_page.jpg');"></div>
              <div class="card-bg card-body text-left p-2">
                <h5 class="card-title font-weight-bold mb-2">Card title</h5>
                <p class="card-text small mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="custom-card card">
              <div class="bg-img" style="background-image: url('http://www.pacifichoteldehradun.in/images/dehradun_landing_page.jpg');"></div>
              <div class="card-bg card-body text-left p-2">
                <h5 class="card-title font-weight-bold mb-2">Card title</h5>
                <p class="card-text small mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="custom-card card">
              <div class="bg-img" style="background-image: url('http://www.pacifichoteldehradun.in/images/dehradun_landing_page.jpg');"></div>
              <div class="card-bg card-body text-left p-2">
                <h5 class="card-title font-weight-bold mb-2">Card title</h5>
                <p class="card-text small mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="custom-card card">
              <div class="bg-img" style="background-image: url('http://www.pacifichoteldehradun.in/images/dehradun_landing_page.jpg');"></div>
              <div class="card-bg card-body text-left p-2">
                <h5 class="card-title font-weight-bold mb-2">Card title</h5>
                <p class="card-text small mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- parallax banner -->
  <div class="banner parallax-banner">
    <div class="banner-img" style="background-image: url('../../images/banner-2.png');"></div>
    <div class="banner-content">
      <div class="center-content mx-5 mt-sm-0 mt-5">
        <h4 class="text-white text-uppercase">Holidays type</h4>
        <p class="off-white">get explore your dream to travel the world!</p>
        <div class="w-100 d-inline-block mt-4">
          <div class="type d-inline-block align-top p-2">
            <div class="circle-icon rounded-circle d-flex justify-content-center align-items-center">
              <span class="icon"><i class="fas fa-hotel"></i></span>
            </div>
            <p class="name">Cruise</p>
          </div>
          <div class="type d-inline-block align-top p-2">
            <div class="circle-icon rounded-circle d-flex justify-content-center align-items-center">
              <span class="icon"><i class="fas fa-hotel"></i></span>
            </div>
            <p class="name">Cruise</p>
          </div>
          <div class="type d-inline-block align-top p-2">
            <div class="circle-icon rounded-circle d-flex justify-content-center align-items-center">
              <span class="icon"><i class="fas fa-hotel"></i></span>
            </div>
            <p class="name">Cruise</p>
          </div>
          <div class="type d-inline-block align-top p-2">
            <div class="circle-icon rounded-circle d-flex justify-content-center align-items-center">
              <span class="icon"><i class="fas fa-hotel"></i></span>
            </div>
            <p class="name">Cruise</p>
          </div>
          <div class="type d-inline-block align-top p-2">
            <div class="circle-icon rounded-circle d-flex justify-content-center align-items-center">
              <span class="icon"><i class="fas fa-hotel"></i></span>
            </div>
            <p class="name">Cruise</p>
          </div>
          <div class="type d-inline-block align-top p-2">
            <div class="circle-icon rounded-circle d-flex justify-content-center align-items-center">
              <span class="icon"><i class="fas fa-hotel"></i></span>
            </div>
            <p class="name">Cruise</p>
          </div>
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
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
speed: 1000,
slidesPerView: 1,
autoplay: {
delay: 3000,
},
});
var swiper = new Swiper('.offer-slider .swiper-container', {
slidesPerView: 'auto',
spaceBetween: 20,
simulateTouch : true,
loop: true,
centeredSlides: true,
grabCursor: true,
speed: 1000,
autoplay: {
delay: 3000,
},
breakpoints: {
992: {
spaceBetween: 10,
},
}
});
</script>
</body>
</html>

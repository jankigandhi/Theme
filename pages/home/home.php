<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../../css/libs/swiper.min.css">
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<?php $HederClass="header-transparent";?>
<?php include_once '../../components/nav-bar/nav-bar.php';?>
<main>
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
          Primary
          </button>
          <button type="button" class="btn-thick btn-min-w btn btn-outline-white mx-1">
          Primary
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="find-section">
    <div class="container">
      <div class="row mx-0 p-3 align-items-center">
        <div class="col-lg-2 col-md-3 pb-md-0 pb-3 pl-md-0">
          <span class="text-uppercase off-white">Find your</span>
          <h4 class="font-weight-bold text-uppercase mb-0 text-white">Holidays</h4>
        </div>
        <div class="col-lg-10 col-md-9 pb-md-0 pb-3">
          <form>
            <div class="row mx-0">
              <div class="px-0 col-xl-5 col-lg-4 col-sm-6">
                <div class="form-group mb-0">
                  <label class="off-white">Where</label>
                  <div class="input-with-icon">
                    <input type="text" class="square-box form-control" name="destination" placeholder="destination" />
                    <span class="icon"><i class="fas fa-globe-asia"></i></span>
                  </div>
                </div>
              </div>
              <div class="px-0 col-xl-5 col-lg-4 col-sm-6">
                <div class="form-group mb-0">
                  <label class="off-white">When</label>
                  <div class="input-with-icon">
                    <input type="text" class="square-box form-control" name="destination" placeholder="destination" />
                    <span class="icon"><i class="far fa-calendar-alt"></i></span>
                  </div>
                </div>
              </div>
              <div class="px-0 col-xl-2 col-lg-4">
                <label class="text-white invisible">search</label>
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
</main>
<?php include_once '../../components/footer/footer.php';?>
<?php include_once '../../inc/foot.php';?>
<script src="../../js/swiper.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
speed: 1000,
slidesPerView: 1,
// autoplay: {
// delay: 3000,
// },
});
</script>
</body>
</html>

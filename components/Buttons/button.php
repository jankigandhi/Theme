<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" href="css/button.css">
</head>
<body>
<?php $HederClass="bg-dark";?>
<?php include_once '../nav-bar/nav-bar.php';?>
<div class="container text-md-left text-center">
  <h1 class="h2 text-center mt-3">Buttons</h1>
  <!-- Basic -->
  <div class="py-4">
    <h4>Default</h4>
    <div class="py-3">
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-secondary">Secondary</button>
      <button type="button" class="btn btn-success">Success</button>
      <button type="button" class="btn btn-danger">Danger</button>
      <button type="button" class="btn btn-warning">Warning</button>
      <button type="button" class="btn btn-info">Info</button>
      <button type="button" class="btn btn-light">Light</button>
      <button type="button" class="btn btn-dark">Dark</button>
      <button type="button" class="btn btn-link">Link</button>
    </div>
  </div>
  <!-- Effect-1 -->
  <div class="py-4">
    <h4>Hover effects</h4>
    <div class="py-3">
      <button type="button" class="btn-thick btn-min-w rounded-0 btn btn-outline-primary">
        Primary
      </button>
      <button type="button" class="btn-effect btn-min-w btn-thick rounded-0 btn btn-outline-secondary">
        <span>Secondary</span>
      </button>
      <button type="button" class="btn-effect btn-min-w effect-1 btn-thick rounded-0 btn btn-outline-success">
        <span>Success</span>
      </button>
      <button type="button" class="btn-effect btn-min-w effect-2 btn-thick rounded-0 btn btn-outline-danger">
        <span>Danger</span>
      </button>
      <button type="button" class="btn-effect btn-min-w effect-3 btn-thick rounded-0 btn btn-outline-warning">
        <span>Warning</span>
      </button>
      <button type="button" class="btn-effect btn-min-w effect-4 btn-thick rounded-0 btn btn-outline-info">
        <span>Info</span>
      </button>
      <button type="button" class="btn-effect btn-min-w effect-5 btn-thick rounded-0 btn btn-outline-dark">
        <span>Dark</span>
      </button>
    </div>
  </div>
  <!-- Effect-2 -->
  <div class="py-4">
    <h4>Buttton with icons</h4>
    <div class="py-3">
      <button type="button" class="btn-effect-2 btn-min-w btn-thick rounded-0 btn btn-primary">
      <i class="btn-icon zmdi zmdi-shopping-cart"></i>
      Primary
      </button>
      <button type="button" class="btn-effect-2 btn-min-w btn-thick rounded-0 btn btn-secondary">
      <i class="btn-icon zmdi zmdi-shopping-cart-plus"></i>
      Secondary
      </button>
      <button type="button" class="btn-effect-2 btn-min-w btn-thick rounded-0 btn btn-success">
      <i class="btn-icon zmdi zmdi-search"></i>
      Success
      </button>
      <button type="button" class="btn-effect-2 btn-min-w btn-thick rounded-0 btn btn-danger">
      <i class="btn-icon zmdi zmdi-mail-send"></i>
      Danger
      </button>
      <button type="button" class="btn-effect-2 btn-min-w btn-thick rounded-0 btn btn-warning">
      <i class="btn-icon zmdi zmdi-email-open"></i>
      Warning
      </button>
      <button type="button" class="btn-effect-2 btn-min-w btn-thick rounded-0 btn btn-info">
      <i class="btn-icon zmdi zmdi-favorite"></i>
      Info
      </button>
      <button type="button" class="btn-effect-2 btn-min-w btn-thick rounded-0 btn btn-dark">
      <i class="btn-icon zmdi zmdi-edit"></i>
      Dark
      </button>
    </div>
  </div>
  <!--  Effect-3 -->
  <div class="py-4">
    <h4>Hover effect with icons</h4>
    <div class="row">
      <div class="col-md-6">
        <!-- Effect-3 first demo-->
        <h4>Square style</h4>
        <div class="py-3">
          <button type="button" class="btn-effect-3 btn-min-w btn-thick rounded-0 btn btn-primary">
          <span class="btn-text">Primary</span>
          <span class="btn-icon">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 btn-min-w btn-thick rounded-0 btn btn-secondary">
          <span class="btn-text text-2e">Secondary</span>
          <span class="btn-icon icon-2e">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-1 btn-min-w btn-thick rounded-0 btn btn-success">
          <span class="btn-text">Success</span>
          <span class="btn-icon">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-1 btn-min-w btn-thick rounded-0 btn btn-info">
          <span class="btn-text text-2e">Info</span>
          <span class="btn-icon icon-2e">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-2 btn-min-w btn-thick rounded-0 btn btn-outline-warning">
          <span class="btn-text">Warning</span>
          <span class="btn-icon">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-2 btn-min-w btn-thick rounded-0 btn btn-outline-danger">
          <span class="btn-text text-2e">Danger</span>
          <span class="btn-icon icon-2e">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 btn-min-w btn-thick rounded-0 btn btn-outline-primary">
          <span class="btn-text">Primary</span>
          <span class="btn-icon">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 btn-min-w btn-thick rounded-0 btn btn-outline-dark">
          <span class="btn-text text-2e">Dark</span>
          <span class="btn-icon icon-2e">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
        </div>
      </div>
      <div class="col-md-6">
        <!-- Effect-3 second demo-->
        <h4>Rounded style <small>Just add <code>btn-rounded</code> class.</small></h4>
        <div class="py-3">
          <button type="button" class="btn-effect-3 btn-min-w btn-thick btn-rounded btn btn-primary">
          <span class="btn-text">Primary</span>
          <span class="btn-icon">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 btn-min-w btn-thick btn-rounded btn btn-secondary">
          <span class="btn-text text-2e">Secondary</span>
          <span class="btn-icon icon-2e">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-1 btn-min-w btn-thick btn-rounded btn btn-success">
          <span class="btn-text">Success</span>
          <span class="btn-icon">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-1 btn-min-w btn-thick btn-rounded btn btn-info">
          <span class="btn-text text-2e">Info</span>
          <span class="btn-icon icon-2e">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-2 btn-min-w btn-thick btn-rounded btn btn-outline-warning">
          <span class="btn-text">Warning</span>
          <span class="btn-icon">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-2 btn-min-w btn-thick btn-rounded btn btn-outline-danger">
          <span class="btn-text text-2e">Danger</span>
          <span class="btn-icon icon-2e">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 btn-min-w btn-thick btn-rounded btn btn-outline-primary">
          <span class="btn-text">Primary</span>
          <span class="btn-icon">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 btn-min-w btn-thick btn-rounded btn btn-outline-dark">
          <span class="btn-text text-2e">Dark</span>
          <span class="btn-icon icon-2e">
            <i class="zmdi zmdi-shopping-cart"></i>
          </span>
          </button>
        </div>
      </div>
      <!--  Effect-3 third demo -->
      <div class="col-md-6">
        <div class="py-3">
          <button type="button" class="btn-effect-3 btn-min-w btn-thick rounded-0 btn btn-primary">
          <span class="btn-text text-3e">Primary</span>
          <span class="btn-icon icon-3e right">
            <i class="zmdi zmdi-long-arrow-right"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 btn-min-w btn-thick rounded-0 btn btn-secondary">
          <span class="btn-text text-3e">Secondary</span>
          <span class="btn-icon icon-3e left">
            <i class="zmdi zmdi-long-arrow-left"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 btn-min-w btn-thick rounded-0 btn btn-success">
          <span class="btn-text text-3e">Success</span>
          <span class="btn-icon icon-3e rightin">
            <i class="zmdi zmdi-long-arrow-right"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 btn-min-w btn-thick rounded-0 btn btn-danger">
          <span class="btn-text text-3e">Danger</span>
          <span class="btn-icon icon-3e leftin">
            <i class="zmdi zmdi-long-arrow-left"></i>
          </span>
          </button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="py-3">
          <button type="button" class="btn-effect-3 btn-min-w btn-thick btn-rounded btn btn-primary">
          <span class="btn-text text-3e">Primary</span>
          <span class="btn-icon icon-3e right">
            <i class="zmdi zmdi-long-arrow-right"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 btn-min-w btn-thick btn-rounded btn btn-secondary">
          <span class="btn-text text-3e">Secondary</span>
          <span class="btn-icon icon-3e left">
            <i class="zmdi zmdi-long-arrow-left"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 btn-min-w btn-thick btn-rounded btn btn-success">
          <span class="btn-text text-3e">Success</span>
          <span class="btn-icon icon-3e rightin">
            <i class="zmdi zmdi-long-arrow-right"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 btn-min-w btn-thick btn-rounded btn btn-danger">
          <span class="btn-text text-3e">Danger</span>
          <span class="btn-icon icon-3e leftin">
            <i class="zmdi zmdi-long-arrow-left"></i>
          </span>
          </button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="py-3">
          <button type="button" class="btn-effect-3 effect-2 btn-min-w btn-thick rounded-0 btn btn-outline-primary">
          <span class="btn-text text-3e">Primary</span>
          <span class="btn-icon icon-3e right">
            <i class="zmdi zmdi-long-arrow-right"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-2 btn-min-w btn-thick rounded-0 btn btn-outline-secondary">
          <span class="btn-text text-3e">Secondary</span>
          <span class="btn-icon icon-3e left">
            <i class="zmdi zmdi-long-arrow-left"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-2 btn-min-w btn-thick rounded-0 btn btn-outline-success">
          <span class="btn-text text-3e">Success</span>
          <span class="btn-icon icon-3e rightin">
            <i class="zmdi zmdi-long-arrow-right"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-2 btn-min-w btn-thick rounded-0 btn btn-outline-danger">
          <span class="btn-text text-3e">Danger</span>
          <span class="btn-icon icon-3e leftin">
            <i class="zmdi zmdi-long-arrow-left"></i>
          </span>
          </button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="py-3">
          <button type="button" class="btn-effect-3 effect-2 btn-min-w btn-thick btn-rounded btn btn-outline-primary">
          <span class="btn-text text-3e">Primary</span>
          <span class="btn-icon icon-3e right">
            <i class="zmdi zmdi-long-arrow-right"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-2 btn-min-w btn-thick btn-rounded btn btn-outline-secondary">
          <span class="btn-text text-3e">Secondary</span>
          <span class="btn-icon icon-3e left">
            <i class="zmdi zmdi-long-arrow-left"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-2 btn-min-w btn-thick btn-rounded btn btn-outline-success">
          <span class="btn-text text-3e">Success</span>
          <span class="btn-icon icon-3e rightin">
            <i class="zmdi zmdi-long-arrow-right"></i>
          </span>
          </button>
          <button type="button" class="btn-effect-3 effect-2 btn-min-w btn-thick btn-rounded btn btn-outline-danger">
          <span class="btn-text text-3e">Danger</span>
          <span class="btn-icon icon-3e leftin">
            <i class="zmdi zmdi-long-arrow-left"></i>
          </span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once '../footer/footer.php';?>
<?php include_once '../../inc/foot.php';?>
</body>
</html>

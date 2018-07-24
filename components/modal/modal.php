<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" href="../Buttons/css/button.css">
<link rel="stylesheet" type="text/css" href="../form-input/css/form-input.css">
<link rel="stylesheet" type="text/css" href="css/modal.css">
</head>
<body class="modal-open">
<?php $HederClass="bg-dark";?>
<?php include_once '../nav-bar/nav-bar.php';?>
<div class="container my-5">
  <h1 class="h2 text-center mt-3">Modals</h1>
  <!-- buttons -->
  <div class="row text-center my-5">
    <div class="col-lg-3 col-sm-6">
      <button type="button" class="basic-modal-btn btn-thick btn-min-w rounded-0 btn btn-outline-primary">
      Basic
      </button>
    </div>
    <div class="col-lg-3 col-sm-6">
      <button type="button" class="scroll-modal-btn btn-thick btn-min-w rounded-0 btn btn-outline-primary">
      Long Scrolling Modal
      </button>
    </div>
    <div class="col-lg-3 col-sm-6">
      <button type="button" class="signup-btn btn-thick btn-min-w rounded-0 btn btn-outline-primary">
      Signup form
      </button>
    </div>
    <div class="col-lg-3 col-sm-6">
      <button type="button" class="iframe-btn btn-thick btn-min-w rounded-0 btn btn-outline-primary">
      Iframe
      </button>
    </div>
  </div>
  <!-- Modals -->
  <div>
    <!-- Modal -->
    <div class="basic-modal modal fade scroll">
      <div class="modal-dialog modal-dialog-centered scroll-dialog my-0 mx-auto p-3">
        <div class="modal-content border-0 rounded-0">
          <div class="modal-header d-inline-block w-100 p-md-4">
            <button type="button" class="close-btn close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title mt-4 font-weight-medium">Hey there, I'm a cool multi-purpose modal. Use me for almost anything!</h4>
          </div>
          <div class="modal-body p-md-4">
            <h5 class="font-weight-medium">Title</h5>
            <p class="light-gray small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec aliquam ligula. Mauris eget porttitor eros. Donec eleifend, metus volutpat finibus ullamcorper, dui leo sodales arcu, sed accumsan arcu enim a magna. Cras ut felis euismod, mattis justo id, euismod purus. Fusce vel sapien ante. Vivamus ut vehicula dui, at commodo orci. Duis eu gravida lorem. Integer lobortis libero vitae erat aliquet, luctus tempus ipsum euismod.</p>
            <h5 class="font-weight-medium">Title1</h5>
            <p class="light-gray small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec aliquam ligula. Mauris eget porttitor eros. Donec eleifend, metus volutpat finibus ullamcorper, dui leo sodales arcu, sed accumsan arcu enim a magna. Cras ut felis euismod, mattis justo id, euismod purus. Fusce vel sapien ante. Vivamus ut vehicula dui, at commodo orci. Duis eu gravida lorem. Integer lobortis libero vitae erat aliquet, luctus tempus ipsum euismod.</p>
          </div>
          <div class="modal-footer d-inline-block w-100 text-right p-md-4">
            <button type="button" class="btn-thick rounded-0 btn btn-outline-secondary py-2">Close</button>
            <button type="button" class="btn-thick rounded-0 btn btn-outline-primary py-2">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- scrolling modal -->
    <div class="scroll-modal modal fade scroll">
      <div class="modal-dialog modal-dialog-centered scroll-dialog my-0 mx-auto">
        <div class="modal-content border-0 rounded-0">
          <div class="modal-header d-inline-block w-100 p-md-4">
            <button type="button" class="close-btn close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title font-weight-medium mt-4">Hey there, I'm a cool multi-purpose modal. Use me for almost anything!</h4>
          </div>
          <div class="modal-body p-md-4">
            <h5 class="font-weight-medium">Title</h5>
            <p class="light-gray small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec aliquam ligula. Mauris eget porttitor eros. Donec eleifend, metus volutpat finibus ullamcorper, dui leo sodales arcu, sed accumsan arcu enim a magna. Cras ut felis euismod, mattis justo id, euismod purus. Fusce vel sapien ante. Vivamus ut vehicula dui, at commodo orci. Duis eu gravida lorem. Integer lobortis libero vitae erat aliquet, luctus tempus ipsum euismod.</p>
            <h5 class="font-weight-medium">Title1</h5>
            <p class="light-gray small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec aliquam ligula. Mauris eget porttitor eros. Donec eleifend, metus volutpat finibus ullamcorper, dui leo sodales arcu, sed accumsan arcu enim a magna. Cras ut felis euismod, mattis justo id, euismod purus. Fusce vel sapien ante. Vivamus ut vehicula dui, at commodo orci. Duis eu gravida lorem. Integer lobortis libero vitae erat aliquet, luctus tempus ipsum euismod.</p>
            <h5 class="font-weight-medium">Title2</h5>
            <p class="light-gray small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec aliquam ligula. Mauris eget porttitor eros. Donec eleifend, metus volutpat finibus ullamcorper, dui leo sodales arcu, sed accumsan arcu enim a magna. Cras ut felis euismod, mattis justo id, euismod purus. Fusce vel sapien ante. Vivamus ut vehicula dui, at commodo orci. Duis eu gravida lorem. Integer lobortis libero vitae erat aliquet, luctus tempus ipsum euismod.</p>
            <h5 class="font-weight-medium">Title3</h5>
            <p class="light-gray small">Duis consectetur mauris sed odio congue mollis. Phasellus in purus aliquam, ultrices mauris a, congue ipsum. Nunc lacinia diam non mauris pulvinar, sed euismod purus varius. Vestibulum interdum, mauris id lacinia tristique, risus nunc rhoncus enim, commodo mattis arcu ligula ut arcu. Vivamus viverra fringilla augue, vitae mattis eros feugiat consectetur. Vivamus hendrerit est vitae leo commodo, eget suscipit sapien mollis.</p>
            <h5 class="font-weight-medium">Title4</h5>
            <p class="light-gray small">Duis consectetur mauris sed odio congue mollis. Phasellus in purus aliquam, ultrices mauris a, congue ipsum. Nunc lacinia diam non mauris pulvinar, sed euismod purus varius. Vestibulum interdum, mauris id lacinia tristique, risus nunc rhoncus enim, commodo mattis arcu ligula ut arcu. Vivamus viverra fringilla augue, vitae mattis eros feugiat consectetur. Vivamus hendrerit est vitae leo commodo, eget suscipit sapien mollis.</p>
            <h5 class="font-weight-medium">Title5</h5>
            <p class="light-gray small">Duis consectetur mauris sed odio congue mollis. Phasellus in purus aliquam, ultrices mauris a, congue ipsum. Nunc lacinia diam non mauris pulvinar, sed euismod purus varius. Vestibulum interdum, mauris id lacinia tristique, risus nunc rhoncus enim, commodo mattis arcu ligula ut arcu. Vivamus viverra fringilla augue, vitae mattis eros feugiat consectetur. Vivamus hendrerit est vitae leo commodo, eget suscipit sapien mollis.</p>
            <h5 class="font-weight-medium">Title6</h5>
            <p class="light-gray small">Duis consectetur mauris sed odio congue mollis. Phasellus in purus aliquam, ultrices mauris a, congue ipsum. Nunc lacinia diam non mauris pulvinar, sed euismod purus varius. Vestibulum interdum, mauris id lacinia tristique, risus nunc rhoncus enim, commodo mattis arcu ligula ut arcu. Vivamus viverra fringilla augue, vitae mattis eros feugiat consectetur. Vivamus hendrerit est vitae leo commodo, eget suscipit sapien mollis.</p>
            <h5 class="font-weight-medium">Title7</h5>
            <p class="light-gray small">Duis consectetur mauris sed odio congue mollis. Phasellus in purus aliquam, ultrices mauris a, congue ipsum. Nunc lacinia diam non mauris pulvinar, sed euismod purus varius. Vestibulum interdum, mauris id lacinia tristique, risus nunc rhoncus enim, commodo mattis arcu ligula ut arcu. Vivamus viverra fringilla augue, vitae mattis eros feugiat consectetur. Vivamus hendrerit est vitae leo commodo, eget suscipit sapien mollis.</p>
          </div>
          <div class="modal-footer d-inline-block w-100 text-right p-md-4">
            <button type="button" class="btn-thick rounded-0 btn btn-outline-secondary py-2">Close</button>
            <button type="button" class="btn-thick rounded-0 btn btn-outline-primary py-2">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- signup form -->
    <div class="signup-modal modal fade scroll">
      <div class="modal-dialog modal-dialog-centered scroll-dialog my-0 mx-auto p-3">
        <div class="modal-content border-0 rounded-0">
          <div class="modal-header d-inline-block w-100 p-md-4">
            <button type="button" class="close-btn close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body p-md-4">
            <form class="text-center">
              <h2 class="text-uppercase">Sign up</h2>
              <p class="light-gray">Stay in the loop with our awesome newsletter. We'll send you monthly updates of our latest and greatest tools and resources</p>
              <div class="row mt-5 mb-3 mx-0">
                <div class="col-sm-6">
                  <div class="form-group mb-0">
                    <input type="email" class="square-box form-control" placeholder="EMAIL ADDRESS">
                  </div>
                </div>
                <div class="col-sm-6">
                  <button class="btn-thick btn-block rounded-0 btn btn-primary">Sign up</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Iframe -->
    <div class="iframe-modal modal fade">
      <div class="modal-lg modal-dialog modal-dialog-centered scroll-dialog my-0 mx-auto p-3">
        <div class="modal-content border-0 rounded-0 bg-transparent">
          <div class="modal-header d-inline-block w-100 p-md-4 border-0">
            <button type="button" class="close-btn close text-white px-0">
            <span class="ti-close"></span>
            </button>
          </div>
          <div class="modal-body p-0">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-backdrop fade"></div>
</div>
<?php include_once '../../inc/footer.php';?>
</body>
</html>

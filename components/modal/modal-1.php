<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" href="../Buttons/css/button.css">
<link rel="stylesheet" type="text/css" href="css/modal.css">
</head>
<body class="modal-open">
<div class="container my-5">
  <h1 class="h2 text-center mt-3">Modals</h1>
  <!-- buttons -->
  <div class="row text-center my-5">
    <div class="col-md-3">
      <button type="button" class="btn-thick btn-min-w rounded-0 btn btn-outline-primary">
      Basic
      </button>
    </div>
    <div class="col-md-3">
      <button type="button" class="btn-thick btn-min-w rounded-0 btn btn-outline-primary">
      Long Scrolling Modal
      </button>
    </div>
  </div>
  <!-- Modals -->
  <div>
    <!-- Modal -->
    <div class="modal fade" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-weight-bold">Hey there, I'm a cool multi-purpose modal. Use me for almost anything!</h5>
            <button type="button" class="close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="light-gray small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec aliquam ligula. Mauris eget porttitor eros. Donec eleifend, metus volutpat finibus ullamcorper, dui leo sodales arcu, sed accumsan arcu enim a magna. Cras ut felis euismod, mattis justo id, euismod purus. Fusce vel sapien ante. Vivamus ut vehicula dui, at commodo orci. Duis eu gravida lorem. Integer lobortis libero vitae erat aliquet, luctus tempus ipsum euismod. Mauris sagittis dolor dui, et ullamcorper risus volutpat tristique. Suspendisse euismod feugiat erat lobortis sagittis. Donec ultricies velit a turpis gravida mollis. Praesent sem ex, fringilla vitae laoreet ut, sagittis non ligula. Ut et fringilla libero, a vestibulum nisl. Phasellus efficitur, libero eget feugiat pellentesque, neque magna posuere lorem, a pulvinar urna sem at libero.</p>
            <p class="light-gray small">Duis consectetur mauris sed odio congue mollis. Phasellus in purus aliquam, ultrices mauris a, congue ipsum. Nunc lacinia diam non mauris pulvinar, sed euismod purus varius. Vestibulum interdum, mauris id lacinia tristique, risus nunc rhoncus enim, commodo mattis arcu ligula ut arcu. Vivamus viverra fringilla augue, vitae mattis eros feugiat consectetur. Vivamus hendrerit est vitae leo commodo, eget suscipit sapien mollis.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-thick rounded-0 btn btn-outline-secondary py-2">Close</button>
            <button type="button" class="btn-thick rounded-0 btn btn-outline-primary py-2">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- scrolling modal -->

    <div class="modal fade show open" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered scroll-dialog my-0 mx-auto">
        <div class="modal-content">
          <div class="modal-header d-inline-block w-100">
            <button type="button" class="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title font-weight-bold">Hey there, I'm a cool multi-purpose modal. Use me for almost anything!</h5>
          </div>
          <div class="modal-body">
            <p class="light-gray small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec aliquam ligula. Mauris eget porttitor eros. Donec eleifend, metus volutpat finibus ullamcorper, dui leo sodales arcu, sed accumsan arcu enim a magna. Cras ut felis euismod, mattis justo id, euismod purus. Fusce vel sapien ante. Vivamus ut vehicula dui, at commodo orci. Duis eu gravida lorem. Integer lobortis libero vitae erat aliquet, luctus tempus ipsum euismod.</p>
            <p class="light-gray small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec aliquam ligula. Mauris eget porttitor eros. Donec eleifend, metus volutpat finibus ullamcorper, dui leo sodales arcu, sed accumsan arcu enim a magna. Cras ut felis euismod, mattis justo id, euismod purus. Fusce vel sapien ante. Vivamus ut vehicula dui, at commodo orci. Duis eu gravida lorem. Integer lobortis libero vitae erat aliquet, luctus tempus ipsum euismod.</p>
            <p class="light-gray small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec aliquam ligula. Mauris eget porttitor eros. Donec eleifend, metus volutpat finibus ullamcorper, dui leo sodales arcu, sed accumsan arcu enim a magna. Cras ut felis euismod, mattis justo id, euismod purus. Fusce vel sapien ante. Vivamus ut vehicula dui, at commodo orci. Duis eu gravida lorem. Integer lobortis libero vitae erat aliquet, luctus tempus ipsum euismod.</p>
            <p class="light-gray small">Duis consectetur mauris sed odio congue mollis. Phasellus in purus aliquam, ultrices mauris a, congue ipsum. Nunc lacinia diam non mauris pulvinar, sed euismod purus varius. Vestibulum interdum, mauris id lacinia tristique, risus nunc rhoncus enim, commodo mattis arcu ligula ut arcu. Vivamus viverra fringilla augue, vitae mattis eros feugiat consectetur. Vivamus hendrerit est vitae leo commodo, eget suscipit sapien mollis.</p>
            <p class="light-gray small">Duis consectetur mauris sed odio congue mollis. Phasellus in purus aliquam, ultrices mauris a, congue ipsum. Nunc lacinia diam non mauris pulvinar, sed euismod purus varius. Vestibulum interdum, mauris id lacinia tristique, risus nunc rhoncus enim, commodo mattis arcu ligula ut arcu. Vivamus viverra fringilla augue, vitae mattis eros feugiat consectetur. Vivamus hendrerit est vitae leo commodo, eget suscipit sapien mollis.</p>
            <p class="light-gray small">Duis consectetur mauris sed odio congue mollis. Phasellus in purus aliquam, ultrices mauris a, congue ipsum. Nunc lacinia diam non mauris pulvinar, sed euismod purus varius. Vestibulum interdum, mauris id lacinia tristique, risus nunc rhoncus enim, commodo mattis arcu ligula ut arcu. Vivamus viverra fringilla augue, vitae mattis eros feugiat consectetur. Vivamus hendrerit est vitae leo commodo, eget suscipit sapien mollis.</p>
          </div>
          <div class="modal-footer d-inline-block w-100 text-right">
            <button type="button" class="btn-thick rounded-0 btn btn-outline-secondary py-2">Close</button>
            <button type="button" class="btn-thick rounded-0 btn btn-outline-primary py-2">Save changes</button>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="modal-backdrop fade show"></div>
</div>
</body>
</html>
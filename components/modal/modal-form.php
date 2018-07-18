<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" type="text/css" href="css/modal.css">
</head>
<body>
<div class="container">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
  </button>
  <!-- Modal -->
  <div class="modal-screen reveal-modal"></div>
  <div class="modal fade show" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="full-page modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content py-5 px-4">
        <div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body py-3">
          <h3>Sign Up & Be Cool.</h3>
          <p>
            Stay in the loop with our awesome newsletter. We'll send you monthly
             updates of our latest and greatest tools and resources.
          </p>
          <form>
            <div class="row mx-0">
                <div class="col-md-6 py-2">
                    <div class="custom-style py-3">
                        <div class="custom-input form-group mb-4">
                            <input type="name" class="py-2 pl-2" placeholder="Email Address " />
                            <!-- <label class="text-uppercase text-left w-100">First Name</label> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-2">
                    <div class="custom-style py-3">
                        <div class="custom-input form-group mb-4">
                            <a href="" class="btn btn-success rounded-0 py-2">Keep Me Informed</a>
                        </div>
                    </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
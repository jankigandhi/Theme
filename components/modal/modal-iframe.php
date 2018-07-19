<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" type="text/css" href="css/modal.css">
</head>
<body>
<div class="container my-5">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
  </button>
  <!-- Modal -->
  <div class="modal-screen reveal-modal"></div>
  <div class="modal fade show" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="full-width modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content my-3">
        <div class="modal-body p-0">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
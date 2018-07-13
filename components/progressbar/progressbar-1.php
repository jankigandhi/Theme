<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" type="text/css" href="css/progressbar.css">
</head>
<body>
  <div class="container my-4">
    <h1 class="h2 text-center mt-3">Progress Bar</h1>
    <div class="mb-4">
      <h3 class="mb-4">Horizontal Progress Bar</h3>
      <ul class="row list-unstyled mb-3">
        <li class="col-md-6 mb-4">
          <p class="mb-1 font-weight-medium">
            Web Design
          </p>
          <div class="progress-horizontal-bar d-inline-block w-100 mb-0">
            <p class="bar bg-primary float-left py-2 mb-0" style="width: 70%;">
              <span class="font-weight-medium">70%</span>
            </p>
          </div>
        </li>
        <li class="col-md-6 mb-4">
          <p class="mb-1 font-weight-medium">
            HTML5 &amp; CSS3
          </p>
          <div class="progress-horizontal-bar d-inline-block w-100 mb-0">
            <p class="bar bg-success float-left py-2 mb-0" style="width: 85%;">
              <span class="font-weight-medium">85%</span>
            </p>
          </div>
        </li>
        <li class="col-md-6 mb-4">
          <p class="mb-1 font-weight-medium">
            JavaScript / JQuery
          </p>
          <div class="progress-rounded progress-horizontal-bar d-inline-block w-100 mb-0">
            <p class="progress-rounded bar bg-danger float-left py-2 mb-0" style="width: 60%;">
              <span class="font-weight-medium">60%</span>
            </p>
          </div>
        </li>
        <li class="col-md-6 mb-4">
          <p class="mb-1 font-weight-medium">
            PHP
          </p>
          <div class="progress-rounded progress-horizontal-bar d-inline-block w-100 mb-0">
            <p class="progress-rounded bar bg-info float-left py-2 mb-0" style="width: 45%;">
              <span class="font-weight-medium">45%</span>
            </p>
          </div>
        </li>
      </ul>
    </div>
    <div class="mb-4">
      <h3 class="mb-4">Circular Progress Bar</h3>
      <div class="row">
        <div class="col-md-3 col-sm-6 py-3 text-center">
          <div class="circular-progress-bar progress-primary" data-percent="70">
            <svg class="circle" width="150" height="150" viewBox="0 0 150 150">
              <circle class="progress-meter" cx="75" cy="75" r="71" stroke-width="8" />
              <circle class="progress-value bg-primary" cx="75" cy="75" r="71" stroke-width="8" />
            </svg>
          </div>
          <p class="mb-1 font-weight-medium">
            Web Design
          </p>
        </div>
        <div class="col-md-3 col-sm-6 py-3 text-center">
          <div class="circular-progress-bar progress-primary" data-percent="85">
            <svg class="circle" width="150" height="150" viewBox="0 0 150 150">
              <circle class="progress-meter" cx="75" cy="75" r="71" stroke-width="8" />
              <circle class="progress-value bg-success" cx="75" cy="75" r="71" stroke-width="8" />
            </svg>
          </div>
          <p class="mb-1 font-weight-medium">
            HTML5 &amp; CSS3
          </p>
        </div>
        <div class="col-md-3 col-sm-6 py-3 text-center">
          <div class="circular-progress-bar progress-primary" data-percent="60">
            <svg class="circle" width="150" height="150" viewBox="0 0 150 150">
              <circle class="progress-meter" cx="75" cy="75" r="71" stroke-width="8" />
              <circle class="progress-value bg-danger" cx="75" cy="75" r="71" stroke-width="8" />
            </svg>
          </div>
          <p class="mb-1 font-weight-medium">
            JavaScript / JQuery
          </p>
        </div>
        <div class="col-md-3 col-sm-6 py-3 text-center">
          <div class="circular-progress-bar progress-primary" data-percent="45">
            <svg class="circle" width="150" height="150" viewBox="0 0 150 150">
              <circle class="progress-meter" cx="75" cy="75" r="71" stroke-width="8" />
              <circle class="progress-value bg-info" cx="75" cy="75" r="71" stroke-width="8" />
            </svg>
          </div>
          <p class="mb-1 font-weight-medium">
            PHP
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Circular Progress Bar -->
  <script>
    var progressValue = document.querySelectorAll('.progress-value');
    var RADIUS = 71;
    var CIRCUMFERENCE = 2 * Math.PI * RADIUS;
    var elements = document.getElementsByClassName('circular-progress-bar');
    for (var i = 0; i < elements.length; i++){
      var value = elements[i].dataset.percent;
          function progress(value) {
      
      var progress = value / 100;
      var dashoffset = CIRCUMFERENCE * (1 - progress);
      
      console.log('progress:', value + '%', '|', 'offset:', dashoffset)
      
      progressValue[i].style.strokeDashoffset = dashoffset;
      
      }
      progressValue[i].style.strokeDasharray = CIRCUMFERENCE;
      progress(value);
    }
  </script>
</body>
</html>

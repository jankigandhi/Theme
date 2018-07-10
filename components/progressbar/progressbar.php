<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" type="text/css" href="css/progressbar.css">
</head>
<body>
<div class="container my-4">
    <div class="mb-5">
        <h3>style-1</h3>
        <div>
            <div class="progress progress-1 mb-3 border-0 rounded-0">
                <div class="progress-bar text-right pr-1" data-progress="90" style="width: 90%;">
                    <span class="title">90%</span>
                </div>
            </div>
        </div>
        <div class="progress progress-1 mb-3 border-0 rounded-0">
            <div class="progress-bar text-right pr-1" data-progress="20" style="width: 20%;">
                <span class="title">Transport</span>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <h3>Style-2</h3>
        <div class="progress-bar-section my-4">
            <ul class="row list-unstyled text-left mx-0">
                <li class="col-md-4 py-4">
                    <p class="text-uppercase mb-0 font-weight-bold">progress-1</p>
                    <p class="progress-status d-inline-block w-100 mb-0">
                        <span class="score-line bg-danger float-left py-2" style="width: 55%;"></span>
                    </p>
                </li>
                <li class="col-md-4 py-4">
                    <p class="text-uppercase mb-0 font-weight-bold">progress-2</p>
                    <p class="progress-status d-inline-block w-100 mb-0">
                        <span class="score-line bg-success float-left py-2" style="width: 85%;"></span>
                    </p>
                </li>
                <li class="col-md-4 py-4">
                    <p class="text-uppercase mb-0 font-weight-bold">progress-3</p>
                    <p class="progress-status d-inline-block w-100 mb-0">
                        <span class="score-line bg-primary float-left py-2" style="width: 70.5%;"></span>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="progress-section mb-5">
        <h3>Style-3</h3>
        <div class="custom-progress progress mb-5">
            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                <span class="text-span bg-primary">50%</span>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <h3 class="mb-4">Style-4</h3>
        <div class="row mx-0">
            <div class="col-md-4 py-4">
                <div class="demo-circle">
                    <div class="d-flex align-items-center justify-content-center">
                        <svg class="progress-circle" width="120" height="120" viewBox="0 0 120 120">
                            <circle cx="60" cy="60" r="54" fill="none" stroke="" class="bg-light" stroke-width="12" />
                            <circle class="progress-value bg-primary" cx="60" cy="60" r="54" fill="none" stroke-width="12" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-4">
                <div class="demo-circle">
                    <div class="d-flex align-items-center justify-content-center">
                        <svg class="progress-circle" width="120" height="120" viewBox="0 0 120 120">
                            <circle cx="60" cy="60" r="54" fill="none" stroke="" class="bg-light" stroke-width="12" />
                            <circle class="progress-value bg-success" cx="60" cy="60" r="54" fill="none" stroke-width="12" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-4">
                <div class="demo-circle">
                    <div class="d-flex align-items-center justify-content-center">
                        <svg class="progress-circle" width="120" height="120" viewBox="0 0 120 120">
                            <circle cx="60" cy="60" r="54" fill="none" stroke="" class="bg-light" stroke-width="12" />
                            <circle class="progress-value bg-danger" cx="60" cy="60" r="54" fill="none" stroke-width="12" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-4">
                <div class="demo-circle">
                    <div class="d-flex align-items-center justify-content-center">
                        <svg class="progress-circle" width="120" height="120" viewBox="0 0 120 120">
                            <circle cx="60" cy="60" r="54" fill="none" stroke="" class="bg-light" stroke-width="12" />
                            <circle class="progress-value bg-secondary" cx="60" cy="60" r="54" fill="none" stroke-width="12" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-4">
                <div class="demo-circle">
                    <div class="d-flex align-items-center justify-content-center">
                        <svg class="progress-circle" width="120" height="120" viewBox="0 0 120 120">
                            <circle cx="60" cy="60" r="54" fill="none" stroke="" class="bg-light" stroke-width="12" />
                            <circle class="progress-value bg-info" cx="60" cy="60" r="54" fill="none" stroke-width="12" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-4">
                <div class="demo-circle">
                    <div class="d-flex align-items-center justify-content-center">
                        <svg class="progress-circle" width="120" height="120" viewBox="0 0 120 120">
                            <circle cx="60" cy="60" r="54" fill="none" stroke="" class="bg-light" stroke-width="12" />
                            <circle class="progress-value bg-warning" cx="60" cy="60" r="54" fill="none" stroke-width="12" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
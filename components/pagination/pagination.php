<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" href="../Buttons/css/button.css">
<link rel="stylesheet" type="text/css" href="css/pagination.css">
</head>
<body>
<?php $HederClass="bg-dark";?>
<?php include_once '../nav-bar/nav-bar.php';?>
<div class="container my-4">
    <h1 class="h2 text-center mt-3">Pagination</h1>
    <div class="mb-5">
        <h3 class="mb-3">Style-1</h3>
        <div class="row">
            <div class="col-md-6">
                <nav>
                    <ul class="pagination pagination-info mb-4">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav>
                    <ul class="pagination pagination-success mb-4">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6">
                <nav>
                    <ul class="pagination pagination-info mb-4">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <nav>
                    <ul class="pagination pagination-dark mb-4">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <h3 class="mb-3">Style-2</h3>
        <div class="row">
            <div class="col-md-6">
                <nav>
                    <ul class="pagination pagination-1 pagination-success mb-4">
                        <li class="page-item disabled px-2">
                            <a class="page-link border-0 rounded" href="#">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item px-2 active"><a class="page-link border-0 rounded" href="#">1</a></li>
                        <li class="page-item px-2"><a class="page-link border-0 rounded" href="#">2</a></li>
                        <li class="page-item px-2"><a class="page-link border-0 rounded" href="#">3</a></li>
                        <li class="page-item px-2">
                            <a class="page-link border-0 rounded" href="#">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav>
                    <ul class="pagination pagination-1 pagination-danger mb-4">
                        <li class="page-item disabled px-2">
                            <a class="page-link border-0 rounded" href="#">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item px-2 active"><a class="page-link border-0 rounded" href="#">1</a></li>
                        <li class="page-item px-2"><a class="page-link border-0 rounded" href="#">2</a></li>
                        <li class="page-item px-2"><a class="page-link border-0 rounded" href="#">3</a></li>
                        <li class="page-item px-2">
                            <a class="page-link border-0 rounded" href="#">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav>
                    <ul class="pagination pagination-1 pagination-dark mb-4">
                        <li class="page-item disabled px-2">
                            <a class="page-link border-0 rounded" href="#">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item px-2 active"><a class="page-link border-0 rounded" href="#">1</a></li>
                        <li class="page-item px-2"><a class="page-link border-0 rounded" href="#">2</a></li>
                        <li class="page-item px-2"><a class="page-link border-0 rounded" href="#">3</a></li>
                        <li class="page-item px-2">
                            <a class="page-link border-0 rounded" href="#">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6">
                <nav>
                    <ul class="pagination pagination-1 pagination-success mb-4">
                        <li class="page-item disabled px-2">
                            <a class="page-link border-0 rounded-circle" href="#">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item px-2 active"><a class="page-link border-0 rounded-circle" href="#">1</a></li>
                        <li class="page-item px-2"><a class="page-link border-0 rounded-circle" href="#">2</a></li>
                        <li class="page-item px-2"><a class="page-link border-0 rounded-circle" href="#">3</a></li>
                        <li class="page-item px-2">
                            <a class="page-link border-0 rounded-circle" href="#">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav>
                    <ul class="pagination pagination-1 pagination-danger mb-4">
                        <li class="page-item disabled px-2">
                            <a class="page-link border-0 rounded-circle" href="#">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item px-2 active"><a class="page-link border-0 rounded-circle" href="#">1</a></li>
                        <li class="page-item px-2"><a class="page-link border-0 rounded-circle" href="#">2</a></li>
                        <li class="page-item px-2"><a class="page-link border-0 rounded-circle" href="#">3</a></li>
                        <li class="page-item px-2">
                            <a class="page-link border-0 rounded-circle" href="#">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav>
                    <ul class="pagination pagination-1 pagination-dark mb-4">
                        <li class="page-item disabled px-2">
                            <a class="page-link border-0 rounded-circle" href="#">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item px-2 active"><a class="page-link border-0 rounded-circle" href="#">1</a></li>
                        <li class="page-item px-2"><a class="page-link border-0 rounded-circle" href="#">2</a></li>
                        <li class="page-item px-2"><a class="page-link border-0 rounded-circle" href="#">3</a></li>
                        <li class="page-item px-2">
                            <a class="page-link border-0 rounded-circle" href="#">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only" >Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php include_once '../../inc/footer.php';?>
</body>
</html>

<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" type="text/css" href="css/pagination.css">
</head>
<body>
<div class="container my-4">
    <div class="mt-5">
        <h3 class="mb-3">Basic style</h3>
        <!--Pagination -->
        <nav aria-label="pagination example">
            <ul class="pagination mb-0">
                <!--First-->
                <li class="page-item disabled"><a class="page-link">First</a></li>
                <!--Arrow left-->
                <li class="page-item disabled">
                    <a class= "page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <!--Numbers-->
                <li class="page-item active"><a class= "page-link">1</a></li>
                <li class="page-item"><a class="page-link">2</a></li>
                <li class="page-item"><a class= "page-link">3</a></li>
                <li class="page-item"><a class= "page-link">4</a></li>
                <li class="page-item"><a class= "page-link">5</a></li>
                <!--Arrow right-->
                <li class="page-item">
                    <a class= "page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
                <!--Last-->
                <li class="page-item"><a class= "page-link">Last</a></li>
            </ul>
        </nav>
    </div>
    <div class="mt-5">
        <h3 class="mb-3">Style-1</h3>
        <!--Pagination -->
        <nav aria-label="pagination example">
            <ul class="pagination mb-0">
                <!--Arrow left-->
                <li class="page-item disabled">
                    <a class="border-0 d-inline-flex align-items-center justify-content-center page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <!--Numbers-->
                <li class="page-item active"><a class="border-0 d-inline-flex align-items-center justify-content-center page-link">1</a></li>
                <li class="page-item"><a class="border-0 d-inline-flex align-items-center justify-content-center page-link">2</a></li>
                <li class="page-item"><a class="border-0 d-inline-flex align-items-center justify-content-center page-link">3</a></li>
                <li class="page-item"><a class="border-0 d-inline-flex align-items-center justify-content-center page-link">4</a></li>
                <li class="page-item"><a class="border-0 d-inline-flex align-items-center justify-content-center page-link">5</a></li>
                <!--Arrow right-->
                <li class="page-item">
                    <a class="border-0 d-inline-flex align-items-center justify-content-center page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="mt-5">
        <h3 class="mb-3">Style-2</h3>
        <!--Pagination -->
        <nav aria-label="pagination example">
            <ul class="pagination mb-0">
                <!--Arrow left-->
                <li class="custom-page-item page-item px-1 disabled">
                    <a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <!--Numbers-->
                <li class="custom-page-item page-item px-1 active"><a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link">1</a></li>
                <li class="custom-page-item page-item px-1"><a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link">2</a></li>
                <li class="custom-page-item page-item px-1"><a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link">3</a></li>
                <li class="custom-page-item page-item px-1"><a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link">4</a></li>
                <li class="custom-page-item page-item px-1"><a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link">5</a></li>
                <!--Arrow right-->
                <li class="custom-page-item page-item px-1">
                    <a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="mt-5">
        <h3 class="mb-3">Style-3</h2>
        <nav aria-label="Pagination with icons">
            <ul class="pagination">
                <li class="page-item">
                    <a class= "page-link" href="#" aria-label="Previous">
                        <i class="zmdi zmdi-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class= "page-link" href="#">2</a></li>
                <li class="page-item"><a class= "page-link" href="#">3</a></li>
                <li class="page-item"><a class= "page-link" href="#">4</a></li>
                <li class="page-item">
                    <a class= "page-link" href="#" aria-label="Previous">
                        <i class="zmdi zmdi-long-arrow-right"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="mt-5">
        <h3 class="mb-3 text-center">Style-4</h2>
        <nav aria-label="Pagination icons">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="border-0 d-inline-flex align-items-center justify-content-center page-link" href="#" aria-label="Previous">
                        <i class="zmdi zmdi-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active"><a class="border-0 d-inline-flex align-items-center justify-content-center page-link" href="#">1</a></li>
                <li class="page-item"><a class="border-0 d-inline-flex align-items-center justify-content-center page-link" href="#">2</a></li>
                <li class="page-item"><a class="border-0 d-inline-flex align-items-center justify-content-center page-link" href="#">3</a></li>
                <li class="page-item"><a class="border-0 d-inline-flex align-items-center justify-content-center page-link" href="#">4</a></li>
                <li class="page-item">
                    <a class="border-0 d-inline-flex align-items-center justify-content-center page-link" href="#" aria-label="Previous">
                        <i class="zmdi zmdi-long-arrow-right"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="mt-5">
        <h3 class="mb-3 text-right">Style-5</h2>
        <nav aria-label="Pagination icons">
            <ul class="pagination justify-content-end">
                <li class="custom-page-item page-item px-1">
                    <a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link" href="#" aria-label="Previous">
                        <i class="zmdi zmdi-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="custom-page-item page-item px-1 active"><a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link" href="#">1</a></li>
                <li class="custom-page-item page-item px-1"><a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link" href="#">2</a></li>
                <li class="custom-page-item page-item px-1"><a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link" href="#">3</a></li>
                <li class="custom-page-item page-item px-1"><a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link" href="#">4</a></li>
                <li class="custom-page-item page-item px-1">
                    <a class="pagination-circle border-0 d-inline-flex align-items-center justify-content-center page-link" href="#" aria-label="Previous">
                        <i class="zmdi zmdi-long-arrow-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</body>
</html>
<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" type="text/css" href="css/table.css">
<link rel="stylesheet" type="text/css" href="../pagination/css/pagination.css">
</head>
<body>
<?php $HederClass="fixed-header";?>
<?php include_once '../nav-bar/nav-bar.php';?>
<div class="container my-4 scroll">
    <h1 class="h2 text-center mt-3">Tables</h1>
    <div>
        <div class="mb-4">
            <h4>Dark Header</h4>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mb-4">
            <h4>Light Header</h4>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mb-4">
            <h4>Striped Header</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mb-4">
            <h4>Table-hover</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mb-4">
            <h4>Responsive-table</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mb-4">
            <h4>Responsive-data-table</h4>
            <div class="table-responsive responsive-data-table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Account</th>
                            <th>Due Date</th>
                            <th>Amount</th>
                            <th>Period</th>
                            <th>Account</th>
                            <th>Due Date</th>
                            <th>Amount</th>
                            <th>Period</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Account">Visa - 3412</td>
                            <td data-label="Due Date">04/01/2016</td>
                            <td data-label="Amount">$1,190</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                            <td data-label="Account">Visa - 3412</td>
                            <td data-label="Due Date">04/01/2016</td>
                            <td data-label="Amount">$1,190</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                        </tr>
                        <tr>
                            <td data-label="Account">Visa - 3412</td>
                            <td data-label="Due Date">04/01/2016</td>
                            <td data-label="Amount">$1,190</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                            <td data-label="Account">Visa - 3412</td>
                            <td data-label="Due Date">04/01/2016</td>
                            <td data-label="Amount">$1,190</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                        </tr>
                        <tr>
                            <td data-label="Account">Visa - 3412</td>
                            <td data-label="Due Date">04/01/2016</td>
                            <td data-label="Amount">$1,190</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                            <td data-label="Account">Visa - 3412</td>
                            <td data-label="Due Date">04/01/2016</td>
                            <td data-label="Amount">$1,190</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                        </tr>
                        <tr>
                            <td data-label="Account">Visa - 3412</td>
                            <td data-label="Due Date">04/01/2016</td>
                            <td data-label="Amount">$1,190</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                            <td data-label="Account">Visa - 3412</td>
                            <td data-label="Due Date">04/01/2016</td>
                            <td data-label="Amount">$1,190</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mb-4">
            <h4>Header fixed</h4>
            <div class="table-responsive">
                <table class="table table-fixed">
                    <thead class="thead-dark">
                        <tr>
                            <th class="col-3">#</th>
                            <th class="col-3">First</th>
                            <th class="col-3">Last</th>
                            <th class="col-3">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-3">1</td>
                            <td class="col-3">Mark</td>
                            <td class="col-3">Otto</td>
                            <td class="col-3">@mdo</td>
                        </tr>
                        <tr>
                            <td class="col-3">2</td>
                            <td class="col-3">Jacob</td>
                            <td class="col-3">Thornton</td>
                            <td class="col-3">@fat</td>
                        </tr>
                        <tr>
                            <td class="col-3">3</td>
                            <td class="col-3">Larry</td>
                            <td class="col-3">the Bird</td>
                            <td class="col-3">@twitter</td>
                        </tr>
                        <tr>
                            <td class="col-3">1</td>
                            <td class="col-3">Mark</td>
                            <td class="col-3">Otto</td>
                            <td class="col-3">@mdo</td>
                        </tr>
                        <tr>
                            <td class="col-3">2</td>
                            <td class="col-3">Jacob</td>
                            <td class="col-3">Thornton</td>
                            <td class="col-3">@fat</td>
                        </tr>
                        <tr>
                            <td class="col-3">3</td>
                            <td class="col-3">Larry</td>
                            <td class="col-3">the Bird</td>
                            <td class="col-3">@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h4 class="text-center my-2">Table With Pagination</h4>
        <div class="mb-4">
            <h4>Striped Header</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
            <nav class="mt-3">
                <ul class="pagination pagination-1 pagination-primary mb-4 justify-content-center">
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
        </div>
        <div class="mb-4">
            <h4>Responsive-table</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav class="mt-3">
                <ul class="pagination pagination-1 pagination-danger mb-4 justify-content-end">
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
    </div>
</div>
<?php include_once '../footer/footer.php';?>
<?php include_once '../../inc/foot.php';?>
</body>
</html>

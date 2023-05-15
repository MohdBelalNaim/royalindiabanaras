<?php
    include('./includes/navbar.php');
    include('./includes/checkLogin.php');

    if(isset($_GET['logout'])){
        session_destroy();
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="row pt-3">
                <div class="col-lg-4">
                    <div class="analytics border rounded py-3">
                        <div class="analytic-title text-center">Total products</div>
                        <div class="analytic-info text-center">127</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="analytics border rounded py-3">
                        <div class="analytic-title text-center">Total users</div>
                        <div class="analytic-info text-center">180</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="analytics border rounded py-3">
                        <div class="analytic-title text-center">Total categories</div>
                        <div class="analytic-info text-center">90</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container border-top mt-4">
            <div class="title py-3">Manage store</div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="action">
                        <a href="all-products.php">
                            <div class="action-title bg-primary text-center text-light py-4 rounded">
                                All products <i class="bi bi-chevron-right px-1" style="font-size:10px"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="action">
                        <a href="add-product.php">
                            <div class="action-title bg-primary text-center text-light py-4 rounded">
                                Add product <i class="bi bi-chevron-right px-1" style="font-size:10px"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="action">
                        <a href="all-users.php">
                            <div class="action-title bg-primary text-center text-light py-4 rounded">
                                User details <i class="bi bi-chevron-right px-1" style="font-size:10px"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="action">
                        <a href="manage-access.php">
                            <div class="action-title bg-primary text-center text-light py-4 rounded">
                                Manage access <i class="bi bi-chevron-right px-1" style="font-size:10px"></i>
                            </div>
                        </a>
                    </div>
                </div>

                
            </div>
        </div>
    </section>

    <section>
        <div class="container border-top mt-4">
            <div class="title py-3">Manage orders</div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="action">
                        <a href="all-orders.php">
                            <div class="action-title bg-primary text-center text-light py-4 rounded">
                                All orders <i class="bi bi-chevron-right px-1" style="font-size:10px"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="action">
                        <a href="exchange-requests.php">
                            <div class="action-title bg-primary text-center text-light py-4 rounded">
                                Exchange requests <i class="bi bi-chevron-right px-1" style="font-size:10px"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="action">
                        <a href="monthly-sellings.php">
                            <div class="action-title bg-primary text-center text-light py-4 rounded">
                                Total sellings (<?php echo date("M");?>) <i class="bi bi-chevron-right px-1" style="font-size:10px"></i>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</body>
</html>
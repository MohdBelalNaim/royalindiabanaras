<?php
    ob_start();
    include('./includes/Navbar.php');
    $user = $_SESSION['user'];
    $query = "SELECT * from orders where user = '$user' order by uid desc";
    $res = mysqli_query($conn,$query);
    $count = mysqli_num_rows($res);
    if(!isset($_SESSION['user']) || $_SESSION['user']=='') header("location:index.php");
    ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/orders.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="title">My Orders</div>

                <div class="order-wrapper">
              
                <?php
                    if($count>0){
                        while($row = mysqli_fetch_assoc($res)){
                            $uid = $row['uid'];
                            $id = $row['orderId'];
                            $total = number_format($row['total']);
                            $date = $row['date'];
                            $status = $row['status'];
                            echo "
                            <div class='order-item border rounded row animate__animated animate__fadeInUp'>
                                <div class='desc-wrapper'>
                                    <div class='product-desc'>Order ID : $id</div>
                                    <div class='product-desc'>Order Total : ₹$total</div>
                                    <div class='product-desc'>Orderd On : $date</div>
                                    <div class='product-desc'>Status : $status</div>
                                    <div class='status text-light bg-dark'><a href='order-details.php?id=$uid' style='text-decoration:none;color:white'>See details</a></div>
                                </div>
                            </div>
                            ";
                        }
                    }
                    else{
                        echo "
                            <div class='mb-5 border py-5 rounded px-3'>It's lonely here, No orders found :(</div>
                        ";
                    }
                ?>

        
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>
</html>

<?php
    include('./includes/Footer.php');
?>
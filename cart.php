<?php
    ob_start();
    
    include('./includes/Navbar.php');
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
        $user = $_SESSION['user'];
        $query="select * from bag where user='$user'";
        $res = mysqli_query($conn,$query);
        $count = mysqli_num_rows($res);
    }
    else{
        header("location:login.php?redir=cart");
    }

    if(isset($_GET['remove'])){
        $id = $_GET['remove'];
        $query = "delete from bag where id='$id'";
        if($conn->query($query)) header("location:cart.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/cart.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="cart-title">My bag</div>
                <div class="row item-wrapper">
                    <div class="col-lg-7">

                        <?php
                            $total = 0;
                            $all='';
                            if($count>0){
                                while($row=mysqli_fetch_array($res)){
                                    $name = $row['name'];
                                    $size = $row['size'];
                                    $mrp = $row['price'];
                                    $price = number_format($row['price']);
                                    $image = $row['image'];
                                    $id = $row['id'];
                                    $pid = $row['pid'];

                                    //calculating total cart value
                                    $total += $mrp;
                                    //imploding all the product ids
                                    $all=$pid.','.$size.'+'.$all;
                                    

                                    echo "
                                    <div class='row border rounded cart-item'>
                                        <div class='col-lg-4'>
                                            <div class='img-container'>
                                                <img src='./ribadmin/product-images/$image' class='product-image'>
                                            </div>
                                        </div>
                                        <div class='col-lg-8 cart-item-details'>
                                            <div class='cart-item-title'>$name</div>
                                            <div class='cart-item-size'>Size : <b>$size</b></div>
                                            <div class='cart-item-price'>₹$price</b></div>
                                            <a href='cart.php?remove=$id'>
                                                <div class='cart-actions'>
                                                    <i class='bi bi-x'></i> <span class='cancel-button'>Remove item</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    ";
                                }
                            }
                            else{
                                echo "<div class='border rounded py-5 text-center'>Cart empty</div>";
                            }
                            $_SESSION['cartAll']=$all;
                            $_SESSION['toPay'] = $total;
                            ob_end_flush();
                        ?>

                        

                    </div>
                    <div class="col-lg-5 mb-3 total-wrapper">
                        <div class="cart-total-wrapper border rounded">
                            <div class="total-title">Price details</div>
                            <div class="row">
                                <div class="col-lg-6 col-8 total-items">Order total</div>
                                <div class="col-lg-6 col-4 total-items">
                                    ₹<?php
                                        $total_value = number_format($total);
                                        echo $total_value;
                                    ?>
                                </div>
                                <div class="col-lg-6 col-8 total-items">Taxes</div>
                                <div class="col-lg-6 col-4 total-items">₹0</div>
                                <div class="col-lg-6 col-8 total-items">Delivery charges</div>
                                <div class="col-lg-6 col-4 total-items">₹0</div>
                                <div class="col-lg-6 col-8 total-items">Total amount</div>
                                <div class="col-lg-6 col-4 total-items">₹<?php echo $total_value?></div>
                            </div>
                            <?php 
                                if($count>0) echo "<a href='select-delivery-address.php'><button class='btn btn-dark form-control mt-3 continue-button'>Continue</button></a>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</body>
</html>
<?php
    include('./includes/Footer.php');
?>
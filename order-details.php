<?php
    include('./includes/Navbar.php');
    $user = $_SESSION['user'];
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "select * from orders where uid='$id'";
        $res = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($res);
        

        $delivery_address = $data['address'];
        $add_query = "select * from address where id='$delivery_address'";
        $add_data = mysqli_fetch_assoc(mysqli_query($conn,$add_query));

        $products = $data['products'];
        $items = explode('+',$products);
        
    }
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
                <div class="title">Order Status</div>
                <div class="order-details">
                    <div class="details-title fw-bold">Items in the order</div>
                    <div class="items-wrapper">
                        <?php
                            for($i=0;$i<sizeof($items);$i++){
                                $productData = explode(',',$items[$i]);
                                $pid = $productData[0];
                                $size = $productData[1];
                                $query = "select name,price from products where id ='$pid'";
                                $pdata = mysqli_fetch_assoc(mysqli_query($conn,$query));
                                $name = $pdata['name'];
                                $price = number_format($pdata['price']);
                                echo "
                                <a href='details.php?id=$pid' style='text-decoration:none;color:black;'>
                                <div class='order-item-wrapper mt-3 border rounded px-2 py-2'>
                                    <div class='item-details mb-1'>$name</div>
                                    <div class='item-details mb-1'>Size : $size</div>
                                    <div class='item-details mb-1'>₹$price</div>
                                </div>
                                </a>
                                ";
                            }
                        ?>
                        
                    </div>
                    <div class="fw-bold mt-3">Payment method</div>
                    <div class="method border rounded px-2 py-2 mt-2"> <i class='bi bi-cash px-1'></i> Cash on delivery</div>

                    <div class="address-order fw-bold mt-3">Delivery address</div>
                    <div class="address-wrapper border rounded px-2 py-2 mt-2 mb-5">
                        <div class="address-item mb-2"><?php echo $add_data['name'];?></div>
                        <div class="address-item mb-2">+91 <?php echo $add_data['phone'];?></div>
                        <div class="address-item mb-2"><?php echo $add_data['addressLine'];?></div>
                        <div class="address-item mb-2"><?php echo $add_data['city'];?></div>
                        <div class="address-item"><?php echo $add_data['state'];?>, <?php echo $add_data['pin'];?></div>
                    </div>
                </div>

                .
                
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
<?php
    include('./includes/navbar.php');
    include('./includes/checkLogin.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "SELECT * FROM orders WHERE uid = '$id'";
        $res = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($res);
        $address = $data['address'];
        $status = $data['status'];
    }

    if(isset($_GET['status'])){
        $status =  $_GET['status'];
        $id = $_GET['id'];

        $update = "update orders set status = '$status' where uid='$id'";
        if($conn->query($update)) header("location:all-orders.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/action-pages.css">
</head>
<body>
    <div class="container">
        <div class="title">Manage order</div>

        <div class="order-details">
            <div class="order-desc py-2 border-bottom">Order ID : <?php echo $data['orderId'];?></div>
            <div class="order-desc py-2 border-bottom">Order total : <?php echo number_format($data['total']);?> INR</div>
            <div class="order-desc py-2 ">Order items</div>
            <ol class="order-desc border-bottom pb-2">
                <?php
                    $products = explode('+',$data['products']);
                    if(sizeof($products)>1){
                        for($i=0;$i<sizeof($products);$i++){
                            $all = explode(',',$products[$i]);
                            $pid = $all[0];
                            $query = "SELECT name FROM products where id ='$pid'";
                            $res = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_assoc($res)){
                                $name = $row['name'];
                                $size = $all[1];
                                echo "<a href='../details.php?id=$pid'><li>$name</li></a> Size : $size";
                            }
                        }
                    }
                    else{
                        print_r($data['products']);
                    }
                ?>

            </ol>
        </div>
        <div class="order-desc border-bottom border-dark pb-3">Payment method : <?php echo $data['method'];?></div>

        <div class="address-wrapper border-bottom border-dark pb-2">
            <?php
                $add = "SELECT * FROM address where id = '$address'";
                $add_data = mysqli_fetch_assoc(mysqli_query($conn,$add));
            ?>
            <div class="h5 py-2 mt-2">Shipping address</div>
            <div class="py-1"><?php echo $add_data['name'];?></div>
            <div class="py-1"><?php echo $add_data['phone'];?></div>
            <div class="py-1"><?php echo $add_data['addressLine'];?></div>
            <div class="py-1"><?php echo $add_data['city'];?></div>
            <div class="py-1"><?php echo $add_data['state'];?> , <?php echo $add_data['pin'];?></div>
        </div>

        <?php
            if($status=='Placed'){
                echo "
                <div class='actions mb-5'>
                    <div class='h5 py-2 mt-2'>Order actions</div>
                    <a href='manage-order.php?id=$id&status=Accepted'><button class='btn btn-success'>Accepts order</button></a>
                    <a href='manage-order.php?id=$id&status=Rejected'><button class='btn btn-danger'>Reject order</button></a>
                </div>
                ";
            }
            else{
                echo "<div class='mt-2'>Status : $status<div>";
            }
        ?>
        
    </div>
</body>
</html>
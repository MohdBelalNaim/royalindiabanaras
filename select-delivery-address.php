<?php
    ob_start();
    include('./includes/Navbar.php');
    
    $user = $_SESSION['user'];
    $query="select * from address where user='$user'";
    $res = mysqli_query($conn,$query);
    $count = mysqli_num_rows($res);

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $_SESSION['deliveryAddress']=$id;
        header("location:select-payment-method.php");
    }
    ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/delivery.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="delivery-title">Select delivery address</div>

                <div class="address-card-container">
                    <?php
                        if($count>0){
                            while($row=mysqli_fetch_assoc($res)){
                                $name = $row['name'];
                                $line = $row['addressLine'];
                                $phone = $row['phone'];
                                $city = $row['city'];
                                $state = $row['state'];
                                $pin = $row['pin'];
                                $id = $row['id'];
                                echo "
                                <div class='adddress-card border rounded mb-2'>
                                    <div class='wrapper py-2 px-2'>
                                        <div class='address-item py-1'><b>$name</b></div>
                                        <div class='address-item py-1'>$phone</div>
                                        <div class='address-item py-1'>$line</div>
                                        <div class='address-item py-1'>$city, $state</div>
                                        <div class='address-item py-1'>$pin</div>
                                    </div>
                                    <a href='select-delivery-address.php?id=$id' style='text-decoration:none'><div class='deliver-here bg-dark text-light'>DELIVER HERE</div></a>
                                </div>
                            ";
                            }
                            
                        }
                        else{
                            echo "<div class='border rounded px-2 py-2 mb-3 border-dark add-to-cont'>No address found, please add an address to continue</div>";
                        }
                    ?>
                    
                    

                    <div class="add-address"><a href="add-address.php?ret=1" style="text-decoration:none;color:black;"><i class="bi bi-plus"></i> <span>Add new address</span></a></div>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</body>
</html>
<?php
    include('./includes/Footer.php');
?>
<?php
    ob_start();
    include('./includes/Navbar.php');
    $mail = $_SESSION['user'];
    $name_query = "SELECT name from users where email='$mail'";
    $res = mysqli_query($conn,$name_query);
    $data = mysqli_fetch_assoc($res);

    if(isset($_GET['logout'])){
        session_destroy();
        header("location:index.php");
    }

    if(!$_SESSION['user'] || $_SESSION['user']=='') header("location:login.php?redir=account");

    ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/account.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 pb-5">
                <div class="account-hero">
                    <i class="bi bi-person-circle hero-icon"></i>
                    <span class="hero-title"><?php echo $data['name'];?></span>
                </div>

                <div class="account-actions">
                    <div class="action-item animate__animated animate__fadeInUp"> <i class="bi bi-box-seam" style="margin-right:10px;"></i> <a href="orders.php" style="color:black;text-decoration:none;">Orders</a></div>
                    <div class="action-item animate__animated animate__fadeInUp"> <i class="bi bi-arrow-counterclockwise" style="margin-right:10px;"></i> <a href="returns.php" style="color:black;text-decoration:none;">Returns</a></div>
                    <div class="action-item animate__animated animate__fadeInUp"> <i class="bi bi-list-ul" style="margin-right:10px;"></i> <a href="add-address.php" style="color:black;text-decoration:none;">Addresses</a></div></a>
                    <div class="action-item animate__animated animate__fadeInUp"> <i class="bi bi-box-arrow-left" style="margin-right:10px;"></i> <a href="account.php?logout=1" style="color:black;text-decoration:none;">Logout</a></div>
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
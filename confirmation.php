<?php
    include('./includes/Navbar.php');
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
    <div class="container py-5">
        <div class="confirmation-title text-center">
            We have recieved your order !
        </div>
        <div class="text-center mt-5">
            <span class="check-mark animate__animated animate__bounceInDown">
                <i class="bi bi-check2"></i>
            </span>
        </div>
        <center><div class="confirmation-desc text-center col-lg-4 mt-5 col-12">Thank you for shopping with us, You can check the status of your order in <a href="">my orders</a> section of your account</div></center>

        <center><button class="btn btn-dark mt-4">Continue shopping</button></center>
    </div>
</body>
</html>

<?php
    include('./includes/Footer.php');
?>
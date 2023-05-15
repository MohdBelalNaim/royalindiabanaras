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
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="delivery-title">Select payment address</div>
                
                <div class="method-wrapper">
                    <div class="method-item"><a href="place-cod.php" style="text-decoration:none;color:black;"> <i class='bi bi-cash px-1'></i> Cash on delivery</a></div>
                    <div class="method-item"> <i class='bi bi-globe px-1'></i> Credit card / Debit card / UPI </div>
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
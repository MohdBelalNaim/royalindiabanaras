<?php
    include('./includes/Navbar.php');
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
                    <span class="hero-title">Mohd Belal Naim</span>
                </div>

                <div class="account-actions">
                    <div class="action-item animate__animated animate__fadeInUp"> <i class="bi bi-box-seam" style="margin-right:10px;"></i> Orders</div>
                    <div class="action-item animate__animated animate__fadeInUp"> <i class="bi bi-arrow-counterclockwise" style="margin-right:10px;"></i> Refunds</div>
                    <div class="action-item animate__animated animate__fadeInUp"> <i class="bi bi-list-ul" style="margin-right:10px;"></i> Addresses</div>
                    <div class="action-item animate__animated animate__fadeInUp"> <i class="bi bi-box-arrow-left" style="margin-right:10px;"></i> Logout</div>
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
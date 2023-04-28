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
                <div class="delivery-title">Select delivery address</div>

                <div class="address-card-container">
                    <div class="adddress-card border rounded mb-2">
                        <div class="wrapper py-2 px-2">
                            <div class="address-item py-1"><b>Mohd Belal Naim</b></div>
                            <div class="address-item py-1">Near makka masjid, zahidabad, gorakhnath</div>
                            <div class="address-item py-1">Gorakhpur, Uttarpradesh</div>
                            <div class="address-item py-1">273015</div>
                        </div>
                        <a href="select-payment-method.php" style="text-decoration:none"><div class="deliver-here bg-dark text-light">DELIVER HERE</div></a>
                    </div>
                    <div class="adddress-card border rounded mb-2">
                        <div class="wrapper py-2 px-2">
                            <div class="address-item py-1"><b>Mohd Belal Naim</b></div>
                            <div class="address-item py-1">Near makka masjid, zahidabad, gorakhnath</div>
                            <div class="address-item py-1">Gorakhpur, Uttarpradesh</div>
                            <div class="address-item py-1">273015</div>
                        </div>
                        <div class="deliver-here bg-dark text-light">DELIVER HERE</div>
                    </div>
                    <div class="adddress-card border rounded mb-2">
                        <div class="wrapper py-2 px-2">
                            <div class="address-item py-1"><b>Mohd Belal Naim</b></div>
                            <div class="address-item py-1">Near makka masjid, zahidabad, gorakhnath</div>
                            <div class="address-item py-1">Gorakhpur, Uttarpradesh</div>
                            <div class="address-item py-1">273015</div>
                        </div>
                        <div class="deliver-here bg-dark text-light">DELIVER HERE</div>
                    </div>

                    <div class="add-address"><i class="bi bi-plus"></i> <span>Add new address</span></div>
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
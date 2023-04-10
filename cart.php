<?php
    include('./includes/Navbar.php');
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-1">&nbsp;</div>
                <div class="col-lg-8">
                    
                        <div class="cart-title">My cart</div>

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="address-wrapper">
                                    <div class="address-item">
                                        <div>Deliver to: <b>Mohd Belal Naim, 273015</b></div>
                                        <div>Near makka masjid zahidabad...</div>
                                    </div>
                                    <div class="address-item"><button class='change-address'>CHANGE ADDRESS</button></div>
                                </div>

                                <div class="product-wrapper">
                                    <div class="product-item">
                                        <div class="product-section">
                                            <div class="product-image-wrapper">
                                                <img src="./assets/images/testimage.webp" alt="" class="product-image-cart">
                                            </div>
                                        </div>
                                        <div class="product-section">
                                            <div class="cart-item-type">Gharara</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                
                </div>
                <div class="col-lg-1">&nbsp;</div>
            </div>
        </div>
    </section>
</body>
</html>
<?php
    include('./includes/Footer.php');
?>
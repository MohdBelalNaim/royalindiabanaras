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
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="cart-title">My bag</div>
                <div class="row item-wrapper">
                    <div class="col-lg-7">

                        <div class="row border rounded cart-item">
                            <div class="col-lg-4">
                                <div class="img-container">
                                    <img src="./assets/images/product1.webp" alt="" class="product-image">
                                </div>
                            </div>
                            <div class="col-lg-8 cart-item-details">
                                <div class="cart-item-title">Women Yellow & White Printed Kurta with Palazzos</div>
                                <div class="cart-item-size">Size : <b>Medium</b></div>
                                <div class="cart-item-price">₹899</b></div>
                                <div class="cart-actions">
                                    <i class="bi bi-x"></i> <span class="cancel-button">Remove item</span>
                                </div>
                            </div>
                        </div>

                        <div class="row border rounded cart-item">
                            <div class="col-lg-4">
                                <div class="img-container">
                                    <img src="./assets/images/logo.png" alt="" class="product-image">
                                </div>
                            </div>
                            <div class="col-lg-8 cart-item-details">
                                <div class="cart-item-title">Women Yellow & White Printed Kurta with Palazzos</div>
                                <div class="cart-item-size">Size : <b>Medium</b></div>
                                <div class="cart-item-price">₹899</b></div>
                                <div class="cart-actions">
                                    <i class="bi bi-x"></i> <span class="cancel-button">Remove item</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 mb-3 total-wrapper">
                        <div class="cart-total-wrapper border rounded">
                            <div class="total-title">Price details</div>
                            <div class="row">
                                <div class="col-lg-6 col-8 total-items">Order total</div>
                                <div class="col-lg-6 col-4 total-items">₹1,999</div>
                                <div class="col-lg-6 col-8 total-items">Taxes</div>
                                <div class="col-lg-6 col-4 total-items">₹90</div>
                                <div class="col-lg-6 col-8 total-items">Delivery charges</div>
                                <div class="col-lg-6 col-4 total-items">₹120</div>
                            </div>
                            <a href="select-delivery-address.php"><button class="btn btn-dark form-control mt-3 continue-button">Continue</button></a>
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
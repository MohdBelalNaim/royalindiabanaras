<?php
    include('./includes/navbar.php');
    include('./includes/checkLogin.php');
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
        <div class="title">Manage Exchange</div>

        <div class="order-details">
            <div class="order-desc py-2 border-bottom">Order ID : #rib34129</div>
            <div class="order-desc py-2 border-bottom">Exchange item : Mohey red suit <a href="" style="font-size:14px" class="px-3">(View item)</a></div>
            <div></div>
        </div>
        <div class="order-desc border-bottom border-dark pb-3 pt-2">Size requested : M</div>

        <div class="address-wrapper border-bottom border-dark pb-2">
            <div class="h5 py-2 mt-2">Shipping address</div>
            <div class="py-1">Mohd Belal Naim</div>
            <div class="py-1">Near makka masjid, zahidabad, gorakhnath</div>
            <div class="py-1">Gorakhpur</div>
            <div class="py-1">Uttar Pradesh, 273015</div>
        </div>

        <div class="actions mb-5">
            <div class="h5 py-2 mt-2">Exchange actions</div>
            <p class="text-danger">
                Accepting or rejecting the order will record your moderator ID and all the moderators will be able to see the action you take
            </p>
            <button class="btn btn-success">Accepts order</button>
            <button class="btn btn-danger">Reject order</button>

        </div>
    </div>
</body>
</html>
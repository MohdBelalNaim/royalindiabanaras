<?php
    include('Config.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal India Banaras</title>
    <link rel="stylesheet" href="./assets/css/Navbar.css">
</head>

<body>
    <div class="mobile-overlay">
        <div class="overlay-header text-light">
            <i class='bi bi-x' id="close"></i> Royal India Banaras
        </div>
        <div class="overlay-content">
            <div class="overlay-item animate__animated animate__fadeInUp">
                <a href="wishlist.php" style="color:white;text-decoration:none;"><i class="bi bi-heart px-2"></i> Wishlist</a>
            </div>
            <div class="overlay-item animate__animated animate__fadeInUp">
                <a href="account.php" style="color:white;text-decoration:none;"><i class="bi bi-person px-2"></i> Account</a>
            </div>
            <div class="overlay-item animate__animated animate__fadeInUp">
                <i class="bi bi-info-circle px-2"></i> Help and Support
            </div>
            <div class="overlay-item animate__animated animate__fadeInUp">
                <i class="bi bi-card-text px-2"></i> About Us
            </div>
            <div class="overlay-item animate__animated animate__fadeInUp">
                <i class="bi bi-telephone px-2"></i> Contact Us
            </div>
        </div>
    </div>
    <div class="navbar-desktop">
        <div class="contact-container">
            <i class="bi bi-telephone px-2"></i> +91-6386164836
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-grid actions-grid">
                <div class="navbar-actions">
                    Help & Support
                </div>
                <div class="navbar-actions">
                    About us
                </div>
            </div>
            <div class="navbar-grid">
                <center>
                    <img src="./assets/images/logo.png" class="logo" alt="">
                </center>
            </div>
            <div class="navbar-grid">

                <a href="./search-page.php" style="text-decoration:none;color:black"><i class="bi bi-search navbar-icons"></i></a>
                <a href="./wishlist.php" style="text-decoration:none;color:black"><i class="bi bi-heart navbar-icons"></i></a>
                <a href="./cart.php" style="text-decoration:none;color:black"><i class="bi bi-bag navbar-icons"></i></a>
                <a href="./account.php" style="text-decoration:none;color:black"><i class="bi bi-person navbar-icons"></i></a>
            </div>
        </div>
        <div class="navbar-categories">
            <a href="./kurta.php" class="navbar-link"><div class="navbar-category">KURTA</div></a>
            <a href="./lehenga.php" class="navbar-link"><div class="navbar-category">LEHENGA</div></a>
            <a href="./saree.php" class="navbar-link"><div class="navbar-category">SAREE</div></a>
            <a href="./gharara.php" class="navbar-link"><div class="navbar-category">GHARARA</div></a>   
            <a href="./accessories.php" class="navbar-link"><div class="navbar-category">ACCESSORIES</div></a>
            <a href="./kids.php" class="navbar-link"><div class="navbar-category">KIDS</div></a>
        </div>
    </div>

    <div class="navbar-mobile">
            <span>Royal India Banaras</span>
            <span>
                <a href="search-page.php" style="color:black"><i class="bi bi-search mobile-icon px-2"></i></a>
                <a href="cart.php" style="color:black"><i class="bi bi-bag mobile-icon px-2"></i></a>
                <i class="bi bi-list mobile-icon" id="show"></i>
            </span>
    </div>
    <div class="mobile-categories">
            <a href="./kurta.php" class="navbar-link"><div>KURTA</div></a>
            <a href="./lehenga.php" class="navbar-link"><div>LEHENGA</div></a>
            <a href="./saree.php" class="navbar-link"><div>SAREE</div></a>
            <a href="./gharara.php" class="navbar-link"><div>GHARARA</div></a>
            <a href="./accessories.php" class="navbar-link"><div>ACCESSORIES</div></a>
            <a href="./kids.php" class="navbar-link"><div>KIDS</div></a>
    </div>
        
    </div>

    <script>
        $("#close").click(function(){
            $(".mobile-overlay").toggle()
        })

        $("#show").click(function(){
            $(".mobile-overlay").toggle()
        })
    </script>
</body>

</html>
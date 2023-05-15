<?php
    include('./includes/Navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/search.css">
</head>
<body>
    <div class="container">
        <div class="title">Search for a product</div>
        <div class="row">
            <div class="col-lg-11 col-9 wrapper">
                <input type="text" class="form-control py-2" placeholder='Search here'>
            </div>
            <div class="col-lg-1 col-3 wrappper">
                <button class="btn btn-dark py-2 form-control">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
        <div class="trending-title mt-5">Trending searches</div>
        <div class="trending mb-5">
            <div>Kurta</div>
            <div>Saree</div>
            <div>Red saree</div>
            <div>Yellow suit</div>
            <div>Bridal gharara</div>
            <div>Yellow kurta</div>
        </div>
    </div>
</body>
</html>
<?php
    include('./includes/Footer.php');
?>
<?php
    ob_start();
    include('./includes/Navbar.php');
    if(isset($_GET['price'])){
        $price = $_GET['price'];
        if($price==999 || $price==599 || $price==1299 || $price==2999){
            $display_price = number_format($price);
            $query = "SELECT * from products where price < $price";
            $res = mysqli_query($conn,$query);
            $count = mysqli_num_rows($res); 
        }
        else{
            header("location:index.php");
        }
    }
    else{
        header("location:index.php");
    }
    ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/price.css">
</head>
<body>
    <div class="container">
        <div class="title">
            Everything under ₹<?php echo $display_price;?>
        </div>
        <?php
        if($count>0){
            echo "<div class='product-container container'>";
            
                    while($row = mysqli_fetch_assoc($res)){
                        $price = $row['price'];
                        $images = explode('+',$row['images']);
                        $image = $images[0];
                        $price = number_format($row['price']);
                        $title = strlen($row['name'])>10?substr($row['name'],0,14).'...':$row['name'];

                        echo "
                        <div class='product-item'>
                            <div class='product-image-wrapper'>
                                <img src='./ribadmin/product-images/$image' class='product-image'>
                            </div>
                            <div class='product-description'>
                                <div class='product-title'>$title</div>
                                <div class='product-price'><span>₹$price</span> <span
                                        class='text-muted px-1'><strike>₹5,999</strike></span> </div>

                            </div>
                        </div>
                        ";
                    }
                }
                else{
                    echo "<div class='border rounded text-center py-5 mt-3 mb-3'>No products found!</div>";
                }   
            echo"</div>";
        ?>
    </div>
</body>
</html>
<?php
    include('./includes/Footer.php');
?>
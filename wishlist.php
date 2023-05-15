<?php
    ob_start();
    include('./includes/Navbar.php');
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
        $user = $_SESSION['user'];
        $query="select * from wishlist where user = '$user'";
        $res=mysqli_query($conn,$query);
        $count=mysqli_num_rows($res);
        

        if(isset($_GET['remove'])){
            $id=$_GET['remove'];
            $query="delete from wishlist where id='$id'";
            if($conn->query($query)){
                header("location:wishlist.php");
            }
        }
    }
    else{
        header("location:login.php?redir=wishlist");
    }
    ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/wishlist.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="wishlist-title">My wishlist</div>
        </div>
        <div class="product-container container">
            <?php
                if($count>0){
                    while($row=mysqli_fetch_assoc($res)){
                        $image=$row['image'];
                        $name = strlen($row['name'])<10?$row['name']:substr($row['name'],0,15)."...";
                        $price = number_format($row['price']);
                        $id=$row['id'];
    
                        echo "
                        <div class='product-item'>
                            <div class=product-image-wrapper'>
                                <img src='./ribadmin/product-images/$image' class='product-image'>
                            </div>
                            <div class='product-description'>
                                <div class='product-title'>$name</div>
                                <div class='product-price'><span>₹$price</span> <span
                                        class='text-muted px-1'><strike>₹5,999</strike></span></div>
                            
                            </div>
                            <div class='remove-button'><a href='wishlist.php?remove=$id' style='all:unset'><i class='bi bi-x'></i> Remove</a> </div>
                        </div>
                        ";
                    }
                }
                else{
                    echo "<div class='text-center py-5 form-control'>No items in wishlist<div>";
                }
            ?>
            
            
        </div>
    </section>
</body>
</html>

<?php
    include('./includes/Footer.php');
?>
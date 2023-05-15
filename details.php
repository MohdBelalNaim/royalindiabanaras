<?php
    include('./includes/Navbar.php');
    

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $product = "SELECT * from products where id='$id'";
        
        $res = mysqli_query($conn,$product);
        $data = mysqli_fetch_assoc($res);

        $images = explode('+',$data['images']);
        
        if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            $user = $_SESSION['user'];   
        }
        else{
            $user='';
        }
        

            $name = $data['name'];
            $price = $data['price'];
            $img = $images[0];
            $category = $data['category'];
            $related = "SELECT * from products where id!='$id' and category='$category' limit 5";

            $check_wishlist = "SELECT * from wishlist where user='$user' and pid ='$id'";
            $count = mysqli_num_rows(mysqli_query($conn,$check_wishlist));

            $check_cart = "SELECT * from bag where user='$user' and pid='$id'";
            $cart_count = mysqli_num_rows(mysqli_query($conn,$check_cart));
        

            $related_res = mysqli_query($conn,$related);
            $related_count = mysqli_num_rows($related_res);

            
    }
    else{
        header("location:index.php");
    }

    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/details.css">
</head>
<body>

    <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 image-section">
                <div class="slider-container">
                    <div class="slider-button" onclick="previous()"><i class="bi bi-chevron-left"></i></div>
                    <div class="slider-image-wrapper">
                        <?php
                            for($i=0;$i<sizeof($images);$i++){
                                $curr = $images[$i];
                                echo "<div class='slider-image-item animate__animated animate__fadeIn'><img class='slider-image' src='./ribadmin/product-images/$curr' /></div>";
                            }
                        ?>
                        
                    </div>
                    <div class="slider-button" onclick="next()"><i class="bi bi-chevron-right"></i></div>
                </div>
            </div>
            <div class="col-lg-6 details-section px-3">
                <div class="product-title-main">
                    <?php
                        echo $data['name'];
                    ?>
                </div>
                <div class="product-category text-muted">
                    <?php
                        echo $data['category'];
                    ?>
                </div>
                <div class="price">
                    <?php
                        echo '₹'.number_format($data['price']);
                    ?>
                </div>
                <div class="text-success taxes">
                    Inclusive of all taxes
                </div>
                <div class="size-selection">
                    <span class="size-title">Select your size</span>
                    <div class="size-items">
                        <div class="size" onclick="setSize(0,'S')">S</div>
                        <div class="size" onclick="setSize(1,'M')">M</div>
                        <div class="size" onclick="setSize(2,'L')">L</div>
                        <div class="size" onclick="setSize(3,'XL')">XL</div>
                    </div>
                    <div class="size-prompt text-danger mt-2 animate__animated animate__bounceIn" style="display:none">Please select a size to continue</div>
                </div>
                <div class="actions">
                    <?php
                        if($cart_count<1) echo "<button class='action-button add-bag' id='add-cart' onclick='addToBag($id)'> <i class='bi bi-bag px-1'></i> ADD TO BAG</button>";
                        else echo "<button class='action-button in-bag' disabled> <i class='bi bi-bag-check-fill px-1'></i> ITEM IN BAG</button>";
                    ?>
                    
                    
                    
                    <button class="action-button" id="in-bag-dummy" style="display:none" disabled> <i class="bi bi-bag-check-fill px-1"></i> ITEM IN BAG</button>
                    <?php
                        $id = $data['id'];
                        if($count>0){
                            echo "<button class='action-button outline btn-danger text-light' id='rem-wish' onclick='addToWishlist($id)''> <i class='bi bi-heart-fill px-1'></i> REMOVE FROM LIST</button>";
                        }
                        else{
                            echo "<button class='action-button outline' id='add-wish' onclick='addToWishlist($id)'> <i class='bi bi-heart px-1'></i> WISHLIST</button>";
                        }
                    ?>
                    
                    <button class='action-button outline btn-danger text-light' style="display:none" id='rem-wish-dummy' onclick='addToWishlist(<?php echo $id;?>)''> <i class='bi bi-heart-fill px-1'></i> REMOVE FROM LIST</button>
                    <button class='action-button outline' id='add-wish-dummy' style="display:none" onclick='addToWishlist(<?php echo $id;?>)'> <i class='bi bi-heart px-1'></i> WISHLIST</button>
                    

                    
                    
                </div>
                <div class="description">
                    <?php
                        echo $data['description'];
                    ?>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <section style="border-top:1px solid lightgray">
        <div class="container">
            <div class="similiar-title">Similiar products</div>
        </div>
        <div class="product-container container">
            <?php
                if($related_count>0){
                    while($row = mysqli_fetch_assoc($related_res)){
                        $title = strlen($row['name'])>10?substr($row['name'],0,16).'...':$row['name'];
                        $price = $row['price'];
                        $images = explode('+',$row['images']);
                        $image = $images[0]; 
                        $id = $row['id'];
                        echo "
                        <div class='product-item'>
                            <a href='details.php?id=$id' style='text-decoration:none;color:black'>
                            <div class='product-image-wrapper'>
                                <img src='./ribadmin/product-images/$image' class='product-image'>
                            </div>
                            <div class='product-description'>
                                <div class='product-title'>$title</div>
                                <div class='product-price'><span>₹$price</span> <span
                                        class='text-muted px-1'><strike>₹5,999</strike></span> <span class='discount'>44% off</span></div>
                            </div>
                            </a>
                        </div>
                        ";
                    }
                }
                else{
                    echo "<div class='py-5'>No similiar products found</div>";
                }
            ?>
            
        </div>
            </div>
    </section>
</body>

<script>


    let current = 0;
    let curr_size = 0;
    let images  = document.getElementsByClassName("slider-image-item");
    let sizes = document.getElementsByClassName("size");
    let sizeFlag=0;


    function showImage(index){
        for(let i=0;i<images.length;i++){
            images[i].style.display="none";
        }

        images[index].style.display="block"
    }
    function setSize(index,size){
        $(".size-prompt").hide()
        sizeFlag=1
        for(var i=0;i<sizes.length;i++){
            sizes[i].classList.remove("selected-size")
        }

        sizes[index].classList.add("selected-size")
       
        $.ajax({
            url:"ajax/size.php",
            type:"GET",
            data:{
                sizeSel:size,
            }
        })
    }

    showImage(current)    

    function next(){
        if(current+1!=images.length) current++;
        else current=0;

        showImage(current)
        console.log(current)
    }
    function previous(){
        if(current-1>0) current--;
        else current=0;

        showImage(current)
        console.log(current)
    }
    
    function addToBag(id){
        if(sizeFlag==0){
            $(".size-prompt").show()
        }
        else{
            $.ajax({
                url:"ajax/bag.php",
                type:"POST",
                data:{
                    pid:id,
                    user:'<?php echo $user;?>',
                    name:'<?php echo $name;?>',
                    price:'<?php echo $price;?>',
                    image:'<?php echo $img;?>'
                },
                success:function(res){
                    if(res=='nosign') location.href='login.php'
                    else {
                        Toastify({
                            text: "Added to bag",
                            close: true,
                            gravity: "bottom", // `top` or `bottom`
                            position: "center", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                              background: "black",
                            },
          
                        }).showToast();
                        $(".add-bag").hide()
                        $("#in-bag-dummy").show()
                    }
                }
            })
        }
    }

    function addToWishlist(id){
        $.ajax({
            url:"ajax/wishlist.php",
            type:"POST",
            data:{
                pid:id,
                user:'<?php echo $user;?>',
                name:'<?php echo $name;?>',
                price:'<?php echo $price;?>',
                image:'<?php echo $img;?>'
            },
            success:function(res){
                if(res=='nosign') location.href='login.php'
                else{
                    if(res=='added'){
                        Toastify({
                            text: "Item added to wishlist",
                            close: true,
                            gravity: "bottom", // `top` or `bottom`
                            position: "center", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                              background: "green",
                            },
                            
                        }).showToast();
                        $("#add-wish").hide();
                        $("#add-wish-dummy").hide();
                        $("#rem-wish-dummy").show();

                    }
                    else{
                        Toastify({
                            text: "Item removed from wishlist",
                            close: true,
                            gravity: "bottom", // `top` or `bottom`
                            position: "center", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                              background: "red",
                            },
          
                        }).showToast();
                        $("#rem-wish").hide();
                        $("#rem-wish-dummy").hide();
                        $("#add-wish-dummy").show();
                        
                    }
                }
            } 
        })
    }
   
</script>
</html>

<?php
    include('./includes/Footer.php');
?>
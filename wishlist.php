<?php
    include('./includes/Navbar.php');
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
            <div class="product-item">
                <div class="product-image-wrapper">
                    <img src="./assets/images/testimage.webp" alt="" class="product-image">
                </div>
                <div class="product-description">
                    <div class="product-title">Yellow cotton suit</div>
                    <div class="product-price"><span>₹2,999</span> <span
                            class="text-muted px-1"><strike>₹5,999</strike></span> <span class="discount">44% off</span></div>

                </div>
                <div class="remove-button"> <i class="bi bi-x"></i> Remove</div>
            </div>
            <div class="product-item">
                <div class="product-image-wrapper">
                    <img src="https://assets.myntassets.com/f_webp,fl_progressive/h_960,q_80,w_720/v1/assets/images/13407444/2021/2/2/fa5b3f81-dad6-4fb0-9b88-9b54893499e21612248892904-Yellow-Bomber-Jacket-Kalidar-Skirt-Set-8541612248890697-1.jpg"
                        alt="" class="product-image">
                </div>
                <div class="product-description">
                    <div class="product-title">Fuison wear</div>
                    <div class="product-price"><span>₹1,504</span> <span
                            class="text-muted px-1"><strike>₹5,999</strike></span><span class="discount">44% off</span> </div>
                    
                </div>
                <div class="remove-button"> <i class="bi bi-x"></i> Remove</div>
            </div>
            <div class="product-item">
                <div class="product-image-wrapper">
                    <img src="https://assets.myntassets.com/f_webp,fl_progressive/h_960,q_80,w_720/v1/assets/images/1639789/2017/11/30/11512016936412-W-Pink-Mukaish-Work-Dupatta-9961512016936400-1.jpg"
                        alt="" class="product-image">
                </div>
                <div class="product-description">
                    <div class="product-title">Pink dupatta</div>
                    <div class="product-price"><span>₹450</span> <span
                            class="text-muted px-1"><strike>₹999</strike></span><span class="discount">44% off</span> </div>
                    
                </div>
                <div class="remove-button"> <i class="bi bi-x"></i> Remove</div>
            </div>
            <div class="product-item">
                <div class="product-image-wrapper">
                    <img src="https://assets.myntassets.com/f_webp,fl_progressive/h_960,q_80,w_720/v1/assets/images/10234517/2020/1/10/532c3fd0-c7c6-4113-82ae-182a66b8b9dc1578648870932-W-Women-Pink--Orange-Printed-Layered-Straight-Kurta-with-Tro-1.jpg"
                        alt="" class="product-image">
                </div>
                <div class="product-description">
                    <div class="product-title">Layered Pink Ku...</div>
                    <div class="product-price"><span>₹2,999</span> <span
                            class="text-muted px-1"><strike>₹5,999</strike></span> <span class="discount">44% off</span></div>
                </div>
                <div class="remove-button"> <i class="bi bi-x"></i> Remove</div>
            </div>
        </div>
    </section>
</body>
</html>

<?php
    include('./includes/Footer.php');
?>
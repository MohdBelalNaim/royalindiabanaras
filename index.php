<?php
    include('./includes/Navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/Index.css">
</head>

<body>
    <section>
        <div class="main-wrapper">
            <div class="wrapper-title animate__animated animate__fadeInUp">
                It's an affair of traditions
            </div>
            <div class="wrapper-content animate__animated animate__fadeInUp">
                Royal India Banaras is a premium ethnic clothing brand that celebrates the rich heritage and
                craftsmanship
                of Banaras, an ancient city in northern India famous for its intricate weaving and embroidery
                techniques.
            </div>
            <div class="animate__animated animate__fadeInUp">
                <button class="banner-button"><a href="#collections" style="all:unset">Explore collection</a></button>
            </div>
        </div>
    </section>

    <section id="collections">
        <div class="container py-3">
            <center>
                <div class="section-title">Latest collections</div>
            </center>
        </div>

        <div class="product-container container">
            <div class="product-item">
                <div class="product-image-wrapper">
                    <img src="./assets/images/testimage.webp" alt="" class="product-image">
                </div>
                <div class="product-description">
                    <div class="product-title">Yellow cotton suit</div>
                    <div class="product-price"><span>₹2,999</span> <span
                            class="text-muted px-1"><strike>₹5,999</strike></span> </div>
                    <div class="product-actions">
                        <button class="view"> <a href="details.php" style="color:white;text-decoration:none;"><i class="bi bi-eye"></i> View</a></button>
                        <button class="add-to-bag"> <i class="bi bi-bag"></i> </button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-image-wrapper">
                    <img src="https://assets.myntassets.com/f_webp,fl_progressive/h_960,q_80,w_720/v1/assets/images/13407444/2021/2/2/fa5b3f81-dad6-4fb0-9b88-9b54893499e21612248892904-Yellow-Bomber-Jacket-Kalidar-Skirt-Set-8541612248890697-1.jpg"
                        alt="" class="product-image">
                </div>
                <div class="product-description">
                    <div class="product-title">Fuison wear</div>
                    <div class="product-price"><span>₹1,504</span> <span
                            class="text-muted px-1"><strike>₹5,999</strike></span> </div>
                    <div class="product-actions">
                        <button class="view"><i class="bi bi-eye"></i> View</button>
                        <button class="add-to-bag"> <i class="bi bi-bag"></i> </button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-image-wrapper">
                    <img src="https://assets.myntassets.com/f_webp,fl_progressive/h_960,q_80,w_720/v1/assets/images/1639789/2017/11/30/11512016936412-W-Pink-Mukaish-Work-Dupatta-9961512016936400-1.jpg"
                        alt="" class="product-image">
                </div>
                <div class="product-description">
                    <div class="product-title">Pink dupatta</div>
                    <div class="product-price"><span>₹450</span> <span
                            class="text-muted px-1"><strike>₹999</strike></span> </div>
                    <div class="product-actions">
                        <button class="view"><i class="bi bi-eye"></i> View</button>
                        <button class="add-to-bag"> <i class="bi bi-bag"></i> </button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-image-wrapper">
                    <img src="https://assets.myntassets.com/f_webp,fl_progressive/h_960,q_80,w_720/v1/assets/images/10234517/2020/1/10/532c3fd0-c7c6-4113-82ae-182a66b8b9dc1578648870932-W-Women-Pink--Orange-Printed-Layered-Straight-Kurta-with-Tro-1.jpg"
                        alt="" class="product-image">
                </div>
                <div class="product-description">
                    <div class="product-title">Layered Pink Ku...</div>
                    <div class="product-price"><span>₹2,999</span> <span
                            class="text-muted px-1"><strike>₹5,999</strike></span> </div>
                    <div class="product-actions">
                        <button class="view"><i class="bi bi-eye"></i> View</button>
                        <button class="add-to-bag"> <i class="bi bi-bag"></i> </button>
                    </div>
                </div>
            </div>
        </div>
        
        <center>
                <button class="view-more view-dark" class="mt-3">View more <i class="bi bi-arrow-right"></i> </button>
        </center>
    </section>

    <section>
        <div class="gradient-section py-5">
            <div class="container">
                <div class="gradient-title">
                    Great discounts don't need occasions!
                </div>
                <div class="gradient-description text-light">
                    Get ready to upgrade your fashion game with our discount offer on Royal India Banaras. Enjoy upto
                    40% off on all items, including stylish tops, dresses, loungewear, and
                    accessories
                </div>

                <div class="product-container">
            <div class="product-item">
                <div class="product-image-wrapper">
                    <img src="./assets/images/testimage.webp" alt="" class="product-image">
                </div>
                <div class="product-description">
                    <div class="product-title">Yellow cotton suit</div>
                    <div class="product-price"><span>₹2,999</span> <span
                            class="text-muted px-1"><strike>₹5,999</strike></span> <span class="discount">44% off</span></div>

                </div>
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
            </div>
        </div>
            </div>
            <center>
                <button class="view-more" class="mt-3">View more <i class="bi bi-arrow-right"></i> </button>
            </center>
        </div>
    </section>

    <section>
        <div class="container py-3">
            <center>
                <div class="section-title">Shop by price</div>
            </center>
        </div>
        <div class="container price-wrapper">
            <div class="price-item">
                <div class="price-title">Upto</div>
                <div class="price-value">₹599</div>
            </div>
            <div class="price-item">
                <div class="price-title">Upto</div>
                <div class="price-value">₹999</div>
            </div>
            <div class="price-item">
                <div class="price-title">Upto</div>
                <div class="price-value">₹1,299</div>
            </div>
            <div class="price-item">
                <div class="price-title">Upto</div>
                <div class="price-value">₹2,999</div>
            </div>
        </div>

    </section>

    <section>
        <div class="container py-3">
            <center>
                <div class="section-title">Seasonal store</div>
            </center>
        </div>
        <div class="seasons">
            <div class="season-item">
                <div class="store-title">
                    The winter store
                </div>
                <div>
                    <button class="visit-store">Visit store</button>
                </div>
            </div>
            <div class="season-item">
                <div class="store-title">
                    The summer store
                </div>
                <div>
                    <button class="visit-store">Visit store</button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
    include('./includes/Footer.php');
?>
<?php
    include('./includes/Navbar.php');
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
                        <div class="slider-image-item animate__animated animate__fadeIn"><img class="slider-image" src="./assets/images/product1.webp" alt=""></div>
                        <div class="slider-image-item animate__animated animate__fadeIn"><img class="slider-image" src="./assets/images/product2.webp" alt=""></div>
                        <div class="slider-image-item animate__animated animate__fadeIn"><img class="slider-image" src="./assets/images/testimage.webp" alt=""></div>
                    </div>
                    <div class="slider-button" onclick="next()"><i class="bi bi-chevron-right"></i></div>
                </div>
            </div>
            <div class="col-lg-6 details-section px-3">
                <div class="product-title-main">
                    Women Beige Floral Yoke Design Straight Kurta with Trousers & With Dupatta
                </div>
                <div class="product-category text-muted">
                    Kurta
                </div>
                <div class="price">
                    ₹887
                </div>
                <div class="text-success taxes">
                    Inclusive of all taxes
                </div>
                <div class="size-selection">
                    <span class="size-title">Select your size</span>
                    <div class="size-items">
                        <div class="size" onclick="setSize(0)">S</div>
                        <div class="size" onclick="setSize(1)">M</div>
                        <div class="size" onclick="setSize(2)">L</div>
                        <div class="size" onclick="setSize(3)">XL</div>
                    </div>
                </div>
                <div class="actions">
                    <button class="action-button"> <i class="bi bi-bag px-1"></i> ADD TO BAG</button>
                    <button class="action-button outline"> <i class="bi bi-heart px-1"></i> WISHLIST</button>
                </div>
                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, odit quibusdam. Saepe necessitatibus quisquam deleniti blanditiis deserunt placeat, ut doloremque aperiam corporis quas praesentium itaque odit, voluptate molestiae ipsa rem?
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
    </section>
</body>

<script>
    let current = 0;
    let curr_size = 0;
    let images  = document.getElementsByClassName("slider-image-item");
    let sizes = document.getElementsByClassName("size");



    function showImage(index){
        for(let i=0;i<images.length;i++){
            images[i].style.display="none";
        }

        images[index].style.display="block"
    }
    function setSize(index){
        for(var i=0;i<sizes.length;i++){
            sizes[i].classList.remove("selected-size")
        }

        sizes[index].classList.add("selected-size")
    }

    setSize(curr_size)

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

   
</script>
</html>

<?php
    include('./includes/Footer.php');
?>
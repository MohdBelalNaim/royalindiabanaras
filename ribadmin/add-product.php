<?php
    include('./includes/navbar.php');
    include('./includes/checkLogin.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $location = "product-images/";

        $file1 = $_FILES['image1']['name'];
        $file_tmp1 = $_FILES['image1']['tmp_name'];
        
        $file2 = $_FILES['image2']['name'];
        $file_tmp2 = $_FILES['image2']['tmp_name'];
        
        $file3 = $_FILES['image3']['name'];
        $file_tmp3 = $_FILES['image3']['tmp_name'];

        $data=[];
        $data = [$file1,$file2,$file3];

        $images = implode('+',$data);
        $query="INSERT INTO products (name,price,category,description,images) values ('$name','$price','$category','$description','$images')";
        $fire = mysqli_query($conn,$query);

        if($fire){
            move_uploaded_file($file_tmp1,$location.$file1);
            move_uploaded_file($file_tmp2,$location.$file2);
            move_uploaded_file($file_tmp3,$location.$file3);

            header("location:all-products.php");
        }
        else{
            echo "Something went wrong";
        }
    }
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
        <div class="title border-bottom">Add a product</div>

        <div class="row mt-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form method="POST" enctype="multipart/form-data">
                    <p>
                        <label for="">Product name</label>
                        <input type="text" class="form-control" placeholder="Product title" name="name">
                    </p>

                    <p>
                        <label for="">Product category</label>
                        <select name="category" class="form-control">
                            <option value="saree">Saree</option>
                            <option value="suit">Suits</option>
                            <option value="kids">Kids</option>
                            <option value="kids">Kurta</option>
                            <option value="kids">Lehenga</option>
                            <option value="kids">Accessories</option>
                            <option value="gharara">Gharara</option>
                        </select>
                    </p>


                    <p>
                        <label for="">Product price</label>
                        <input type="number" class="form-control" placeholder="Price" name="price">
                    </p>

                    <p>
                        <label for="">Product description</label>
                        <textarea class="form-control" name="description" placeholder="Description" cols="30" rows="5"></textarea>
                    </p>


                    <p>
                        <label for="">Product images</label>
                        <input type="file" name="image1" class="form-control mt-2">
                        <input type="file" name="image2" class="form-control mt-2">
                        <input type="file" name="image3" class="form-control mt-2">
                    </p>

                    <button class="btn btn-dark form-control mb-5" name="submit">Add product to store</button>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</body>
</html>
<?php
    include('./includes/navbar.php');
    include('./includes/checkLogin.php');

    $products = "SELECT * from products order by id desc";
    $res = mysqli_query($conn,$products);
    
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $query = "DELETE from products where id = $id";

        if($conn->query($query)) header("location:all-products.php");
        else echo "Something went wrong!";
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
        <div class="title">All products</div>

        <div class="table-holder">
            <table class="table table-striped table-responsive">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($res)){
                            $id  = $row['id'];
                            $name  = $row['name'];
                            $category  = $row['category'];
                            $price  = number_format($row['price']);
                            echo"
                            <tr>
                                <td>$id</td>
                                <td>$name</td>
                                <td>$category</td>
                                <td>₹$price</td>
                                <td>
                                    <button class='btn btn-danger' onclick='ConfirmDelete($id)'> <i class='bi bi-trash'></i> </button>
                                    <a href='../details.php?id=$id'><button class='btn btn-primary'> <i class='bi bi-eye'></i> </button></a>
                                </td>
                            </tr>
                            ";
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function ConfirmDelete(id)
            {
                if (confirm("Are you sure you want to delete this product?"))
                    location.href=`all-products.php?delete=${id}`;
            }
    </script>
</body>
</html>
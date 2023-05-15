<?php
    include('./includes/navbar.php');
    include('./includes/checkLogin.php');
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
        <div class="title">Sellings in <?php echo date("M");?></div>
        <div class="border-bottom py-3">
            <div class="h3">₹29,950</div>
        </div>
        <div class="table-holder mt-3">
            <div class="h5 pb-2">Products sold</div>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Products</th>
                        <th>Order total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mohey red saree + 3 more</td>
                        <td>₹2,990</td>          
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohey red saree + 3 more</td>
                        <td>₹2,990</td>           
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohey red saree + 3 more</td>
                        <td>₹2,990</td>           
                    </tr>


                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
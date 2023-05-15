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
        <div class="title">Exchange requests</div>

        <div class="table-holder">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Products</th>
                        <th>Order total</th>
                        <th>Order date</th>
                        <th>Order time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mohey red saree + 3 more</td>
                        <td>₹2,990</td>
                        <td>12 July 2022</td>
                        <td>23:54:52</td>
                        <td>
                            <a href="manage-exchange.php">
                                <button class="btn btn-primary">Manage</button>
                            </a>
                        </td>              
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohey red saree + 3 more</td>
                        <td>₹2,990</td>
                        <td>12 July 2022</td>
                        <td>23:54:52</td>
                        <td><button class="btn btn-primary">Manage</button></td>              
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohey red saree + 3 more</td>
                        <td>₹2,990</td>
                        <td>12 July 2022</td>
                        <td>23:54:52</td>
                        <td><button class="btn btn-primary">Manage</button></td>              
                    </tr>


                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
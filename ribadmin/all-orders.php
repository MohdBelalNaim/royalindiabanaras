<?php
    include('./includes/navbar.php');
    include('./includes/checkLogin.php');

    $query = 'SELECT * from orders order by uid desc';
    $res = mysqli_query($conn,$query)

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
        <div class="title">All orders</div>

        <div class="table-holder">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Products</th>
                        <th>Order total</th>
                        <th>Order date</th>
                        <th>Order ID</th>
                        <th>Status</th>
                        <th>User email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($res)){
                                $allProds = explode('+',$row['products']);
                                $len = sizeof($allProds);
                                $id = $row['uid'];
                                $total = number_format($row['total']);
                                $date = $row['date'];
                                $oid = $row['orderId'];
                                $user = $row['user'];
                                $status = $row['status'];
                                if($status=='Rejected'){
                                    $style = 'background-color:tomato !important';
                                }
                                else if($status=='Accepted'){
                                    $style = 'background-color:lightgreen !important';
                                }
                                else{
                                    $style='';
                                }
                                echo "
                                <tr style='$style'>
                                    <td>$id</td>
                                    <td>$len product(s)</td>
                                    <td>₹$total</td>
                                    <td>$date</td>
                                    <td>$oid</td>
                                    <td>$status</td>
                                    <td>$user</td>
                                    <td>
                                        <a href='manage-order.php?id=$id'>
                                            <button class='btn btn-primary'>Manage</button>
                                        </a>
                                    </td>              
                                </tr>
                                ";
                            }
                        ?>

                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
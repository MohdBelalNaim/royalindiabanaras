<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','royalindiabanaras');

    $products = substr($_SESSION['cartAll'],0,strlen($_SESSION['cartAll'])-1);
    $address = $_SESSION['deliveryAddress'];
    $user = $_SESSION['user'];
    $method = "Cash on delivery";
    $order_id = date('Ymd').time();
    $pay = $_SESSION['toPay'];
    $date = date('d/m/Y');
    $status = 'Placed';

    $query = "insert into orders (orderId,user,method,address,products,total,date,status) values ('$order_id','$user','$method','$address','$products','$pay','$date','$status')";

    if($conn->query($query)){
        $del = "delete from bag where user = '$user'";
        if($conn->query($del)) header("location:confirmation.php");
    }



?>
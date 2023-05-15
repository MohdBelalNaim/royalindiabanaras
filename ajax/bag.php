<?php
    $conn = mysqli_connect('localhost','root','','royalindiabanaras');

    
    session_start();
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
        $pid = $_POST['pid'];
        $user = $_POST['user'];
        $name = $_POST['name'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $size = $_SESSION['size'];

        $query = "insert into bag (pid,user,name,image,price,size) values ('$pid','$user','$name','$image','$price','$size')";
        if($conn->query($query)){
            echo "added";
        }
        else{
            echo "not";
        }
        
    }
    else echo "nosign";
?>
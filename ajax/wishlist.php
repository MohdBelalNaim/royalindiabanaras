<?php
    $conn = mysqli_connect('localhost','root','','royalindiabanaras');

    
    session_start();
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
        $user = $_POST['user'];
        $name = $_POST['name'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $pid = $_POST['pid'];

        $check_exist = "SELECT * from wishlist where user='$user' and pid='$pid'";
        $res = mysqli_query($conn,$check_exist);
        $count = mysqli_num_rows($res);

        if($count>0){
            $query = "delete from wishlist where pid='$pid' and user='$user'";
            if($conn->query($query)){
                echo "removed";
            }
        }
        else{
            $query = "insert into wishlist(user,name,image,price,pid) values ('$user','$name','$image','$price','$pid')";
            if($conn->query($query)){
                echo "added";
            }
        }
    }
    else echo "nosign";
?>
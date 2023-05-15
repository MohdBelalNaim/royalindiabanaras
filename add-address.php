<?php
    ob_start();
    include('./includes/Navbar.php');

    $location = '';
    if(isset($_GET['ret'])){
        $location='select-delivery-address.php';
    }
    else{
        $location='add-address.php';
    }

    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $line = $_POST['line'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pin = $_POST['pin'];
        $user = $_SESSION['user'];

        $query="insert into address (name,phone,addressLine,city,state,pin,user) value ('$name','$phone','$line','$city','$state','$pin','$user')";
        if($conn->query($query)){
            header("location:".$location);
        }
        else{
            echo "Something went wrong";
        }
    }
    $user = $_SESSION['user'];
    $address = "SELECT * FROM address where user = '$user' ";
    $result = mysqli_query($conn,$address);
    $count = mysqli_num_rows($result);

    if(isset($_GET['remove'])){
        $id=$_GET['remove'];
        $query="delete from address where id='$id'";
        if($conn->query($query)) header("location:add-address.php");
        else echo "Something went wrong";
    }

    ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/add-address.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="title">My addresses</div>
                        <div class="address-wrapper">
                            <?php
                                if($count>0){
                                    while($row=mysqli_fetch_assoc($result)){
                                        $name=$row['name'];
                                        $phone=$row['phone'];
                                        $line=$row['addressLine'];
                                        $city=$row['city'];
                                        $state=$row['state'];
                                        $pin=$row['pin'];
                                        $id=$row['id'];
                                        echo "
                                        <div class='address-card border rounded px-2 py-2 mb-3 animate__animated animate__fadeInUp'>
                                            <div class='address-item mb-1'><b>$name</b></div>
                                            <div class='address-item mb-1'>+91 $phone</div>
                                            <div class='address-item mb-1'>$line</div>
                                            <div class='address-item mb-1'>$city</div>
                                            <div class='address-item mb-1'>$state, $pin</div>
                                            <div>
                                                <button class='btn btn-danger remove-button' onclick='remove($id)'><i class='bi bi-trash'></i> Remove</button>
                                            </div>
                                        </div>
                                        ";
                                    }
                                }
                                else{
                                    echo "
                                        <div class='text-center py-3 px-3 border rounded'>No address found</div>
                                    ";
                                }
                                
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="title">Add addresses</div>
                        <div class="form-section">
                           <form method="POST">
                                <input type="text" name="name" class="address-control form-control mb-2" placeholder="Full name" required>
                                <input type="text" name="phone" class="address-control form-control mb-2" placeholder="Phone number" required>
                                <input type="text" name="line" class="address-control form-control mb-2" placeholder="Address line" required>
                                <input type="text" name="city" class="address-control form-control mb-2" placeholder="City" required>
                                <input type="text" name="state" class="address-control form-control mb-2" placeholder="State" required>
                                <input type="text" name="pin" class="address-control form-control mb-2" placeholder="PIN" required>
                                <button class="address-control form-control btn btn-dark mb-5" name="add">Add</button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

    <script>
        function remove(id){
            if(confirm("Are you sure you want to delete this address?")){
                location.href=`add-address.php?remove=${id}`
            }
        }
    </script>
</body>
</html>
<?php
    include('./includes/Footer.php');
?>
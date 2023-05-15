<?php
    ob_start();
    include('./includes/Navbar.php');
    $error='';
    
    if(isset($_POST['signup'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $check = "select * from users where email='$email'";
        $count = mysqli_num_rows(mysqli_query($conn,$check));
        if($count>0){
            header("Location:signup.php?exists=1");
        }
        else{
            $query = "insert into users (name,email,password) values ('$name','$email','$password')";
            if($conn->query($query)){
                $_SESSION['user']=$email;
                header("location:index.php");
            }
        }
    }
    if(isset($_GET['exists'])){
        $error='This email is already in use';
    }

    ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/auth.css">
</head>
<body>
    <div class="main-wrapper">
        <div class="login-wrapper">
            <?php
                if($error!=''){
                    echo "<div class='error bg-danger text-light text-center py-2 rounded mb-2 animate__animated animate__bounceIn'>$error</div>";
                }
            ?>
            <div class="title">Create your account</div>
            <div class="mt-2">
                <form method="POST" autocomplete="off">
                    <label class="text-label" for="">Full name</label>
                    <input name="name" type="text" class="form-control" required>

                    <label  for="" class="mt-2 text-label">Email address</label>
                    <input name="email"  type="email" class="form-control" required>
                    
                    <label  for="" class="mt-2 text-label">Password</label>
                    <input name="password"  type="Password" class="form-control" required>
                    
                    <button name="signup" class="text-label form-control btn btn-dark mt-3">Signup</button>
                </form>
            </div>
    
            <div class="text-center text-label mt-3"><a href="login.php" style="text-decoration:none;color:black;">I have already signed up</a></div>
        </div>
    </div>
</body>
</html>

<?php
    include('./includes/Footer.php');
?>
<?php
    ob_start();
    include('./includes/Navbar.php');

    $error = '';
    $location = '';
    if(isset($_GET['wrong'])) $error='The email or password you entered was incorrrect';
    if(isset($_GET['redir'])) $location = $_GET['redir'].".php";
    else $location = 'index.php';

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT* from users where email = '$email' and password = '$password'";
        $res = mysqli_query($conn,$query);
        $count=mysqli_num_rows($res);

        if($count==1){
            $_SESSION['user']=$email;
            header("location:".$location);

        }
        else header("location:login.php?wrong=1");
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
            <div class="title">Login to your account</div>
            <div class="mt-2">
                <form method="POST" autocomplete="off">
                    <label class="text-label" for="">Email address</label>
                    <input name="email" type="text" class="form-control" required>

                    <label  for="" class="mt-2 text-label">Password</label>
                    <input name="password" type="Password" class="form-control" required>
                    <?php
                        if($error!='') echo "<div class='text-danger mt-2'>$error</div>";
                    ?>
                    <div class="forgot mt-3" style="font-size:14px">
                        Forgot password?
                    </div>
                    <button class="text-label form-control btn btn-dark mt-3" name="login">Login</button>
                </form>
            </div>
            <div class="text-center py-2">
                or
            </div>
            <div class="google-button border rounded border-dark text-center py-2">
               <i class="bi bi-google px-2"></i>  Continue with Google
            </div>
            <div class="text-center text-label mt-3"><a href="signup.php" style="text-decoration:none;color:black;">I don't have an account</a></div>
        </div>
    </div>
</body>
</html>

<?php
    include('./includes/Footer.php');
?>
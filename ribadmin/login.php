<?php
    include('./includes/navbar.php');

    $msg = '';

    if(isset($_GET['invalid'])){
        $msg = 'Invalid access credentials';
    }

    if(isset($_POST['login'])){
        $name = $_POST['username'];
        $pass = $_POST['password'];

        $query = "SELECT * from moderator where username ='$name' and password='$pass' ";
        $count = mysqli_num_rows(mysqli_query($conn,$query));

        if($count==1){
            session_start();
            $_SESSION['admin']=$name;
            header('location:index.php');
        }
        else{
            header('location:login.php?invalid=1');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <div class="row mt-5 py-5">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="shadow px-3 py-3 rounded">
                    <div style="font-size:18px" class="border-bottom pb-2">Login to dashboard</div>

                    <form method='post'>
                        <p class="mt-2">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name='username' required>
                        </p>

                        <p>
                            <label for="">Password</label>
                            <input type="password" class="form-control" name='password' required>
                        </p>
                        <?php
                            if($msg!=''){
                                echo "<div class='mb-3 text-danger animate__animated animate__shakeX'>Invalid access credentials!</div>";
                            }
                        ?>
                        <button class="form-control btn btn-dark" name='login'>Login</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</body>
</html>
<?php
    include('./includes/Navbar.php');
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
            <div class="title">Create your account</div>
            <div class="mt-2">
                <form action="" autocomplete="off">
                    <label class="text-label" for="">Full name</label>
                    <input  type="text" class="form-control">

                    <label  for="" class="mt-2 text-label">Email address</label>
                    <input   type="email" class="form-control">
                    
                    <label  for="" class="mt-2 text-label">Password</label>
                    <input   type="Password" class="form-control">
                    
                    <button class="text-label form-control btn btn-dark mt-3">Signup</button>
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
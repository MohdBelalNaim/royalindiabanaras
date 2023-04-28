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
            <div class="title">Login to your account</div>
            <div class="mt-2">
                <form action="" autocomplete="off">
                    <label class="text-label" for="">Email address</label>
                    <input  type="text" class="form-control">

                    <label  for="" class="mt-2 text-label">Password</label>
                    <input   type="Password" class="form-control">
                    <div class="forgot mt-3" style="font-size:14px">
                        Forgot password?
                    </div>
                    <button class="text-label form-control btn btn-dark mt-3">Login</button>
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
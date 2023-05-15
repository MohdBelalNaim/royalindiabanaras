<?php
    include('./includes/navbar.php');
    include('./includes/checkLogin.php');

    $query = 'SELECT * from users';
    $res = mysqli_query($conn,$query);
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
        <div class="title">All users</div>

        <div class="table-holder">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email address</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = mysqli_fetch_assoc($res)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $pass = $row['password'];
                        echo "
                        <tr>
                            <td>$id</td>
                            <td>$name</td>
                            <td>$email</td>
                            <td>$pass</td>
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
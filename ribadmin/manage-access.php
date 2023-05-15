<?php
    include('./includes/navbar.php');
    include('./includes/checkLogin.php');

    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $super = $_POST['superkey'];

        if($super == 'ribadmin'){
            $query = "insert into moderator (name,username,password) values ('$name','$username','$password')";
            if($conn->query($query)){
                header("location:manage-access.php");
            }
        }
        else{
            echo "<script>alert('Invalid superkey')</script>";
        }
    }

    $moderators = "SELECT * from moderator";
    $res = mysqli_query($conn,$moderators);

    if(isset($_GET['del'])){
        $id = $_GET['del'];
        $query = "delete from moderator where id ='$id'";
        if($conn->query($query)) header('location:manage-access.php');
    }
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
        <div class="title border-bottom">Add a moderator</div>

        <div class="row mt-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form method="POST">
                    <p>
                        <label for="">Full name</label>
                        <input name="name" type="text" class="form-control" placeholder="Full name">
                    </p>

                    <p>
                        <label for="">Username</label>
                        <input name="username" type="text" class="form-control" placeholder="Username">
                    </p>


                    <p>
                        <label for="">New password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </p>

                    <p>
                        <label for="">Super key</label>
                        <input name="superkey" type="text" class="form-control" placeholder="Key">
                    </p>



                    <button class="btn btn-dark form-control mb-5" name="add">Add moderator</button>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>


    <section>
        <div class="container">
            <div class="title border-bottom">All moderators</div>

            <div class="table-holder">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($res)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $username = $row['username'];
                            $password = $row['password'];
                            echo "
                            <tr>
                                <td>$id</td>
                                <td>$name</td>
                                <td>$username</td>
                                <td><button class='btn btn-danger' style='font-size:14px' onclick='delConfirm($id)'> <i class='bi bi-trash'></i> Remove</td>
                            </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <script>
        function delConfirm(id){
            if(confirm('Are you sure you want to delete this moderator?')){
                location.href=`manage-access.php?del=${id}`;
            }
        }
    </script>
</body>

</html>
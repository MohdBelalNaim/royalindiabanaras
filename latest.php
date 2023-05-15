<?php
    include('./includes/Navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/latest.css">
</head>
<body>
    <div class="container">
        <div class="title">Latest collections</div>
    </div>
</body>

<script>
    $.ajax({
        url:"./ajax/latest.php",
        type:"POST",
        success:function(res){
            alert(res);
        }
    })
</script>
</html>
<?php
    include('./includes/Footer.php');
?>
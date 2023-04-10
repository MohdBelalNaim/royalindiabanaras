<?php
include('Config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .footer{
        padding:20px 0px;
    }
    .footer-title{
        font-size:24px; 
        display:inline;
        border-bottom:2px solid #fc6c85;
        padding:10px 0px;
    }
    @media only screen and (max-width:600px){
        .footer-item{
            font-size:14px;
            padding:10px 0px !important;
        }
        .footer-title{
            font-size:18px;
        }
    }
</style>
<body>
    <div class="bg-dark footer">
        <div class="container">
           <center>
                <div class="footer-title text-light">
                    Royal India Banaras
                </div>
           </center>
            <div class="row text-light">
                <div class="col-lg-4 text-center py-3">
                    <div class="py-3 footer-item">About</div>
                    <div class="py-3 footer-item">Help</div>
                    <div class="py-3 footer-item">Support</div>
                    <div class="py-3 footer-item">Contact us</div>
                </div>
                <div class="col-lg-4 text-center py-3">
                    <div class="py-3 footer-item">Terms and Conditions</div>
                    <div class="py-3 footer-item">Privacy policy</div>
                    <div class="py-3 footer-item">Data retention summary</div>
                </div>
                <div class="col-lg-4 footer-item text-center py-3">
                    <div class="py-3 footer-item">Facebook</div>
                    <div class="py-3 footer-item">Instagarm</div>
                    <div class="py-3 footer-item">Whatsapp</div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
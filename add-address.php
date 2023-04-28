<?php
    include('./includes/Navbar.php');
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
                            <div class="address-card border rounded px-2 py-2 mb-3 animate__animated animate__fadeInUp">
                                <div class="address-item mb-1"><b>Mohd Belal Naim</b></div>
                                <div class="address-item mb-1">+91 6386164836</b></div>
                                <div class="address-item mb-1">Near makka masjid, zahidabad, gorakhnath, gorakhpur</b></div>
                                <div class="address-item mb-1">Gorakhpur</b></div>
                                <div class="address-item mb-1">Uttarpradesh, 273015</b></div>
                                <div>
                                    <button class="btn btn-danger remove-button"><i class="bi bi-trash"></i> Remove</button>
                                </div>
                            </div>


                            <div class="address-card border rounded px-2 py-2 mb-3 animate__animated animate__fadeInUp">
                                <div class="address-item mb-1"><b>Mohd Belal Naim</b></div>
                                <div class="address-item mb-1">+91 6386164836</b></div>
                                <div class="address-item mb-1">Near makka masjid, zahidabad, gorakhnath, gorakhpur</b></div>
                                <div class="address-item mb-1">Gorakhpur</b></div>
                                <div class="address-item mb-1">Uttarpradesh, 273015</b></div>
                                <div>
                                    <button class="btn btn-danger remove-button"><i class="bi bi-trash"></i> Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="title">Add addresses</div>
                        <div class="form-section">
                            <input type="text" class="address-control form-control mb-2" placeholder="Full name">
                            <input type="text" class="address-control form-control mb-2" placeholder="Phone number">
                            <input type="text" class="address-control form-control mb-2" placeholder="Address line">
                            <input type="text" class="address-control form-control mb-2" placeholder="City">
                            <input type="text" class="address-control form-control mb-2" placeholder="State">
                            <input type="text" class="address-control form-control mb-2" placeholder="Phone number">
                            <button class="address-control form-control btn btn-dark mb-5">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</body>
</html>
<?php
    include('./includes/Footer.php');
?>
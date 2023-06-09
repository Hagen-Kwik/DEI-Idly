<?php
    include_once("controllers/Click_controller.php");
    include_once("controllers/Betatest_controller.php");

    if (isset($_POST["applyforbeta"])) {
        createBetaUser($_POST['email']);
    }
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Idly.Co</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

        <!-- ========================= CSS here ========================= -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
        <link rel="stylesheet" href="assets/css/animate.css" />
        <link rel="stylesheet" href="assets/css/tiny-slider.css" />
        <link rel="stylesheet" href="assets/css/glightbox.min.css" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>

    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- /End Preloader -->

        <!-- Start Header Area -->
        <header class="header navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="nav-inner">
                            <!-- Start Navbar -->
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="index.php">
                                    <img src="assets/images/logo/logo.png" alt="Logo">
                                </a>
                                <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul id="nav" class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a href="index.php" aria-label="Toggle navigation">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index.php" aria-label="Toggle navigation">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index.php" aria-label="Toggle navigation">Overview</a>
                                        </li>
                                    </ul>
                                </div> <!-- navbar collapse -->

                                <form action="download.php" method="POST">
                                    <input type="hidden" value="download" name="download">
                                    <div class="button add-list-button">
                                        <button type="submit" class="btn">Download now</a>
                                    </div>
                                </form>
                            </nav>
                            <!-- End Navbar -->
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </header>
        <!-- End Header Area -->

        <div class="breadcrumbs">
            <div class="container"
                style="min-height: 60vh; display: flex; justify-content: center; align-items: center;">
                <div class="row">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title" style="font-size: 50px; padding: 20px;">Thanks For applying</h1>
                        <!-- FEEL FREE TO DELETE THE H4 IS ELEK -->
                        <h4 style="color:white; padding: 20px;">Please Check Your Email for our newest update thanks!</h4>
                        <!-- Ganti navigation sesuai kemauan -->
                        <a href="index.php"><button class="thanks">GO BACK to home</button></a>
                        <!-- <button class="thanks">GO BACK to home</button>
                        <a href="index.html">GO BACK</a> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================= JS here ========================= -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/tiny-slider.js"></script>
        <script src="assets/js/glightbox.min.js"></script>
        <script src="assets/js/count-up.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script type="text/javascript">
            //====== counter up
            var cu = new counterUp({
                start: 0,
                duration: 2000,
                intvalues: true,
                interval: 100,
                append: " ",
            });
            cu.start();
        </script>
    </body>

</html>
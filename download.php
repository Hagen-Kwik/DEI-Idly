<?php
include_once("controllers/Click_controller.php");

if (isset($_POST["download"])) {
    updateClick();
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">Download Now</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="contact-us" class="contact-us section">
            <div class="container">
                <div class="contact-head wow fadeInUp" data-wow-delay=".4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h3 class="wow zoomIn" data-wow-delay=".2s"
                                    style=" visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                                    Download</h3>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s"
                                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    Aplikasi Sedang dalam Pengembangan</h2>
                                <p class="wow fadeInUp" data-wow-delay=".6s"
                                    style=" visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                    Terima kasih telah ingin mendownload aplikasi kami! Isilah Form dibawah untuk
                                    mendapatkan notifikasi untuk BETA testing aplikasi kami dikemudian hari!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-newsletter">
                    <div class="container">
                        <div class="apply-borders">
                            <div class="row align-items-center">

                                <div class="col-lg-6 col-md-5 col-12">
                                    <div class="title">
                                        <h3>Apply for BETA testing</h3>
                                        <p>Nantikanlah email kami di inbox kalian mengenai beta testing kami!</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-7 col-12">
                                    <div class="form">
                                        <form action="Thanks.php" method="POST" class="newsletter-form">
                                            <div class="container">
                                            <div class="row" style="padding: 10px;">
                                                    <div class="col-lg-8 col-12">
                                                    <input class="apply" name="email" placeholder="Your email address" type="email">
                                                </div>
                                                <div class="col-lg-4 col-12">
                                                    <button type="submit" class="apply-button">Apply</span></button>
                                                </div>
                                                <input type="hidden" value="applyforbeta" name="applyforbeta">
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


        </section>

        <!-- Start Footer Area -->
        <footer class="footer">
            <!-- Start Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row" style="text-align: center;">
                        <p>Designed by Idly</p>
                    </div>
                </div>
            </div>
            <!--/ End Footer Top -->
        </footer>
        <!--/ End Footer Area -->


        <!-- ========================= scroll-top ========================= -->
        <a href="#" class="scroll-top">
            <i class="lni lni-chevron-up"></i>
        </a>

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
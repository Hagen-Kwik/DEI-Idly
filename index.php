<?php
include_once("controllers/Feedback_controller.php");

if (isset($_POST["feedback"])) {
    createFeedback($_POST['nama'],$_POST['email'],$_POST['message']);
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

                                <!-- GAMBAR GANTI SINI -->
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
                                        <a href="#home" class="page-scroll active"
                                            aria-label="Toggle navigation">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#about" class="page-scroll"
                                            aria-label="Toggle navigation">About</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#features" class="page-scroll"
                                            aria-label="Toggle navigation">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#CTA" class="page-scroll"
                                        aria-label="Toggle navigation">Feedbacks</a>
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

    <!-- Start Hero Area -->
    <section id="home" class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInLeft" data-wow-delay=".4s">Jadilah <br>Jurangan Es Krim</h1>
                        <p class="wow fadeInLeft" data-wow-delay=".6s">Downloadlah game pertama Idly.Co, mainkanlah dan dapatkan profit sebanyak mungkin sebagai jurangan es krim dan globalkan tokomu!</p>
                        <div class="button wow fadeInLeft" data-wow-delay=".8s">
                            <!-- <a href="javascript:void(0)" class="btn"><i class="lni lni-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-alt"><i class="lni lni-play-store"></i> Google
                                Play</a> -->
                                <form action="download.php" method="POST">
                                <input type="hidden" value="download" name="download">
                                <div class="button add-list-button">
                                    <button type="submit" class="btn">Download now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="assets/images/header_image.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    
    <!-- Start About Area -->
    <section id="about" class="our-achievement section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="title">
                        <h2>Apa Itu Juragan Es Krim?</h2>
                    </div>

                    <div class="row">
                        
                        <div class="col-lg-6">
                            <img src="assets/images/Idly_V1.png" alt="">
                        </div>

                        <div class="col-lg-6">
                            <p>Juragan Es krim adalah game berbasis mobile  dimaan user akan diberi pengalaman untuk menjalankan bisnis eskrimnya sendiri. User akan bisa mengupgrade peralatan di tokonya dan juga mempercantik visual dari tokonya. Mekanik pvp ada di dalam game ini dalam bentuk trade war. User bisa perang harga dengan toko eskrim milik user lain dimana user akan mendapatkan pelanggan dari toko lain jika menang. Disini user juga akan diberikan opsi untuk memperluas bisnis eskrimnya dengan membuka cabang di kota-kota yang lain. Unutk memperlengkap sistem pvp, kita menyediakan sistem ranking dimana user akan bisa melihat siapa toko yang menghasilkan paling banyak uang</p>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Features Area -->
    <section id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" style="color:white" data-wow-delay=".2s">Features</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s" style="color:white">Ada Apa saja Di Jurangan Es Krim?</h2>
                       </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12" >
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s" style="text-align: center;">
                        <h3>Upgrade Item</h3>
                        <p>Belilah barang terbaru untuk mendapatkan profit lebih</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s" style="text-align: center;">
                        <h3>Otomatis</h3>
                        <p>Bisnis akan tetap berjalan saat HP anda mati, anda akan selalu mendapatkan profit</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".6s" style="text-align: center;">
                        <h3>Mudah Untuk dipahami</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page at its layout.</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->

     <!-- Start Beta Area -->
     <section class="our-achievement section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="title">
                        <h5>Save the Date</h5>
                        <h2>31 May 2023</h2>
                        <h4>BETA testing is almost here! Apply Now for early Access</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Beta Area -->


    <!-- Start Call To Action Area -->
    <section id="CTA" class="section call-action">
        <div class="container">
            <div class="row">
               
                <div>
                    <div>
                      <form class="form" method="post" action="#">
                        <h3 style="color:white;">Kasihlah Feedback Kalian!</h3>
                        <br>
                        <div class="row">
                            <label for="name"><h4 style="color:white;">Nama</h4></label>
                            <input class="feedback_input" name="nama" type="text" placeholder="Nama Anda" required="required"/>
                        </div>

                        <div class="row">
                            <label for="email"><h4 style="color:white;">Email</h4></label>
                            <input class="feedback_input" name="email" type="email" placeholder="Email Anda" required="required"/>
                        </div>

                        <div class="row">
                            <label for="isi"><h4 style="color:white;">Feedback</h4></label>
                            <textarea class="feedback_input" name="message" required="required" rows="4" cols="50" placeholder="Isi"></textarea>                                
                        </div>

                        <div class="row">
                            <input type="hidden" name="feedback" value="feedback">
                            <button type="submit" class="special_btn">Submit Message</button>
                        </div>
                      </form>

                    </div>
                  </div>

            </div>
        </div>
    </section>
    <!-- End Call To Action Area -->

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
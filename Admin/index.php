<?php
session_start();
include_once("../controllers/Click_controller.php");
include_once("../controllers/Betatest_controller.php");
include_once("../controllers/Feedback_controller.php");

if ($_SESSION["role"] !== "admin") {
  header("Location: pages-login.php");
}

if (isset($_POST["signout"])) {
  session_destroy();
  header("Location: pages-login.php");
}
$clicks = readClick(1);
$registereduser = readnumberBetaUser();
$registereduser_display = readallUser();
$allfeedbacks = readallFeedback();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="toggle-sidebar">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div>
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/logo/logo.png" alt="">
        <span class="d-none d-lg-block">Idly</span>
      </a>
    </div><!-- End Logo -->

    <!-- dashboard -->
    <div style="margin-left: 20px;">
      <a href="index.php">
        <span class="d-none d-lg-block">Dashboard</span>
      </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?=$_SESSION['username']?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li class="dropdown-header">
              <h6><?=$_SESSION['username']?></h6>
              <span>Admin</span>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="#" method="post" class="dropdown-item d-flex align-items-center">
                  <i class="bi bi-box-arrow-right"></i>
                  <input type="hidden" name="signout" value="signout">
                  <button type="submit" class="btn">Sign Out</button>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->


  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- start People who presed download Card -->
        <div class="col-6">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title">People Who pressed Download</h5>

              <!-- ISI SINI BUAT MASUKIN DATA -->
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <h6><?= $clicks['jumlah'] ?> Clicks</h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End People who presed download Card  -->

        <!-- start People who presed download Card -->
        <div class="col-6">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title">Registered Users</h5>

              <!-- ISI SINI BUAT MASUKIN DATA -->
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <h6><?= $registereduser['jumlah'] ?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End People who presed download Card  -->


        <!-- Start People who registered  -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">


              <div class="row">
                <div class="col-6">
                  <h5 class="card-title">Registered People</h5>
                </div>
                <div class="col-6 card-title" style="text-align: end;">
                  <button class="btn btn-primary">Send Email to All for BETA Testing</button>
                </div>
              </div>


              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sent Status</th>
                    <th scope="col">Send Email</th>
                  </tr>
                </thead>


                <!-- INPUT DATA HERE -->
                <tbody>

                  <?php
                  foreach ($registereduser_display as $user) {
                  ?>
                    <!-- GREEN STATUS IS badge bg-success -->
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td><?= $user['email'] ?></td>
                      <?php
                      if ($user['sent_status'] == 1) {
                      ?>
                        <td><span class="badge bg-success">Sent</span></td>
                      <?php
                      } else {
                      ?>
                        <td><span class="badge bg-warning">Pending</span></td>
                      <?php
                      }
                      ?>
                      <td><button class="btn btn-primary">Send Email</button></td>
                    </tr>
                  <?php

                  }
                  ?>


                  <!-- YELLOW STATUS IS badge bg-warning -->
                  <!-- <tr>
                    <th scope="row"><a href="#">#2147</a></th>
                    <td>BridieKessler@gmail.com</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                    <td><button class="btn btn-primary">Send Email</button></td>
                  </tr> -->
                </tbody>


                <!-- INPUT DATA END HERE -->
              </table>

            </div>
          </div>
        </div><!-- End People who registered   -->

        <!-- Start Reviews  -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">


              <div class="row">
                <h5 class="card-title">See Reviews</h5>
              </div>


              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Feedback</th>
                  </tr>
                </thead>



                <!-- INPUT DATA HERE -->
                <tbody>
                  <?php
                  foreach ($allfeedbacks as $feedback) {
                  ?>
                    <tr>
                      <th scope="row"><?=$feedback['id']?></th>
                      <td><?=$feedback['email']?></td>
                      <td><?=$feedback['nama']?></td>
                      <td><?=$feedback['message']?></td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>


                <!-- INPUT DATA END HERE -->
              </table>

            </div>
          </div>
        </div><!-- End People who registered   -->

      </div>
    </section>

  </main><!-- End #main -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
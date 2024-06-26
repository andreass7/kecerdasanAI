<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>OnePage Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?php echo base_url('/home'); ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo base_url('/petunjuk') ?> ">Petunjuk</a></li>
                    <li class="dropdown"><a href="#"><span>Desa Wisata</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo base_url('/desaNganggring') ?>">Desa Wisata Nganggring</a></li>
                            <li><a href="<?php echo base_url('/desaKelor') ?>">Desa Wisata Kelor</a></li>
                            <li><a href="<?php echo base_url('/desaKampungIklim') ?>">Desa Wisata Kampung Iklim Karangtanjung </a></li>
                            <li><a href="<?php echo base_url('/desaPancoh') ?>">Desa Wisata Pancoh</a></li>
                            <li><a href="<?php echo base_url('/desaGamplong') ?>">Desa Wisata Gamplong</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Perhitungan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="<?php echo base_url('/petunjuk-Hitung') ?>">Kriteria & Sub Kriteria</a></li>
                            <li><a class="nav-link scrollto" href="<?php echo base_url('/perhitungan') ?>">Hitung</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="<?php echo base_url('/pengembang') ?>">Pengembang</a></li>
                    <li><a href="<?php echo base_url('/') ?>"><img src="assets/img/log.svg" alt="logout"></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">
        <?php $this->renderSection('content'); ?>
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-4 footer-contact">
                        <h3>Universitas Janabadra</h3>
                        <p>
                            Jl. Tentara Rakyat Mataram No.55-57<br>
                            Bumijo, Kec. Jetis, Kota Yogyakarta <br>
                            Daerah Istimewa Yogyakarta <br><br>

                        </p>
                    </div>

                    <div class="col-lg-4 col-md-4 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('/home') ?>">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('/petunjuk') ?>">Petunjuk</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('/pengembang') ?>">Pengembang</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 footer-links">
                        <h4>Desa Wisata</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('/desaNganggring') ?>">Desa Wisata Nganggring</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="<?php echo base_url('/desaKelor') ?>">Desa Wisata Kelor</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('/desaKampungIklim') ?>">Desa Wisata Kampung Iklim Karangtanjung </a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('/desaPancoh') ?>">Desa Wisata Pancoh</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('/desaGamplong') ?>">Desa Wisata Gamplong</a></li>
                        </ul>
                        <strong>

                        </strong>
                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
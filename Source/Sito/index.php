<?php
    session_start();
    $_SESSION["errorLogin"] = "";
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <!-- Titolo -->
        <title>SismoLive</title>
        <!-- Meta tag -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="description" content="SismoLive Project">
        <meta name="keywords" content="Project, Earthquake, SismoLive, Modulo306">
        <meta name="author" content="Matthias, Marco, Daniel, Georgiy">
        <!-- Icona -->
        <link href="img/logo.jpg" rel="icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- CSS Esterni -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="vendor/venobox/venobox.css" rel="stylesheet">
        <link href="vendor/aos/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
        <!-- Template Main CSS File -->
        <link href="css/style.css" rel="stylesheet">
        <!-- =======================================================
            * Template Name: Vesperr - v2.0.0
            * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
            * Author: BootstrapMade.com
            * License: https://bootstrapmade.com/license/
            ======================================================== -->
    </head>
    <body style="background-image: url(img/sky.jpg)">
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">
                <div class="logo mr-auto">
                    <h1 class="text-light"><a href="index.php"><span>SismoLive</span></a></h1>
                </div>
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#header">Home</a></li>
                        <li ><a href="html/terremoti_attuali.php">Terremoti Attuali</a></li>
                        <li><a href="html/terremoti.php">Terremoti</a></li>
                        <li><a href="html/progettazione.php">Progettazione</a></li>
                        <li><a href="html/chisiamo.php">Chi siamo</a></li>
                        <?php require_once "php/logged.php";?>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Fine Header -->
        <!-- ======= Inizio sezione ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>Benvenuto sul miglior sito per controllare i terremoti</h1>
                        <div>
                            <a href="html/terremoti_attuali.php" class="btn-get-started scrollto">Controlla i terremoti</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <img src="img/logo.jpg" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Fine sezione -->
        <!-- ======= Sezione vuota che scompare su mobile ======= -->
        <section id="about" class="d-none d-sm-block">
        </section>
        <!-- Fine sezione vuota -->
        <!-- ======= Footer ======= -->
        <footer class="footer" id="footer">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 text-lg-left text-center">
                        <div class="copyright">
                            &copy; Copyright 2020 <strong>SismoLive</strong>. All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Fine Footer -->
        <!-- Vendor JS file -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="vendor/php-email-form/validate.js"></script>
        <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="vendor/counterup/counterup.min.js"></script>
        <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="vendor/venobox/venobox.min.js"></script>
        <script src="vendor/aos/aos.js"></script>
        <!-- Template Main JS File -->
        <script src="js/main.js"></script>
    </body>
</html>

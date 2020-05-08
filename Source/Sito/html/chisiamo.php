<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <!-- Titolo -->
        <title>Chi siamo</title>
        <!-- Meta tag -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="description" content="SismoLive Project">
        <meta name="keywords" content="Project, Earthquake, SismoLive, Modulo306">
        <meta name="author" content="Matthias, Marco, Daniel, Georgiy">
        <!-- Icona -->
        <link href="../img/logo.jpg" rel="icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- CSS Esterni -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="../vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../vendor/venobox/venobox.css" rel="stylesheet">
        <link href="../vendor/aos/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Template Main CSS File -->
        <link href="../css/style.css" rel="stylesheet">
        <!-- =======================================================
            * Template Name: Vesperr - v2.0.0
            * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
            * Author: BootstrapMade.com
            * License: https://bootstrapmade.com/license/
            ======================================================== -->
    </head>
    <body style="background-image: url(../img/sky.jpg)">
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">
                <div class="logo mr-auto">
                    <h1 class="text-light"><a href="../index.php"><span>SismoLive</span></a></h1>
                </div>
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="terremoti_attuali.php">Terremoti Attuali</a></li>
                        <li><a href="terremoti.php">Terremoti</a></li>
                        <li><a href="progettazione.php">Progettazione</a></li>
                        <li class="active"><a href="chisiamo.php">Chi siamo</a></li>
                        <?php require_once "../php/logged.php";?>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Fine Header -->
        <!-- ======= Inizio sezione ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="container-fluid bg-2 text-center">
                        <h1>Chi siamo</h1>
                        <br>
                        <p>Gli informatici della scuola d'arti e mestieri di Trevano(SAMT) del terzo anno: Marco Lorusso, Matthias Iannarella, Daniel Matt e Georgiy Farina hanno eseguito questo progetto, assegnato dai periti Luca Muggiasca e Geo Petrini, per il modulo 306.
                            <br>Inizio del progetto: 18 gennaio 2020.
                            <br>Fine progetto: 8 maggio 2020.
                        </p>
                        <br>
                        <a href="https://www.cpttrevano.ti.ch/" target="_blank"><img src="../img/cpt.jpg" style="float: center; width: 200px"></a>
                        <br><br><br><br><br>
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
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="../vendor/php-email-form/validate.js"></script>
        <script src="../vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="../vendor/counterup/counterup.min.js"></script>
        <script src="../vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="../vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../vendor/venobox/venobox.min.js"></script>
        <script src="../vendor/aos/aos.js"></script>
        <!-- Template Main JS file -->
        <script src="../js/main.js"></script>
    </body>
</html>

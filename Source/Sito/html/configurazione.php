<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <!-- Titolo -->
        <title>Configurazione</title>
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
        <link rel="stylesheet" type="text/css" href="../css/configurazione.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Template Main CSS File -->
        <link href="../css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- =======================================================
            * Template Name: Vesperr - v2.0.0
            * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
            * Author: BootstrapMade.com
            * License: https://bootstrapmade.com/license/
            ======================================================== -->
    </head>
    <body>
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
                        <li><a href="chisiamo.php">Chi siamo</a></li>
                        <?php require_once "../php/logged.php";?>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End Header -->
        <div class="container-contact100">
            <?php require_once "../php/getSoglie.php";?>
            <div class="wrap-contact100">
                <form class="contact100-form validate-form" method="post" action="../php/configurazione.php">
                    <span class="contact100-form-title" style="text-align:center;">
                    Configurazione parametri
                    </span>
                    <div class="wrap-input100 validate-input">
                        <h5>Soglia minima attuale: <b><?php echo $soglia_minima;?></b></h5>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="number" name="min" step="0.1" min="1" max="10" placeholder="Inserisci la nuova soglia minima">
                    </div>
                    <div class="wrap-input100 validate-input">
                        <h5>Soglia intermedia attuale: <b><?php echo $soglia_intermedia;?></b></h5>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="number" name="intermedia" step="0.1" min="1" max="10" placeholder="Inserisci la nuova soglia intermedia">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <h5>Soglia critica attuale: <b><?php echo $soglia_critica;?></b></h5>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="number" name="critica" step="0.1" min="1" max="10" placeholder="Inserisci la nuova soglia critica">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <h5 style="color:red;"><b><?php echo $_SESSION['error'];?></b></h5>
                    </div>
                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
                        Configura Parametri
                        </button>
                    </div>
                </form>
            </div>
        </div>
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
        <!--===============================================================================================-->
        <!-- Template Main JS file -->
        <script src="../js/main.js"></script>
    </body>
</html>

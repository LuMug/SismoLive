<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <!-- Titolo -->
        <title>Terremoti</title>
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
        <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" type="text/css" href="../css/util.css">
        <link rel="stylesheet" type="text/css" href="../css/table.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Template Main CSS File -->
        <link href="../css/style.css" rel="stylesheet">
        <!-- =======================================================
            * Template Name: Vesperr - v2.0.0
            * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
            * Author: BootstrapMade.com
            * License: https://bootstrapmade.com/license/
            ======================================================== -->
        <style>
            th {
            cursor: pointer;
            }
            .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
            }
        </style>
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
                        <li class="active"><a href="terremoti.php">Terremoti</a></li>
                        <li><a href="progettazione.php">Progettazione</a></li>
                        <li><a href="chisiamo.php">Chi siamo</a></li>
                        <?php require_once "../php/logged.php";?>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End Header -->
            <!-- ======= Inizio sezione ======= -->
            <section class="d-flex align-items-center">
                <div class="container-fluid bg-2 text-center">
                    <br>
                    <br>
                    <br>
                    <h3 style="font-size:50px;" class="margin">Terremoti</h3>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 style="font-size:20px;">Tabella terremoti più percepiti in Svizzera</h1>
                            <br>
                            <!-- Tabella terremoti svizzeri -->
                            <?php require_once "../php/table-swiss.php";?>
                        </div>
                        <div class="col-sm-6">
                            <h1 style="font-size:20px;">Tabella terremoti più percepiti nel mondo</h1>
                            <br>
                              <!-- Tabella terremoti mondiali -->
                            <?php require_once "../php/table-earth.php";?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fine seziones -->
            <!-- ======= Sezione vuota che scompare su mobile ======= -->
            <section id="about" class="d-none d-sm-block">
            </section>
            <!-- Fine sezione vuota -->
        </main>
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
        <!-- End Footer -->
        <!-- Script -->
        <script>
            const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;
            const comparer = (idx, asc) => (a, b) => ((v1, v2) => v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2))(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));
            // Per ogni table header, aggiunge un evento di click
            // Se l'utente clicca su un table header, viene ordinata la tabella.
            document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
                const table = th.closest('table');
                const tbody = table.querySelector('tbody');
                Array.from(tbody.querySelectorAll('tr')).sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc)).forEach(tr => tbody.appendChild(tr));
            })));
        </script>
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

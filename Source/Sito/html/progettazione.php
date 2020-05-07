<?php
  session_start();
?>
    <!DOCTYPE html>
    <html lang="it">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Terremoti Attuali</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="../img/favicon.png" rel="icon">
        <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
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
        <style>


.footer1 {
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
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="terremoti_attuali.php">Terremoti Attuali</a></li>
                        <li><a href="terremoti.php">Terremoti</a></li>
                        <li class="active"><a href="progettazione.php">Progettazione</a></li>
                        <li><a href="chisiamo.php">Chi siamo</a></li>
                        <?php require_once "../php/login_or_logout.php";?>
                    </ul>
                </nav>
                <!-- .nav-menu -->

            </div>
        </header>
        <!-- End Header -->

            <main id="main">

        <!-- ======= Hero Section ======= -->
        <section class="d-flex align-items-center">

            <div class="container">
              <br>
              <br>
              <br>
                <h1 style="text-align:center;">Progettazione</h1>
                <br>
                <img src="../img/Schema_Terremoto.jpg" alt="Schema Terremoto" style="float: right; width: 350px">
                <h2>Cos'è un terremoto?</h2>
                <p>I terremoti, o anche detti sismi sono delle vibrazioni della crosta terrestre provocati dallo spostamento improvviso di una massa rocciosa nel sottosuolo.
                    <br> All'interno della crosta terrestre avviene una deformazione causata dalle forze di natura tettonica(modello di dinamica della Terra), che provoca una liberazione nell'epicentro di energia elastica.
                    <br>L’energia che viene rilasciata si propaga sotto forma di onde attraverso la terra e sulla superficie terrestre, causando scuotimenti che vengono percepiti come terremoti.
                    <br>I terremoti possono inoltre essere legati all’attività vulcanica.
                    <br>Le faglie sono fratture tettoniche nel sottosuolo lungo le quali le masse rocciose mostrano evidenze di movimento relativo.</p>
                <br>
                <h2>Rilevamento terremoti</h2>
                <p>L'idea iniziale di questo progetto era quella di monitorare in tempo reale i dati presi da un geofono montato su una stazione sismografica, e tramite l'apposito sito web stampare un grafico e una tabella ed avvisare tramite un email gli amministratori appena c'è il sospetto di un terremoto.
                    <br> Purtoppo a causa di vari motivi la registrazione dei dati non avviene più con il geofono bensì tramite un sistema di generazione fittizia dei dati, che poi tramite un fishino vengono inviati al database che conterrà tutti i terremoti registrati con data e ora annessa.
                    <br>Dal componente chiamato Fishino viene registrato ogni secondo un numero che simula il magnitudo. Il numero è compreso tra 10 e 100 e prima di essere inviato al database, viene diviso per 10, così da poter sembrare realistico (Per esempio, se viene generato 62, al database verrà mandato il numero 6.2). Il dato finale viene memorizzato in una tabella chiamata Terremoto.
                    <br> Oltre al solo magnitudo, nella tabella vengono anche memorizzati il momento in cui si crea il dato fittizzio tramite una data e un'ora.
                    <br> Inseguito il sito prende i dati delle tabelle nel database e nella <a href="terremoti_attuali.php"> pagina dei terremoti attuali</a> crea una grafico sulla sinistra che va in base al magnitudo registrato nel tempo e sulla destra una tabella con i dati in forma numerica.
                    <br> Nella pagina <a href="terremoti.php">Terremoti</a> invece ci sono due tabelle con dati statici dei terremoti più percepiti in Svizzera e nel mondo. </p>
            </div>
        </section>
        <!-- End Hero -->

        <!-- ======= Start Blank section ======= -->
        <section id="about" class="d-none d-sm-block">

        </section>
        <!-- End Blank section -->

</main>

        <!-- ======= Footer ======= -->
        <footer class="footer1" id="footer">
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

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <!-- Vendor JS Files -->
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

        <!-- Template Main JS File -->
        <script src="../js/main.js"></script>

    </body>

    </html>

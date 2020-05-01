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
        <link href="../assets/img/favicon.png" rel="icon">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Template Main CSS File -->
        <link href="../assets/css/style.css" rel="stylesheet">

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

        <!-- ======= Hero Section ======= -->
        <section class="d-flex align-items-center">

            <div class="container">
                <h1 style="text-align:center;">Progettazione</h1>
                <br>
                <img src="../images/Schema_Terremoto.jpg" alt="Schema Terremoto" style="float: right; width: 350px">
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
                    <br> Ogni secondo vengono registrati 5 dati randomici nell'arduino Mega 2560, questi dati randomici sono dei numeri che variano da -1 ad 1, in base al valore che esce, viene preso il valore assoluto e viene moltiplicato per 10(ad esempio, esce -0,3 si prende 0,3, poi *10, il magnitudo sarà 3)in modo da ottenere il magnitudo, e tramite un piccolo componente chiamato fishino vengono inviati al database dove, tramite varie tabelle, immagazzina i dati secondo 2 id, il primo è l'id che cambia per ogni dato ricevuto, il secondo si basa su un sistema che, se vengono registrati dei dati per un periodo di tempo continuo sopra la soglia che decide che è una scossa sismica o meno, allora è lo stesso terremoto che dura un tot di tempo, perciò l'id sarà lo stesso per ogni dato di quel terremoto.
                    <br> Un'altra colonna della tabella dove vengono immagazzinati i dati è il magnitudo, un dato numerico che può andare da 0 a 9. Infine viene registrato il momento in cui si crea il dato fittizzio e tramite una data e un'ora viene registrato.
                    <br> Inseguito il sito prende i dati delle tabelle nel database e nella <a href="../index.php"> pagina principale</a> crea una grafico sulla sinistra che va in base al magnitudo registrato nel tempo e sulla destra una tabella con i dati in forma numerica.
                    <br> Nella pagina <a href="terremoti.php">Terremoti</a> invece ci sono due tabelle con dati statici dei terremoti più percepiti in Svizzera e nel mondo. </p>
            </div>
        </section>
        <!-- End Hero -->

        <!-- ======= Start Blank section ======= -->
        <section id="about" class="d-none d-sm-block">

        </section>
        <!-- End Blank section -->


        <!-- ======= Footer ======= -->
        <footer id="footer">
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
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="../assets/vendor/php-email-form/validate.js"></script>
        <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="../assets/vendor/counterup/counterup.min.js"></script>
        <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../assets/vendor/venobox/venobox.min.js"></script>
        <script src="../assets/vendor/aos/aos.js"></script>

        <!-- Template Main JS File -->
        <script src="../assets/js/main.js"></script>

    </body>

    </html>

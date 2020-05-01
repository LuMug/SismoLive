<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Configurazione</title>
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

    <link rel="stylesheet" type="text/css" href="../contact/css/util.css">
    <link rel="stylesheet" type="text/css" href="../contact/css/main.css">

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
                  <li><a href="progettazione.php">Progettazione</a></li>
                  <li><a href="chisiamo.php">Chi siamo</a></li>
                  <?php require_once "../php/login_or_logout.php";?>
              </ul>
          </nav>
          <!-- .nav-menu -->

      </div>
  </header>
  <!-- End Header -->
  	<div class="container-contact100">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    	<div class="container-contact100">

    		<div class="wrap-contact100">
    			<form class="contact100-form validate-form" method="post" action="../php/congiurazione.php">
    				<span class="contact100-form-title">
    					Impostazione parametri
    				</span>

    				<div class="wrap-input100 validate-input" >
    					<input class="input100" type="number" name="name" placeholder="Inserisci la soglia minima">
    					<span class="focus-input100"></span>
    				</div>

    				<div class="container-contact100-form-btn">
    					<button class="contact100-form-btn">
    					      Imposta Parametri
    					</button>
    				</div>
    			</form>

    		</div>
    	</div>

    </section>
    <!-- End Hero -->
	</div>


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

  <!--===============================================================================================-->
    <script src="../contact/js/main.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
</body>
</html>

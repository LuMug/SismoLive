<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Terremoti</title>
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
<style>
th {
    cursor: pointer;
}
</style>
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
                  <li class="active"><a href="terremoti.php">Terremoti</a></li>
                  <li><a href="progettazione.php">Progettazione</a></li>
                  <li><a href="chisiamo.php">Chi siamo</a></li>
                  <?php require_once "../php/login_or_logout.php";?>
              </ul>
          </nav>
          <!-- .nav-menu -->

      </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container-fluid bg-2 text-center">
        <h3 style="font-size:50px;" class="margin">Terremoti</h3>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <h1 style="font-size:20px;">Tabella terremoti più percepiti in Svizzera</h1>
                <br>
                    <table id=”sortTable”>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Data</th>
                                <th class="column3">Magnitudo</th>
                                <th class="column4">Pericolosità</th>
                                <th class="column5">Città</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1356.10.18</td>
                                <td>6.6</td>
                                <td>Alta</td>
                                <td>Basilea (BS)</td>
                            </tr>
                            <tr>
                                <td>1295.09.03</td>
                                <td>6.2</td>
                                <td>Alta</td>
                                <td>Churwalden (GR)</td>
                            </tr>
                            <tr>
                                <td>1855.07.25</td>
                                <td>6.2</td>
                                <td>Alta</td>
                                <td>Stalden-Visp (VS)</td>
                            </tr>
                            <tr>
                                <td>1584.03.11</td>
                                <td>5.9</td>
                                <td>Alta</td>
                                <td>Aigle (VD)</td>
                            </tr>
                            <tr>
                                <td>1601.09.18</td>
                                <td>5.9</d>
                                <td>Alta</td>
                                <td>Unterwalden (NW)</td>
                            </tr>
                            <tr>
                                <td>1524.04.01</td>
                                <td>5.8</td>
                                <td>Media</td>
                                <td>Ardon (VS)</td>
                            </tr>
                            <tr>
                                <td>1946.01.25</td>
                                <td>5.8</td>
                                <td>Alta</td>
                                <td>Sierre (VS)</td>
                            </tr>
                            <tr>
                                <td>1755.12.09</td>
                                <td>5.7</td>
                                <td>Alta</td>
                                <td>Brig-Naters (VS)</td>
                            </tr>
                            <tr>
                                <td>1774.09.10</td>
                                <td>5.7</td>
                                <td>Media</td>
                                <td>Altdorf (UR)</td>
                            </tr>
                            <tr>
                                <td>1622.08.03</td>
                                <td>5.4</td>
                                <td>Media</td>
                                <td>Ftan (GR)</td>
                            </tr>
                        </tbody>
                    </table>
            </div>

            <div class="col-sm-6">
                <div class="table100">
                    <h1 style="font-size:20px;">Tabella terremoti più percepiti nel mondo</h1>
                    <br>
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Data</th>
                                <th class="column3">Magnitudo</th>
                                <th class="column4">Pericolosità</th>
                                <th class="column5">Città</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1960.05.22</td>
                                <td>9.5</td>
                                <td>Molto alta</td>
                                <td>Valdivia, Cile</td>
                            </tr>
                            <tr>
                                <td>1964.03.27</td>
                                <td>9.2</td>
                                <td>Molto alta</td>
                                <td>Stretto di Prince William, Alaska (Stati Uniti)</td>
                            </tr>
                            <tr>
                                <td>2004.12.26</td>
                                <td>9.1</td>
                                <td>Molto alta</td>
                                <td>Oceano Indiano, Sumatra, Indonesia</td>
                            </tr>
                            <tr>
                                <td>2011.03.11</td>
                                <td>9.0</td>
                                <td>Molto alta</td>
                                <td>Oceano Pacifico, Regione di Tōhoku, Giappone</td>
                            </tr>
                            <tr>
                                <td>1952.11.04</td>
                                <td>9.0</d>
                                <td>Molto alta</td>
                                <td>Kamčatka, Russia (all'epoca in URSS)</td>
                            </tr>
                            <tr>
                                <td>1868.08.13</td>
                                <td>9.0</td>
                                <td>Molto alta</td>
                                <td>Arica, Cile</td>
                            </tr>
                            <tr>
                                <td>1700.01.26</td>
                                <td>8.7</td>
                                <td>Molto alta</td>
                                <td>Oceano Pacifico, USA e Canada</td>
                            </tr>
                            <tr>
                                <td>1869.07.09</td>
                                <td>8.9</td>
                                <td>Molto alta</td>
                                <td>Oceano Pacifico, Regione di Tōhoku, Giappone</td>
                            </tr>
                            <tr>
                                <td>1611.12.02</td>
                                <td>8.9</td>
                                <td>Molto alta</td>
                                <td>Oceano Pacifico, Hokkaidō, Giappone</td>
                            </tr>
                            <tr>
                                <td>1762.04.02</td>
                                <td>8.8</td>
                                <td>Molto alta</td>
                                <td>Chittagong, Bangladesh</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                        &copy; Copyright <strong>SismoLive</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#intro" class="scrollto">Home</a>
                        <a href="#about" class="scrollto">About</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

      <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <script>
    const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;
    const comparer = (idx, asc) => (a, b) => ((v1, v2) => v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2))(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

    // do the work...
    document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
      const table = th.closest('table');
      const tbody = table.querySelector('tbody');
      Array.from(tbody.querySelectorAll('tr')).sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc)).forEach(tr => tbody.appendChild(tr) );
      })));
</script>


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


    <script src="../table/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../table/vendor/bootstrap/js/popper.js"></script>
    <script src="../table/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../table/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../table/js/main.js"></script>

</body>

</html>

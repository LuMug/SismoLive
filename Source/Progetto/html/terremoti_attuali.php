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
                    <li class="active"><a href="terremoti_attuali.php">Terremoti Attuali</a></li>
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

    <!-- ======= Hero Section ======= -->
    <section class="d-flex align-items-center">
      <div class="container-fluid bg-2 text-center">
        <h3 style="font-size:50px;" class="margin">Terremoti Attuali</h3>
        <br>
        <div class="row">
            <div class="col-sm-6">
                  <h1 style="font-size:20px;">Grafico terremoti</h1>
                  <br>
                  <canvas id="grafico_terremoti" width="300" height="200"></canvas>
            </div>

              <div class="col-sm-6">
                <h1 style="font-size:20px;">Tabella terremoti</h1>
                <br>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Orario</th>
                            <th scope="col">Magnitudo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php require_once "../php/terremoti.php";?>
                    </tbody>
                </table>
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

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

    <!-- Librerie -->
    <script src="../js/chart.js"></script>

    <script type="text/javascript">
        var orari = <?php echo json_encode($giorni); ?>;
        var magnitudi =  <?php echo json_encode($magnitudi); ?>;
        var ctx = document.getElementById('grafico_terremoti').getContext('2d');

        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',
            options: {
                responsive: true
            },

            // The data for our dataset
            data: {
                labels: [<?php echo $data; ?>],
                datasets: [{
                    label: 'Terremoti',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 1)',
                    data: [<?php echo $earth; ?>]
                }]
            }

        });

        function updateChart(chart) {
                    <?php require_once "../php/updateChart.php";?>
                    var oraria = JSON.parse('<?= $giorni_json; ?>');
                    var magnitudia = JSON.parse('<?= $magnitudi_json; ?>');
                    //console.log(magnitudia);
          chart.data.datasets.data = [];
          chart.data.labels = [];
          console.log(chart.data.datasets.data);
          console.log(  chart.data.labels);
          for (var i = 0; i < oraria.length; i++) {
            //console.log(i);
            chart.data.labels[i] = oraria[i];
            chart.data.datasets.data[i] = magnitudia[i];
          }
          console.log(chart.data.datasets.data);
          chart.update();
        }

        setInterval(function() {
            updateChart(chart);
            chart.update();
        }, 2000);
    </script>

</body>

</html>
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>SismoLive</title>
    <meta charset="UTF-8">
    <meta name="description" content="SismoLive Project">
    <meta name="keywords" content="Project, Earthquake, SismoLive, Modulo306">
    <meta name="author" content="Matthias, Marco, Daniel, Georgiy">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/chart.js"></script>
    <link rel="stylesheet" href="css/index.css" type="text/css">

    <link rel="icon" type="image/png" href="table/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="table/css/util.css">
    <link rel="stylesheet" type="text/css" href="table/css/main.css">
    <!--===============================================================================================-->

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="html/terremoti.html">Terremoti</a></li>
                    <li><a href="html/progettazione.html">Progettazione</a></li>
                    <li><a href="html/chisiamo.html">Chi siamo</a></li>
                    <li><a href=php/logout.php class=loginButton>LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- First Container -->
    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">SismoLive</h3>
        <img src="images/broski.JPG" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
        <h3>Il modo migliore per controllare i terremoti in Svizzera</h3>
    </div>

    <!-- Third Container (Grid) -->
    <div class="container-fluid bg-2 text-center">
        <h3 class="margin">Terremoti</h3>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <canvas id="canvas1"></canvas>
            </div>
            <div class="col-sm-6">

                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Data</th>
                                <th class="column2">Orario</th>
                                <th class="column3">Magnitudo</th>
                                <th class="column4">Città</th>
                                <th class="column5">Latitudine</th>
                                <th class="column6">Longitudine</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $nomeDB = "SismoLive";
                              $port = 3306;
                              $conn = mysqli_connect($servername, $username, $password, $nomeDB, $port);
                              // Check connection
                              if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                              }
                            //  $view = "create view tabella as select t.momento_registrazione, t.id_terremoto, t.id_gps, v.latitudine, v.longitudine from Terremoto t, ValoreGPS v  where t.id_terremoto < 5";
                              $terremoti = "SELECT * from tabella limit 7";
                              $result = $conn->query($terremoti);
                              if ($result->num_rows > 0) {
                                echo "<table>";
                                  while($row=$result->fetch_assoc()){
                                    echo "<tr><td>" . $row["data_registrazione"]. "</td><td>" . $row["orario_registrazione"]. "</td><td>". $row["id_terremoto"] . "</td><td>"
                                      . "a". "</td><td>" . $row["latitudine"].  "</td><td>" . $row["longitudine"]. "</td></tr>";
                                  }
                                  echo "</table>";
                              } else {
                                 echo "0 results";
                              }
                              $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container-fluid bg-4 text-center">
        <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p>

    </footer>

    <script>

        var ctx = document.getElementById('canvas1').getContext('2d');

        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',
            options: {
                responsive: true
            },

            // The data for our dataset
            data: {
                labels: ['June', 'July', 'August'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgb(0, 99, 132)',
                    borderColor: 'rgb(0, 99, 132)',
                    data: [30, 45, 22]
                }]
            }

        });
    </script>

    <script src="table/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="table/vendor/bootstrap/js/popper.js"></script>
    <script src="table/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="table/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="table/js/main.js"></script>

</body>

</html>

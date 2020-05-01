<?php
include "../php/config.php";
?>

<?php
  $datas = '';
$earths =  '';
  $terremoti = "SELECT * from tabella";
    $result    = $link->query($terremoti);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $datas = $datas . '"'. $row['orario_registrazione']. '",';
            $earths = $earths . '"'. $row['magnitudo']. '",';
        }
    }

    $datas = trim($datas,",");
    $earths = trim($earths,",");

  ?>
  <!-- Librerie -->
<script src="../js/chart.js"></script>

<section class="d-flex align-items-center">
    <div class="container-fluid bg-2 text-center">
      <h3 style="font-size:50px;" class="margin">Terremoti Attuali</h3>
      <br>
      <div class="row">
          <div class="col-sm-6">
                <h1 style="font-size:20px;">Grafico terremoti</h1>
                <br>
                <canvas id="myChart" width="300" height="200"></canvas>
      <script>
      var canvas = document.getElementById('myChart');
        var data = {
            labels: [<?php echo $datas;?>],
            datasets: [
            {
                label: "Magnitudo",
                fill: true,
                lineTension: 0.1,
                backgroundColor: "rgba(105, 0, 132, .2)",
                borderColor: "rgba(200, 99, 132, .7)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(200, 99, 132, .7)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(200, 99, 132, .7)",
                pointHoverBorderColor: "rgba(200, 99, 132, .7)",
                pointHoverBorderWidth: 2,
                pointRadius: 5,
                pointHitRadius: 10,
                data: [<?php echo $earths;?>]
            }]
        };

        var option =
        {
          showLines: true,
          animation: {duration: 0}
        };

        var myLineChart = Chart.Line(canvas,{
          data:data,
          options:option
        });
      </script>
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
          <?php
          $terremoti = "SELECT * from tabella";
          $result    = $link->query($terremoti);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<tr><th>" . $row["data_registrazione"] . "</th><th>" . $row["orario_registrazione"] . "</th><th>" . $row["magnitudo"] . "</tr>";
              }
        }

          ?>
        </tbody>
      </table>
    </div>
  </div>
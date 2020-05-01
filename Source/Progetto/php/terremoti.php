<?php
  require_once "config.php";
  $giorni     = array();
  $magnitudi  = array();
  $data = '';
  $earth =  '';
  $terremoti = "SELECT * from tabella";
  $result    = $link->query($terremoti);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo "<tr><th>" . $row["data_registrazione"] . "</th><th>" . $row["orario_registrazione"] . "</th><th>" . $row["magnitudo"] . "</tr>";
          array_push($giorni, $row["data_registrazione"]);
          array_push($magnitudi, $row["magnitudo"]);
          $data = $data . '"'. $row['orario_registrazione']. '",';
          $earth = $earth . '"'. $row['magnitudo']. '",';
      }
  }

  $data = trim($data,",");
    $earth = trim($earth,",");
  ?>

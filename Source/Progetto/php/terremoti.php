<?php
  require_once "config.php";
  $giorni     = array();
  $magnitudi  = array();
  $terremoti = "SELECT * from tabella limit 5";
  $result    = $link->query($terremoti);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo "<tr><th>" . $row["data_registrazione"] . "</th><th>" . $row["orario_registrazione"] . "</th><th>" . $row["magnitudo"] . "</tr>";
          array_push($giorni, $row["data_registrazione"]);
          array_push($magnitudi, $row["magnitudo"]);
      }
  }
  $giorni_json    = json_encode($giorni);
  $magnitudi_json = json_encode($magnitudi);
  ?>

<?php
  require_once "config.php";
  $data = '';
  $earthquake =  '';
  $terremoti = "SELECT * from tabella";
  $result    = $link->query($terremoti);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo "<tr><th>" . $row["data_registrazione"] . "</th><th>" . $row["orario_registrazione"] . "</th><th>" . $row["magnitudo"] . "</tr>";
          $data = $data . '"'. $row['orario_registrazione']. '",';
          $earthquake = $earthquake . '"'. $row['magnitudo']. '",';
      }
  }

  $data = trim($data,",");
  $earthquake = trim($earthquake,",");
  ?>

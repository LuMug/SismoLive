<?php
  require_once "config.php";
  $data = '';
  $earth =  '';
  $terremoti = "SELECT * from tabella";
  $result    = $link->query($terremoti);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          $data = $data . '"'. $row['orario_registrazione']. '",';
          $earth = $earth . '"'. $row['magnitudo']. '",';
      }
  }

  $data = trim($data,",");
  $earth = trim($earth,",");
  ?>

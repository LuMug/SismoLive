<?php
  require_once "config.php";
  $giorni     = array();
  $magnitudi  = array();
  $sql = "drop view if exists tabella";
  $sql1= "create view tabella as select t.data_registrazione, t.orario_registrazione, t.magnitudo, t.id_terremoto from Terremoto t where t.id_registrazione > getStartId()";
  $terremoti = "SELECT * from tabella";
  $query0 = $link->query($sql);
  $query = $link->query($sql1);
  $result = $link->query($terremoti);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          array_push($giorni, $row["data_registrazione"]);
          array_push($magnitudi, $row["magnitudo"]);
      }
  }
  $giorni_json    = json_encode($giorni);
  $magnitudi_json = json_encode($magnitudi);
  ?>

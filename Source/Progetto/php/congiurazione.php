<?php
// Include config file
require_once "config.php";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!(empty(trim($_POST["min"])))) {
        $min = trim($_POST["min"]);
    }

    if (!(empty(trim($_POST["critica"])))) {
        $critica = trim($_POST["critica"]);
    }

    $min = filter_input(INPUT_POST, 'min', FILTER_DEFAULT);
    $critica = filter_input(INPUT_POST, 'critica', FILTER_DEFAULT);


    $terremoti = "UPDATE Configurazione SET soglia_minima = '$min', soglia_critica = '$critica'";
    $result    = $link->query($terremoti);

    header("location: ../html/configurazione.php");
}

?>

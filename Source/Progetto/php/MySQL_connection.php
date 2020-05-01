<?php
require_once "config.php";
$data_corrente = date("Y-m-d");
$ora_corrente = date("H:i:s");
$id_ter = 6;
$magnitudo = 3;

$sql =
"
	INSERT INTO
		Terremoto(id_terremoto,magnitudo,data_registrazione,orario_registrazione)
	VALUES ('$id_ter','$magnitudo','$data_corrente','$ora_corrente')
";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$conn->close();
?>

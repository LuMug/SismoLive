<?php
$servername = "160.153.133.155";
$username = "matthias";
$password = "matthias";
$dbname = "SismoLive";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data_corrente = date("Y-m-d");
$ora_corrente = date("H:i:s");
$id_reg = 13;
$id_ter = 6;
$magnitudo = 3;

$sql = 
"
	INSERT INTO 
		Terremoto(id_registrazione,id_terremoto,magnitudo,data_registrazione,orario_registrazione)
	VALUES ('$id_reg','$id_ter','$magnitudo','$data_corrente','$ora_corrente')
";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
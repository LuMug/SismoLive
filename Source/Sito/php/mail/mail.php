<?php

session_start();

require "PHPMailer/PHPMailerAutoload.php";
require "../connectToDB.php";

$from = 'terremoto@sismolive.online';
$name = 'SismoLive';
$subj = 'Allarme terremoto!';
$msg = 'È stato rilevato un terremoto di magnitudo ' .$_SESSION['magnitudo'] . ' alle ' . $_SESSION['orario'];
$email = "SELECT email FROM Utente";
$result = $link->query($email);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $to = $row['email'];
        $error = smtpmailer($to, $from, $name, $subj, $msg);
    }
}

function smtpmailer($to, $from, $from_name, $subject, $body) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'n3plcpnl0298.prod.ams3.secureserver.net';
    $mail->Port = 465;
    $mail->Username = 'terremoto@sismolive.online';
    $mail->Password = 'terremoto';
    $mail->IsHTML(true);
        //Indirizzo mail mittente
    $mail->From = "terremoto@sismolive.online";
        //Nome mittente
    $mail->FromName = $from_name;
    $mail->Sender = $from;
    $mail->AddReplyTo($from, $from_name);
        //Oggetto della mail
    $mail->Subject = $subject;
        //Contenuto della mail
    $mail->Body = $body;
        //Destinatario
    $mail->AddAddress($to);
    //Invio la mail
    $mail->Send();
}
?>

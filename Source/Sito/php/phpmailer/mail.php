<?php
require "PHPMailer/PHPMailerAutoload.php";
require "../config.php";

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;

        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'n3plcpnl0298.prod.ams3.secureserver.net';
        $mail->Port = 465;
        $mail->Username = 'terremoto@sismolive.online';
        $mail->Password = 'terremoto';

   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);

        $mail->IsHTML(true);
        $mail->From="terremoto@sismolive.online";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error;
        }
        else
        {
            $error = "Thanks You !! Your email is sent. YOoo";
            return $error;
        }
    }

    $from = 'terremoto@sismolive.online';
    $name = 'SismoLive';
    $subj = 'Allarme terremoto!';
    $msg = 'Terremoto rilevato!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!.';

    $email = "SELECT email FROM Utente";

    $result = $link->query($email);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $to = $row['email'];
            $error=smtpmailer($to,$from, $name ,$subj, $msg);
        }
    }
?>

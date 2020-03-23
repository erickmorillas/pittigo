<?php
//print_r($_POST);

require '../lib/PHPMailer/src/Exception.php';
require '../lib/PHPMailer/src/PHPMailer.php';
require '../lib/PHPMailer/src/SMTP.php';

$name = "Erick";
$mail = "erickivan20@gmail.com";
$asunto = "Esto es una prueba";
$mensaje = "This is message of test, it's complicated really";

//$name = $_POST['name'];
//$mail = $_POST['email'];
//$asunto = $_POST['subject'];
//$mensaje = $_POST['message'];

$mail = new PHPMailer();
//$mail->isSMTP();
$mail->CharSet = 'UTF-8';
$mail->SMTPDebug = 1;
$mail->Mailer = 'smtp';
$mail->Host = 'mail.pittigo.com';
//$mail->SMTPAuth = true;
$mail->Port = '465';
$mail->Username   = "info@pittigo.com";
$mail->Password   = "Barranca$2020";
$mail->SMTPSecure = "tls";

$mail->SetFrom("info@pittigo.com", $asunto);
$mail->addAddress("info@pittigo.com");
//$mail->AddCC("erick@pittigo.com");
$mail->AddCC("erickivan20@gmail.com");

$mail->isHTML(true);
$mail->Subject = $name;
$mail->Body = $mensaje;
if ($mail->send()) {
    //echo true;
    echo "sended";
} else {
    echo "unsend";
    //echo false;
}

?>
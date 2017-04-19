<?php

include 'PHPMailer/class.phpmailer.php';
include 'PHPMailer/class.smtp.php';


if($_SERVER["REQUEST_METHOD"]=="POST"){

$mail=filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
$asunto=filter_var($_POST['asunto'], FILTER_SANITIZE_STRING);
$mensaje=filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);

$correo=new PHPMailer();
 
$correo->IsSMTP();
 
$correo->SMTPAuth = true;
 
$correo->SMTPSecure = 'tls';
 
$correo->Host = "smtp.gmail.com";
 
$correo->Port = 587;
 
$correo->Username   = "gspindolab@gmail.com";
 
$correo->Password   = "iamcoolforever4e";
 
$correo->SetFrom($mail, "Nombre");
 
$correo->AddReplyTo($mail,"Nombre");
 
$correo->AddAddress("gspindolab@gmail.com", "Guillermo");
 
$correo->Subject = $asunto;
 
$correo->MsgHTML($mensaje);

}

include 'views/contacto.view.php';


?>
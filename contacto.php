<?php

include 'PHPMailer/class.phpmailer.php';
include 'PHPMailer/class.smtp.php';
include 'PHPMailer/PHPMailerAutoload.php';

    define("destino", "gspindolab@gmail.com");
	define("nombre", "Guillermo Spindola");

if($_SERVER["REQUEST_METHOD"]=="POST"){

$nombre=filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$mail=filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
$asunto=filter_var($_POST['asunto'], FILTER_SANITIZE_STRING);
$mensaje=filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);

        $correo = new PHPMailer(); //Creamos una instancia en lugar usar mail()

		$correo->IsSMTP();
		$correo->SMTPOptions = array('ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true));

		// optional
		// used only when SMTP requires authentication  
		$correo->SMTPAuth = true;
		$correo->SMTPSecure = 'tls';
		$correo->Host = 'smtp.gmail.com';
		$correo->Port = 587;
		$correo->Username = 'gspindolab@gmail.com';
		$correo->Password = 'iamcoolforever4e';
 
		//Usamos el SetFrom para indicar quien envia el correo
		$correo->From = $mail;
		$correo->FromName = $nombre;
		$correo->SetFrom($mail, $nombre);
		 
		//Usamos el AddReplyTo para indicart a quien tiene que responder el correo
		$correo->AddReplyTo($mail, $nombre);
		 
		//Usamos el AddAddress para agregar un destinatario
		$correo->AddAddress(destino, nombre);
		 
		//Ponemos el asunto del mensaje
		$correo->Subject = $asunto;
		 
		/*
		 * Si deseamos enviar un correo con formato HTML utilizaremos MsgHTML:
		 * $correo->MsgHTML("<strong>Mi Mensaje en HTML</strong>");
		 * Si deseamos enviarlo en texto plano, haremos lo siguiente:
		 * $correo->IsHTML(false);
		 * $correo->Body = "Mi mensaje en Texto Plano";
		$correo->MsgHTML($mensaje);*/

		$correo->MsgHTML($mensaje);
		 
		//Si deseamos agregar un archivo adjunto utilizamos AddAttachment
		//$correo->AddAttachment("images/phpmailer.gif");
		$correo->CharSet = "UTF-­8";
		//$correo->Encoding = "quoted­printable";
		 
		//Enviamos el correo
		if(!$correo->Send()) {
		  //echo'error';
		  echo "Hubo un error: " . $correo->ErrorInfo;
		} else {
		  echo "Mensaje enviado con exito.";
		}

}

include 'views/contacto.view.php';


?>
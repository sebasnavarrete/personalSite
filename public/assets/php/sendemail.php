<?php

	$name = @trim(stripslashes($_POST['name'])); 
	$email = @trim(stripslashes($_POST['email']));  
	$subject = @trim(stripslashes($_POST['subject']));  
	$message = @trim(stripslashes($_POST['message'])); 

	$email_from = $email;
	$email_to = 'sebasnavarrete.2@gmail.com'; //replace with your email

	$body = 'Nombre: ' . $name . "\n\n" . 'Correo: ' . $email . "\n\n" . 'Asunto: ' . $subject . "\n\n" . 'Mensaje: ' . $message;

	$success = mail($email_to, $body, 'Nombre: ' . $name . "\n\n" . 'Correo: ' . $email . "\n\n" . 'Asunto: ' . $subject . "\n\n" . 'Mensaje: ' . $message);
	
?>

<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<script>alert("Mensaje enviado. Muy pronto estaremos en contacto");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=http://trendytheme.net/demo/iamx/v/"> 
</head>
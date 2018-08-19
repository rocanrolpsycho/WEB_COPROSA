<?php

if(isset($_POST['action'])){
	$to      = 'polimeroscoprosa@hotmail.com';
	$subject = 'Contacto Web';
	$message = 'Nombre: '.$_POST['name']."\t\n" .
	'Telefono: '.$_POST['phone']."\t\n" .
	'Correo: '.$_POST['email']."\t\n" .
	'Mensaje: '.$_POST['message']."\t\n".'';
	$headers = 'From: @example.com' . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r	\n" .
	    'X-Mailer: PHP/' . phpversion();

$result =	mail($to, $subject, $message, $headers);
if(!$result) {
	header('Location: contact.php?result=Error');
} else {
  header('Location: contact.php?result=Success');
}
}

<?php
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellidos'];
$ciudad = $_POST['Ciudad'];
$telefono = $_POST['Teléfono'];
$mail = $_POST['Correo'];
$inbox = $_POST['descripcion'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre ."\r\n";
$mensaje .= "Sus apellidos Son: " . $apellido ."\r\n";
$mensaje .= "De la ciudad De: " . $ciudad ."\r\n";
$mensaje .= "Su Telefono Es: " . $telefono ."\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "El Mensaje Es: " . $_POST['descripcion'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'sonidobits84@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:Cont-Nuevo.html");
?>
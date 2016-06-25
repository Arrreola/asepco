<?php
	$nombre			= $_POST['nombre'];
	$correo			= $_POST['correo'];
	$asunto			= $_POST['asunto'];
	$mensaje		= $_POST['mensaje'];

	$headers		= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers		= "From: $nombre <$correo>\n";
	$recipient		= "contacto@arrreola.mx,j.arreolamtz@gmail.com,jeom.beats@hotmail.com,j.arreolamtz@icloud.com";
	$subject		= "Contacto Sitio web Asepco";
	$message		= "Nombre: $nombre\nCorreo: $correo\nAsunto: $asunto\nMensaje: $mensaje\n";

	mail($recipient, $subject, $message, $headers);

	header("location: http://www.asepco.com.mx/asepcov2/index.php");
?>

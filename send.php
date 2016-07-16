<?php
$nombre = '';
$correo = '';
$asunto = '';
$mensaje = '';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$Body = "Contacto Asepco";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Correo: ";
$Body .= $correo;
$Body .= "\n";
$Body .= "Movil: ";
$Body .= $asunto;
$Body .= "\n";
$Body .= "Comentarios: ";
$Body .= $mensaje;
$Body .= "\n";
//echo 'este es el cuerpo = ' . $Body;
//$to		= "j.arreolamtz@gmail.com, jorge.arreola@v09.com";
$to = 'j.arreolamtz@gmail.com, jorge.arreola@v09.com';
$subject = "Contacto asepco";
$headers = "From: ".$nombre." <".$correo.">\r\n";
$headers .= 'Reply-To: no-reply@arrreola.mx \r\n' ;
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
if (mail($to, $subject, $Body, $headers)) :
    //echo('<br>' . "Email Sent ;D " . '</br>');
    echo 'success';
else :
    //echo("<p>Email Message delivery failed...</p>");
endif;

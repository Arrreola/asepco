<?php
$nombre = '';
$correo = '';
$asunto = '';
$mensaje = '';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
<<<<<<< HEAD
$archivo = $_POST['']

$Body .="Contacto Asepco <br> Nombre: <br>".$nombre." <br> Correo: <br>".$correo." <br> Asunto: <br>".$asunto." <br> Comentarios: <br>".$mensaje;

//$to		= "j.arreolamtz@gmail.com, jorge.arreola@v09.com";
//SUBELO PLS no le faltan las comillas ?
//$to = 'info@dgmmorales.com, miguel@moralesyasociados.mx';
$subject = "Contacto Asepco";

require_once('class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);

//ESTE CAMPO ES POR SI EL CLIENTE QUE RECIBE EL CORREO QUIERE CONTESTAR AL USUARIO QUE ENVIO EL CORREO SI, SOLO CON DAR REPLY EN EL MAIL
$mail->AddReplyTo($_POST['correo'],$_POST['nombre']);
//ESTE ES EL FROM DEL MAIL PODRIAS DEJARLO ASI O PONER LO MISMO QUE EL REPLYTO
$mail->SetFrom('no-reply@asepco.com', 'Formulario de Contacto');

//POR CADA MAIL QUE QUIERAS AGREGAR TIENE QUE IR EN UNA VARIABLE DIFERENTE
//Y TIENES QUE CREAR UN ADDADDRESS por cada VARIABLE

$address = "informacion@asepco.com.mx";
$mail->AddAddress($address, "Asepco Capacitacion");

$address = "astridgarza@asepco.com.mx";
$mail->AddAddress($address, "Astrid Garza");

$gmail = "j.arreolamtz@gmail.com";
$mail->AddAddress($gmail, "Arreola");
//aqui va el SUBJECT DEL MAIL
$mail->Subject    = "Formulario / Asepco Capacitacion";

///$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($Body);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment


//AGREGAR UN ARCHIVO
$mail->AddAttachment($_FILES['attatchment']);
if(isset($_FILES['uploaded_file']) &&
  $_FILES['uploaded_file']['error'] = UPLOAD_ERR_OK) {
    $mail->addAddres($_files['uploaded_file']['tmp_name'],
      $_FILES['uploaded_file']['name']);
  }


  

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
=======
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
>>>>>>> b3fa02670a15697d10eac99cbaaff784e9268ee4

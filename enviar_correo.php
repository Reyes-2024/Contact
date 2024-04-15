<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
/*$asunto = $_POST['$asunto'];*/

// Configuración de PHPMailer
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                       // Dejalo así bro
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'sreivaj18@gmail.com';                  // Aquí pon tu correo bro
    $mail->Password   = 'rvhkzxakvisipqjr';                        // Aquí pon la contraseña bro, pero primero haz la autenticacion en dos pasos
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
    $mail->Port       = 465;

    $mail->setFrom($email, $nombre);
    $mail->addAddress($mail->Username);     //Add a recipient

    // Contenido del mensaje
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje de contacto';

    $mail->Body    = "  <html>
<body>
<div style='background-color: rgba(123, 250, 252, 0.678); border-radius: 20px; text-align: center; padding: 20px; margin: 40px;'>
<p><h3>Nombre:  $nombre</h3></p>
<p><h3>Email: $email</h3></p> 
<p><h3>Teléfono $telefono</h3></p>
<p><h3>Mensaje:</h3></p>
<p>$asunto</p>
</div>
</body>
</html>";

    // Enviar correo
    $mail->send();
    echo 'El mensaje ha sido enviado correctamente';
} catch (Exception $e) {
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
}

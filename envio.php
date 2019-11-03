<?php
$empresa = $_POST["empresa"];
$name = $_POST["name"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

$body = "Empresa: " . $empresa . "<br>Nombre: " . $name . "<br>Correo: " . $email . "<br>Teléfono: " . $telefono . "<br>Asunto: " . $asunto . "<br>Mensaje: " . $mensaje;
	
use  PHPMailer\PHPMailer\PHPMailer; 
use  PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'empresatecnitel@gmail.com';                     // SMTP username
    $mail->Password   = 'tecnitel2019';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('empresatecnitel@gmail.com', $name);
    $mail->addAddress('jantonydh@gmail.com');     // Add a recipient
	
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
  	$mail->Subject = 'Tecnitel fiber';
    $mail->Body    = $body;
    $mail->CharSet = 'UTF-8';

    $mail->send();
    echo '<script>
		alert("El mensaje se envió correctamente");
		window.history.go(-1);
		</script>';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}
?>
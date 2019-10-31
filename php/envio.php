<?php
//Llamando a los campos 
$empresa = $_POST['empresa'];
$name = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

//Datos para el correo
$destinatario = "jantonydh@gmail.com";

$carta = "De la empresa: $empresa \n";
$carta = "De: $name \n";
$carta = "Correo: $email \n";
$carta = "Telefono: $telefono \n";
$carta = "Asunto: $asunto \n";
$carta = "Mensaje: $mensaje";

//Enviando mensaje


//$contenido = '
//					<html>
//					<head>
//						<title></title>
//					</head>
//					<body>	
//						 <h2>Haz recibido un mensaje</h2>
//						 <h3>Asunto: '.$asunto. '</h3>
//						 <p>Mensaje de la empresa:' .$empresa. '</p>
//						 <p>'.$name. ' te ha enviado el siguiente mensaje:</p>
//						 <p>'.$mensaje. ' <br><br> Puedes ponerte en contacto con la persona al email: '.$email.' o por su teléfono '.$telefono.'</p>
//						 <hr>	 
//					</body>
//					</html>';
?>
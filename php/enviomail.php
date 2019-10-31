<?php
$empresa =   isset( $_POST['empresa'] ) ? $_POST['empresa'] : '';
$name =   isset( $_POST['name'] ) ? $_POST['name'] : '';
$email  =   isset( $_POST['email'] ) ? $_POST['email'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
$asunto =   isset( $_POST['asunto'] ) ? $_POST['asunto'] : '';
$mensaje =  isset( $_POST['mensaje'] ) ? $_POST['mensaje'] : '';
$contenido = '
						<html>
						<head>
							<title></title>
						</head>
						<body>	
							 <h2>Haz recibido un mensaje</h2>
							 <h3>Asunto: '.$asunto. '</h3>
							 <p>Mensaje de la empresa:' .$empresa. '</p>
							 <p>'.$name. ' te ha enviado el siguiente mensaje:</p>
							 <p>'.$mensaje. ' <br><br> Puedes ponerte en contacto con la persona al email: '.$email.' o por su teléfono '.$telefono.'</p>
							 <hr>	 
						</body>
						</html>';


// Configuración de los encabezados
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

// Enviar correo
$envio = mail('jantonydh@gmail.com', $asunto, $contenido, $headers);


if($envio) {
$miresultado = '<h4>El correo ha sido enviado! Gracias por ponerse en contacto con nosotros.</h4>';
} else{

$miresultado = '<h4>No se envío el correo.</h4>';

}

echo $miresultado;


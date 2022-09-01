<?php

$destino = "flococo@novabrokers.com.ar";
//Esto es al correo que se enviara el mensaje//

$nombre = $_POST['nombre']; 
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$compañia = $_POST['compañia'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde formulario de contacto en localhost";
$mensajeCompleto = "\n Nombre: " . $nombre . "\n" . "Email: " . $email . "\n" . "Telefono :" . $telefono . "\n" . "Compañia :" . $compañia . "\n". "Mensaje :" . $mensaje;
mail($destino, $asunto, $mensajeCompleto, $header);
header('Location: pagina3.html');
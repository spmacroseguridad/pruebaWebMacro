<?php
$destino = "spmacroseguridad@gmail.com";
//Importamos las variables del formulario de contacto
$nombre = $_GET['nombre'];
$nombreEmpresa = $_GET['nombreEmpresa'];
$email = $_GET['email'];
$mensaje = $_GET['mensaje'];
$contenido = "Nombre: " . $nombre . "\nNombreEmpresa: " . $nombreEmpresa . "\nEmail: " . $email . "\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
header("Location: gracias.html");

?>

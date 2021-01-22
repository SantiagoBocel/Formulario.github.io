<?php
 
 //llamar campos
$Nombre = $_POST['nombre'];
$Correo = $_POST['correo'];
$Telefono = $_POST['telefono'];
$Direccion = $_POST['direccion'];
$mensaje = $_POST['msg'];

//Datos para correo
$Destino = "santiagobocel10@gmail.com";
$Asunto = "Contacto_web";

$Carta = "Cliente: $Nombre \n";
$Carta .= "Correo: $Correo \n";
$Carta .= "Telefono: $Telefono \n";
$Carta .= "Direccion: $Direccion \n";
$Carta .= "mensaje: $mensaje";

//Enviar mensaje
mail($Destino,$Asunto,$Carta);
?>
<?php

$correo = $_POST['email'];
$telefono = $_POST['telefono'];

$destinatario = "pruebalira3@gmail.com";
$asunto = "prueba";

$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";

mail($destinatario, $asunto, $carta);
header('location:msj_gracias')
?>
<?php
$nombre_form = $_POST['nombre'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];

$destinatario= "iejcaceres@gmail.com";
$asunto= "Mensaje website GS";
$cuerpo= $mensaje_form;
$remitente= "From: <$correo_form>";

mail($destinatario, $asunto, $cuerpo, $remitente);
header("location:correo_enviado.php");
?>

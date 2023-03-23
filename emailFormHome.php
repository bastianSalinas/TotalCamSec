<?php

$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$number = $_POST['number'];
$servicio1 = $_POST['servicio1'];
$servicio2 = $_POST['servicio2'];
$servicio3 = $_POST['servicio3'];
$servicio4 = $_POST['servicio4'];
$comment = $_POST['comment'];

$formcontent="
    Han completado el Formulario de la Página Web! Home\n
    Nombre: $name \n
    Correo electrónico: $email \n
    Empresa o Particular: $company \n
    Telefono de Contacto: $number \n
    Servicio 1 Cámaras de Seguridad: $servicio1 \n
    Servicio 2 Grabadores: $servicio2 \n
    Servicio 3 Alarmas: $servicio3 \n
    Servicio 4 Sensores: $servicio4 \n
    Comentario Adicional: $comment
";

$recipient = "totalcamsec12@gmail.com";

$subject = "Contacto Web $name";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");
?>
<?php

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$formcontent="
    Han completado el Formulario de la Página Web Contacto! \n
    Nombre: $name \n
    Apellido: $lastname \n
    Correo electrónico: $email \n
    Comentario Adicional: $comment
";

$recipient = "totalcamsec12@gmail.com";

$subject = "Contacto Web $name";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: ./pages/thanks.html");
?>
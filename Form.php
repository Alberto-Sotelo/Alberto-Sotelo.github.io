<?php
$Nombre = $_POST["name"];
$Email = $_POST["email"];
$Password = $_POST["password"];
$Repassword = $_POST["repassword"];
file_put_contents("datos.txt", "Nombre: $Nombre, Correo: $Email, Contraseña: $Password, Verifica Contraseña: $Repassword\n", FILE_APPEND);
?>
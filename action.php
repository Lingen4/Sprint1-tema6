<?php

$name = htmlspecialchars($_POST['name']);
$email = $_POST['email'];
$username = $_POST['username'];


$datos = "Estos datos son los de ". $name ."\r\n";
$datos.= "Su e-mail es ".$email."\r\n";
$datos.= "Su nombre de usuario es".$username."\r\n";

echo($datos);
?>
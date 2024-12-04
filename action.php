<?php
session_start();

$name = htmlspecialchars($_POST['name']);
$email = $_POST['email'];
$username = $_POST['username'];

$_SESSION['name']= $_POST['name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['username']=$_POST['username'];


$datos = "Estos datos son los de ". $name ."<br>";
$datos.= "Su e-mail es ".$email."<br>";
$datos.= "Su nombre de usuario es ".$username."<br>";

echo($datos)."<br>";

echo "Persona en la sesión actual--> ". $_SESSION['name']."<br>";
echo "E-mail del usuario actual--> ".$_SESSION['email']."<br>";
echo "Nombre de usuario actual--> ".$_SESSION['username']."<br>";


//header('Location:formulario.html');
?>
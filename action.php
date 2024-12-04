<?php
session_start();

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$username = htmlspecialchars($_POST['username']);

$_SESSION['name']= $_POST['name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['username']=$_POST['username'];


$datos = "Estos datos son los de ". $name ."<br>";
$datos.= "Su e-mail es ".$email."<br>";
$datos.= "Su nombre de usuario es ".$username."<br>";

echo($datos)."<br> Este archivo actualmente se encuentra en--> ".__FILE__;

echo "<br>Lo siguiente está en la linea ". __LINE__ ."<h4>Persona en la sesión actual--> ". $_SESSION['name']."</h4>";
echo "<h4>E-mail del usuario actual--> ".$_SESSION['email']."</h4>";
echo "<h4>Nombre de usuario actual--> ".$_SESSION['username']."</h4>";





//header('Location:formulario.html');
?>
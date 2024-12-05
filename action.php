<?php
session_start();

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$username = htmlspecialchars($_POST['username']);


echo "<h4> Este archivo actualmente se encuentra en ==> " . __FILE__ . "</h4>";
echo "<h4>Lo siguiente empieza en la linea " . __LINE__ . "</h4>";


$datos = "Estos datos son los de " . $name . "<br>";
$datos .= "Su e-mail es " . $email . "<br>";
$datos .= "Su nombre de usuario es " . $username . "<br>";

echo "<h3>Datos impresos con concatenación a variable 'datos' desde POST:</h3>" . $datos;



$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['username'] = $_POST['username'];

echo "<h3>Datos impresos con sesión _SESSION['valor individual'] = POST['valor individual']</h3>

<h4>Persona en la sesión actual--> " . $_SESSION['name'] . "</h4>";
echo "<h4>E-mail del usuario actual--> " . $_SESSION['email'] . "</h4>";
echo "<h4>Nombre de usuario actual--> " . $_SESSION['username'] . "</h4>";


$datosSesion = [
    'nombre' => $name,
    'email' => $email,
    'usuario' => $username
];

$_SESSION['datosSesion'] = $datosSesion;

echo "<h3>Datos impresos con foreach + _SESSION y sus valores en un array asociativo:</h3>";
foreach ($_SESSION['datosSesion'] as $key => $dato) {
    echo "<h4>" . $key . "==>" . $dato . "</h4>";
}



class Sesion
{

    private array $datosClase;

    public function __construct($datosSesion)
    {
        $this->datosClase = $datosSesion;
    }

    public function __toString()
    {
        return "<br>Nombre--> " . $this->datosClase['nombre']
            . "<br>Email-->" . $this->datosClase['email']
            . "<br>Username-->" . $this->datosClase['usuario'];
    }
}

$sesion1 = new Sesion($datosSesion);
echo "<h3> Datos impresos con la creacion de un objeto Sesión y modificación de __toString()</h3><h4>" . $sesion1."</h4>";

//header('Location:formulario.html');

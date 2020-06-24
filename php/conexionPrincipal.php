<?php
// se inicia la session de php
session_start();

$user = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //tomamos el valor de usuario pasado por post y lo guardamos en una variable $usuario
    $user = test_input($_POST["user"]);
    //llamamos a una funcion que verifica los datos ingresados
    $password = test_input($_POST["password"]);
}

function test_input($data)
{
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// Conecta al servicio ORCL (ORCL es una base de datos) en el servidor "localhost" ip 192.168.0.31
$conn = oci_connect($user, $password, '192.168.0.31/ORCL', 'AL32UTF8'); //el ultimo parametro hace que se pueda leer caracteres latinoamericanos
//$conn = oci_connect('final', 'final', '192.168.0.31/ORCL', 'AL32UTF8'); 
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
} else {
    //Creacion de variables de session
    $_SESSION["usuarioSession"] = $user;
    $_SESSION["passwordSession"] = $password;
}

// NOTE termianda la conexion principar redirigimos a la pagina principal

header("Location:../3-paginaPrincipal.php");

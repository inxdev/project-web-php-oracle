<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //tomamos el valor de usuario pasado por post y lo guardamos en una variable $usuario
  //llamamos a una funcion que verifica los datos ingresados
  $dni = test_input($_POST['dni']);
  $capital = test_input($_POST['capital']);
  $cantCuotas = test_input($_POST['cantCuotas']);
  $intAnual = test_input($_POST['intAnual']);
  $ventMen = test_input($_POST['ventMen']);
  $dnig = test_input($_POST['dnig']);
}

function test_input($data)
{
  //funcion para pasar a string y que nose ingrese un script
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// echo "<br>";
// echo 'dni:'.$dni.'<br>';
// echo 'capital:'.$capital.'<br>'; 
// echo 'cantCuotas:'.$cantCuotas.'<br>';
// echo 'intAnual:'.$intAnual.'<br>';
// echo 'ventMen :'.$ventMen.'<br>';
// echo 'dnig:'.$dnig.'<br>';

$conn = oci_connect($_SESSION['usuarioSession'], $_SESSION['passwordSession'], '192.168.0.31/ORCL', 'AL32UTF8');
if (!$conn) {
  $e = oci_error();
  trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
// else {
//   echo "conexion exitosa <br>";
// }
// $resultado = 0;
//Cuando se analizan programas PL/SQL, debería existir un punto y coma final de la cadena
$stid = oci_parse($conn, 'begin pro_agregar_prestamo(:pNroDocumentot, :capital, :pcantCuotas, :pintAnual, :pventMen, pNroDocumentog ); end;');
oci_bind_by_name($stid, ':pNroDocumentot', $dni);
oci_bind_by_name($stid, ':pcapital', $capital);
oci_bind_by_name($stid, ':pcantCuotas', $cantCuotas);
oci_bind_by_name($stid, ':pintAnual', $intAnual);
oci_bind_by_name($stid, ':pventMen', $ventMen);
oci_bind_by_name($stid, ':pNroDocumentog', $dnig, 255);
$resultado = oci_execute($stid);
// if ($resultado = 1) {
//   echo '<script>alert("La inscripion se realizo de manera correcta")</script>';
// } else {
//   echo '<script>alert("Surgio un error no se pudo agregar la inscripion")</script>';
// }
// $resultado = 0;
header("Location:../5-paginaAltaPrestamo.php");
oci_free_statement($stid);
oci_close($conn);

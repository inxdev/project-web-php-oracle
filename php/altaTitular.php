<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //tomamos el valor de usuario pasado por post y lo guardamos en una variable $usuario
    //llamamos a una funcion que verifica los datos ingresados
    $dni = test_input($_POST['dni']);
    $surname = test_input($_POST['surname']);
    $name = test_input($_POST['name']);
    $birthday = test_input($_POST['birthday']);
    $address = test_input($_POST['address']);
    $tipoTelefono = test_input($_POST['tipoTelefono']);
    $tel = test_input($_POST['tel']);
    $IngresosTotales = test_input($_POST['IngTitular']);
    $CantFamiliares = test_input($_POST['cantFamiliar']);
    $IngresosRetenidos = test_input($_POST['IngRetenidos']);
    $dnig = test_input($_POST['dnig']);
    $surnameg = test_input($_POST['surnameg']);
    $nameg = test_input($_POST['nameg']);
    $birthdayg = test_input($_POST['birthdayg']);
    $addressg = test_input($_POST['addressg']);
    $tipoTelefonog = test_input($_POST['tipoTelefonog']);
    $telg = test_input($_POST['telg']);
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
// echo 'apellido:'.$surname.'<br>'; 
// echo 'nombre:'.$name.'<br>';
// echo 'cumple:'.$birthday.'<br>';
// echo 'direccion :'.$address.'<br>';
// echo 'tipoTelefono:'.$tipoTelefono.'<br>'; 
// echo 'Telefono:'.$tel.'<br>';
// echo 'ingresos totales: '.$IngresosTotales.'<br>';
// echo 'cantidad familiar: '.$CantFamiliares.'<br>';
// echo 'ingresos retenidos: '.$IngresosRetenidos.'<br>';
// echo 'dnig:'.$dnig.'<br>';
// echo 'apellidog:'.$surnameg.'<br>'; 
// echo 'nombreg:'.$nameg.'<br>';
// echo 'cumpleg:'.$birthdayg.'<br>';
// echo 'direcciong :'.$addressg.'<br>';
// echo 'tipoTelefonog:'.$tipoTelefonog.'<br>'; 
// echo 'Telefono:g'.$telg.'<br>';

$conn = oci_connect($_SESSION['usuarioSession'], $_SESSION['passwordSession'], '192.168.0.31/ORCL', 'AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
// else {
//     echo "conexion exitosa <br>";
// }

//Cuando se analizan programas PL/SQL, debería existir un punto y coma final de la cadena
$stid = oci_parse($conn, 'begin pro_agregar_inscripcion(:pNroDocumentop, :pApellido, :pNombre, :pFNacimiento, :pDireccion, :pIdTipoTelefono, 
                                :pNumeroTelefono, :pIngresosTotales, :pCantFamiliares, :pIngresosRetenidos, :pNroDocumentoG, :pApellidoG, :pNombreG,
                                :pFNacimientoG, :pDireccionG, :pIdTipoTelefonoG , :pNumeroTelefonoG ); end;');
oci_bind_by_name($stid, ':pNroDocumentop', $dni);
oci_bind_by_name($stid, ':pApellido', $surname);
oci_bind_by_name($stid, ':pNombre', $name);
oci_bind_by_name($stid, ':pFNacimiento', $birthday);
oci_bind_by_name($stid, ':pDireccion', $address);
oci_bind_by_name($stid, ':pIdTipoTelefono', $tipoTelefono);
oci_bind_by_name($stid, ':pNumeroTelefono', $tel);
oci_bind_by_name($stid, ':pIngresosTotales', $IngresosTotales);
oci_bind_by_name($stid, ':pCantFamiliares', $CantFamiliares);
oci_bind_by_name($stid, ':pIngresosRetenidos', $IngresosRetenidos);
oci_bind_by_name($stid, ':pNroDocumentoG', $dnig);
oci_bind_by_name($stid, ':pApellidoG', $surnameg);
oci_bind_by_name($stid, ':pNombreG', $nameg);
oci_bind_by_name($stid, ':pFNacimientoG', $birthdayg);
oci_bind_by_name($stid, ':pDireccionG', $addressg);
oci_bind_by_name($stid, ':pIdTipoTelefonoG', $tipoTelefonog);
oci_bind_by_name($stid, ':pNumeroTelefonoG', $telg, 255);
oci_execute($stid);

header("Location:../4-paginaInscripcion.php");
oci_free_statement($stid);
oci_close($conn);

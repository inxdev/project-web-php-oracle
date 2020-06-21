<?php
// este modulo obtiene los tipos de telefonos para los combobox

//funcion para obtener las session variables
session_start();
//llamamos al modulo para la conexion con la BD
require_once "conexionSecundaria.php";
//llamamos a la funcion connection() del modulo exportado en la linea anterior
$conn = connection();

$stid = oci_parse($conn, 'SELECT * FROM final.tipotelefono');
oci_execute($stid);

//toma fila por fila los datos de la consulta
while ($row = oci_fetch_array($stid)) {
    echo '<option value="' . $row[0] . '">' . $row[1] . '</option>';
    // $row[0] obtenemos el valor del id tipo telefono de la fila obtenida
    // $row[1] obtenemos el valor del detalle tipo telefono de la fila obtenida
}
oci_free_statement($stid);
oci_close($conn); // cerramos la conexion con la BD

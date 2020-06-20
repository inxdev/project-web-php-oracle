<?php
// NOTE este modulo obtiene los tipos de telefonos para los combobox

// ANCHOR funcion para obtener las session variables
session_start();
// ANCHOR llamamos al modulo para la conexion con la BD
require_once "php/conexionSecundaria.php";
// ANCHOR llamamos a la funcion connection() del modulo exportado en la linea anterior
$conn = connection();

    $stid = oci_parse($conn, 'SELECT * FROM final.tipotelefono');
    oci_execute($stid);

    // ANCHOR toma fila por fila los datos de la consulta
    while ($row = oci_fetch_array($stid)){
        echo '<option value="'.$row[0].'">'.$row[1].'</option>';
        // ANCHOR $row[0] obtenemos el valor del id tipo telefono de la fila obtenida
        // ANCHOR $row[1] obtenemos el valor del detalle tipo telefono de la fila obtenida
    }
    oci_free_statement($stid);
    oci_close($conn); // ANCHOR cerramos la conexion con la BD
?>
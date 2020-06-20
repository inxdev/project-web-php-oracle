<?php
  // session_start();
  // $user = $_SESSION['usuarioSession'];
  // $passwrod = $_SESSION['passwordSession'];

  //funcion para devolver una conexion
  function connection(){
    // Conecta al servicio ORCL (esto es, una base de datos) en el servidor "localhost" ip 192.168.0.31
    //cambiar 192.168.0.31 por localhost
    $conn = oci_connect($_SESSION['usuarioSession'],$_SESSION['passwordSession'], '192.168.0.31/ORCL', 'AL32UTF8'); 
    if (!$conn) {
      $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
      }
    return $conn;
  }

?>

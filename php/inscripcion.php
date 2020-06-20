<?php

    require_once "conexion.php";
    $conn = connection();

    $dni_client = $_POST['dni_client'];
    $surname_client = $_POST['surname_client'];
    $name_client = $_POST['name_client'];
    $birthday_client = $_POST['birthday_client'];
    $address_client = $_POST['address_client'];
    // $type_tel_cliente = $_POST['type_tel_client'];
    // $tel_client = $_POST['tel_client'];
    
    $sql = "INSERT INTO final.persona (nrodocumentop, apellido, nombre, fnacimiento, direccion) 
            VALUES ('$dni_client','$surname_client','$name_client','$birthday_client','$address_client');";
    $stid = oci_parse($conn, $sql); // la base de datos esta creada en un esquema llamado final
    oci_execute($stid);

    echo $stid;
    // $dni_gar = $_POST[''];
    // $surname_gar = $_POST[''];
    // $name_gar = $_POST[''];
    // $birthday_gar = $_POST[''];
    // $address_gar = $_POST[''];
    // $type_tel_gar = $_POST[''];
    // $tel_gar = $_POST[''];
?>
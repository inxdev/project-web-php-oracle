<?php
    session_start();
    echo "<p>El usuario es: $_SESSION[usuarioSession]</p>";
    echo "<p>El usuario es: $_SESSION[passwordSession]</p>";
    session_unset();
    echo "<p>El usuario es: $_SESSION[usuarioSession]</p>";
    echo "<p>El usuario es: $_SESSION[passwordSession]</p>";
    session_destroy();
    // echo "Se ha cerrado sesion correctamente<br>";
    // echo "volver al inicio<br>";
    // echo "<a href='../0-index.php'>Inicio</a>";
    header("Location:../0-index.php");
?>
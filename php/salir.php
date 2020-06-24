<?php
session_start();
// echo "<p>El usuario es: $_SESSION[usuarioSession]</p>";
// echo "<p>El password es: $_SESSION[passwordSession]</p>";

// NOTE Eliminamos las variables de session
session_unset();
// echo "<p>El usuario es: $_SESSION[usuarioSession]</p>";
// echo "<p>El password es: $_SESSION[passwordSession]</p>";

// NOTE Destruimos la session
session_destroy();

// NOTE una vez eliminadas las variables y la session redirigimos a la pagina index
header("Location:../index.php");

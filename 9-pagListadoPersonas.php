<?php
// se inicia la session de php
session_start();
// controla si hay una session abierta
// si hay una session abierta se despliega la pagina
if (isset($_SESSION['usuarioSession'])) {
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="Moura Elias" content="">
        <title>Personas</title>

        <?php
        //llamado del archivo que contiene los estilos
        require_once "php/estilos.php";
        ?>

    </head>

    <body class="d-flex flex-column"></body>
    <?php
    // llamada al menu (NavBar) 
    require_once "php/NavBar.php";
    // requerimos el archivos conexion secundaria
    require_once "php/conexionSecundaria.php";
    /*al requerir la conexionSecundaria.php podemos hacer uso de la funcion definida en dicho modulo
    php, esta funcion es connection(), la cual devuelve una conexion a la BD*/
    $conn = connection();

    /*  despues de obtener la conexion podemos ejecutar consultas sobre la BD. 
            Realizamos una consulta para obtener los datos de las personas. 
            Debemos tener en cuenta que la base de datos esta creada en un esquema llamado final
            para poder acceder a las tablas de la base de datos con cualquier usuario creado y 
            agregado a un rol que tenga permiso, debemos poner en la consulta "final.nombretabla" */
    $stid = oci_parse($conn, 'SELECT * FROM final.persona');
    oci_execute($stid);
    // cerramos el codigo php para poner codigo html
    ?>
    <!-- codigo html que define varias divisiones que utilizan clases de boostrap
        para darle estilo visual al listado-->
    <div class="container my-5">
        <div class="card card-signin">
            <div class="card-body table-responsive">
                <h5 class="card-title text-center">Listado de Personas</h5>

                <!-- abrimos cosigo php para cargar los datos de la tabla personas -->
                <?php

                // en php creamos la tabla que mostrara los datos de las personas
                echo "<table class='table table-sm table-striped'>";

                //definimos el caption para nuestra tabla
                echo "<caption>Lista de personas</caption>";

                //comienza el encabezado de nuestra tabla
                echo "<thead class='thead-dark'>";

                //comienza la fila del encabezado
                echo "<tr>";

                // cada uno de los titulos de nuestras columnas
                echo "<th scope='col'> DNI </th>";
                echo "<th scope='col'> APELLIDO </th>";
                echo "<th scope='col'> NOMBRE </th>";
                echo "<th scope='col'> FNACIMIENTO </th>";
                echo "<th scope='col'> DIRECCION </th>";
                echo "</tr>";

                //cerramos el head de nuestra tabla
                echo "</thead>";

                //comienza el cuerpo de nuestra tabla
                echo "<tbody>";
                // con oci_fetch_array tomamos una fila de la consulta realizada
                // y la guardamos en la variable $row la cual mostrara los datos
                while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
                    echo "<tr>";

                    foreach ($row as $item) {
                        echo "<td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>\n";
                ?>
            </div>
        </div>
    </div>
    <?php
    oci_free_statement($stid);
    // cerramos la conexion con la BD
    oci_close($conn);
    ?>

    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <!-- <small>Copyright &copy; Your Website</small> -->
            <small>Universidad Gaston Dachary - Tecnologias de Base de datos</small>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    </body>

    </html>
<?php
} else {
    //Si no hay una session abierta dirige al login
    header("Location:1-login.php");
}
?>
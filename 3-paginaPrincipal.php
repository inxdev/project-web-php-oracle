<?php
  // se inicia la session de php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>Inicio</title>
  
  <!-- Boostrap y archivos de estilos -->
    <!-- Bootstrap CSS -->
    <link 
    rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="assets/css/all.css" rel="stylesheet">
    <link href="assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
      type="text/css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/inscripcion.css">
    <!-- <script src="https://kit.fontawesome.com/f87a832d0e.js" crossorigin="anonymous"></script> -->

</head>

<body class="d-flex flex-column">
  <?php
    // llamada al menu (NavBar) 
    require_once "php/NavBar.php";
    // llamada a la conexion
    require_once "php/conexionSecundaria.php";
    
    // Para mostrar el usuario y la password del usuario que se logueo
    // echo "<p>El usuario es: $_SESSION[usuarioSession]</p>";
    // echo "<p>El usuario es: $_SESSION[passwordSession]</p>";
  ?>

    <!-- Contenedor de la presentacion -->
    <div class="container-fluid features-icons p-md-4 p-lg-5 text-center">
      <div class="row">
        <div class="col-sm-10 col-md-10 col-lg-10 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h1 class="text-center">Bienvenido!</h1>
              <h5 class="text-center">Sistema de prestamos</h5>
              <hr class="my-3">
              <div>
                  <p>En este proyecto se trabaja sobre un enunciado de un sistema de prestamos, en el cual 
                    se podra trabajar sobre :</p>
              </div>
              <div class="features-icons p-3 m-md-4 m-lg-5 text-center border border-primary rounded">
                <div class="row justify-content-center m-3 p-3">

                  <div class="col m-3">
                    <div class="features-icons-item mx-auto mb-lg-0 mb-lg-2">
                      <div class="features-icons-icon">
                        <i class="icon-people m-auto text-primary"></i>
                      </div>
                      <h5><a class="mb-5">Clientes</a></h5>
                    </div>
                  </div>

                  <div class="col m-3">
                    <div class="features-icons-item mx-auto mb-lg-0 mb-lg-2">
                      <div class="features-icons-icon">
                        <i class="icon-wallet m-auto text-primary"></i>
                      </div>
                      <h5><a class="mb-5">Prestamos</a></h5>
                    </div>
                  </div>
                  <hr class="my-3">
                  <div class="w-100"></div>

                  <div class="col m-3">
                    <div class="features-icons-item mx-auto mb-lg-0 mb-lg-2">
                      <div class="features-icons-icon">
                        <i class="icon-docs m-auto text-primary"></i>
                      </div>
                      <h5><a class="mb-5">Informes</a></h5>
                    </div>
                  </div>

                  <div class="col m-3">
                    <div class="features-icons-item mx-auto mb-lg-0 mb-lg-2">
                      <div class="features-icons-icon">
                        <i class="icon-refresh m-auto text-primary"></i>
                      </div>
                      <h5><a class="mb-5">Convenios</a></h5>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <!-- <small>Copyright &copy; Your Website</small> -->
      <small>Universidad Gaston Dachary - Tecnologias de Base de datos</small>
    </div>
  </footer>

  <!-- scripts Jquery, boostrap y ajax -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>

<!--     $conn = connection();
    
    $stid = oci_parse($conn, 'SELECT * FROM final.persona'); // la base de datos esta creada en un esquema llamado final
    oci_execute($stid);                                      //para poder acceder a las tablas de la bd con cualquier usuario que tenga permiso deemos poner final.nombretabla
    
    echo '<div class="container  my-5">';
      echo '<div class="card card-signin my-5">';
        echo '<div class="card-body table-responsive">';
          echo "<table class='table table-sm table-striped'>";
          //echo "<table class='table table-striped'>\n";
              echo "<caption>Lista de personas</caption>";
              echo "<thead class='thead-dark'>";
              echo "<tr>";
              echo "<th scope='col'> DNI </th>";
              echo "<th scope='col'> APELLIDO </th>";
              echo "<th scope='col'> NOMBRE </th>";
              echo "<th scope='col'> FNACIMIENTO </th>";
              echo "<th scope='col'> DIRECCION </th>";
              echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
              while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                  echo "<tr>";
        
                  foreach ($row as $item) {
                      echo "<td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") ."</td>";
                  }
                  echo "</tr>";
              }
              echo "</tbody>";
          echo "</table>\n";
        echo '</div>';
      echo '</div>';
		echo '</div>';
		oci_free_statement($stid);
		oci_close($conn);
  ?> -->
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="Moura Elias" content="">

    <title>Inscripcion Cliente</title>
    <?php
    //llamado del archivo que contiene los estilos
    require_once "php/estilos.php";
    ?>
  </head>

  <body class="d-flex flex-column">
    <?php
    // llamada al menu (NavBar) 
    require_once "php/NavBar.php";

    // Para mostrar el usuario y la password del usuario que se logueo
    // echo "<p>El usuario es: $_SESSION[usuarioSession]</p>";
    // echo "<p>El usuario es: $_SESSION[passwordSession]</p>";
    ?>

    <!-- Division para el formulario de registro -->
    <div class="container-fluid  my-5">
      <div class="row">
        <div class="col-sm-10 col-md-7 col-lg-8 mx-auto">
          <div class="card card-signin">
            <div class="card-body">
              <!-- Titulo -->
              <h5 class="card-title text-center">Inscripcion clientes</h5>
              <form class="form-signin" action="php/altaTitular.php" method="POST">
                <!-- <div class="form-group row">   
                    <label class="col-sm-3 col-md-7 col-lg-8 col-form-label">Buscar cliente</label>
                  </div>
                  <hr class="my-3">
                  <div class="form-group row">                         
                    <label for="inputSClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">DNI</label>
                    <div class="col-sm-6 col-md-6 col-lg-7">
                      <input type="text" class="form-control" id="inputSClient" placeholder="DNI">
                    </div>
                    <div class="col-sm-3">
                      <button class="btn-buscar btn-primary " type="submit" id="SearchClient">Buscar</button>
                    </div>
                  </div> -->
                <hr class="my-3">
                <div class="form-group row">
                  <label class="col-sm-3 col-md-7 col-lg-8 col-form-label">Datos cliente</label>
                </div>
                <hr class="my-3">
                <!-- NOTE INPUT DNI TITULAR -->
                <div class="form-group row">
                  <label for="inputDniClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">DNI</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="dni" id="inputDniClient" placeholder="DNI" required>
                  </div>
                </div>
                <!-- NOTE INPUT APELLIDO TITULAR -->
                <div class="form-group row">
                  <label for="inputSurnaClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Apellido</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="surname" id="inputSurnaClient" placeholder="Apellido" required>
                  </div>
                </div>
                <!-- NOTE INPUT NOMBRE TITULAR -->
                <div class="form-group row">
                  <label for="inputNameClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nombre</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="name" id="inputNameClient" placeholder="Nombre" required>
                  </div>
                </div>
                <!-- NOTE INPUT FECHA NACIMIENTO TITULAR -->
                <div class="form-group row">
                  <label for="inputFNC" class="col-sm-4 col-md-4 col-lg-2 col-form-label">F. Nacimiento</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="birthday" id="inputFNC" placeholder="DD/MM/YYYY" required>
                  </div>
                </div>
                <!-- NOTE INPUT DIRECCION TITULAR -->
                <div class="form-group row">
                  <label for="inputAddrClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Direccion</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="address" id="inputAddrClient" placeholder="Direccion" required>
                  </div>
                </div>
                <!-- NOTE INPUT TIPO TELEFONO TITULAR -->
                <div class="form-group row">
                  <label for="tipoTelefonoClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Tipo Telefono</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <select class="form-control" name="tipoTelefono" id="tipoTelefonoClient">
                      <!-- <option value='1'>Telefono fijo</option>
                        <option value='2'>Celular</option>      -->
                      <?php require_once "php/tipoTelefono.php"; ?>
                    </select>
                  </div>
                </div>
                <!-- NOTE INPUT NRO TELEFONO TITULAR -->
                <div class="form-group row">
                  <label for="inputTelClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Telefono</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="tel" id="inputTelClient" placeholder="Telefono" required>
                  </div>
                </div>
                <!-- NOTE INPUT INGRESOS TOTALES TITULAR-->
                <div class="form-group row">
                  <label for="inputIngClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Ingresos Totales</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="IngTitular" id="inputIngClient" placeholder="Ingresos Totales" required>
                  </div>
                </div>
                <!-- NOTE INPUT CANTIDAD FAMILIARES TITULAR -->
                <div class="form-group row">
                  <label for="inputFamilyClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Cantidad Familiares</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="cantFamiliar" id="inputFamilyClient" placeholder="Cantidad Familliares" required>
                  </div>
                </div>
                <!-- NOTE INPUT INGRESOS RETENIDOS TITULAR -->
                <div class="form-group row">
                  <label for="inputRetenClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Ingresos Retenidos</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="IngRetenidos" id="inputRetenClient" placeholder="Ingresos Retenidos" required>
                  </div>
                </div>
                <!-- <hr class="my-4">
                  <div class="form-group row">   
                    <label class="col-sm-3 col-md-7 col-lg-8 col-form-label">Buscar garante</label>
                  </div>
                  <hr class="my-3">
                  <div class="form-group row">                         
                    <label for="inputSGarante" class="col-sm-4 col-md-4 col-lg-2 col-form-label">DNI</label>
                    <div class="col-sm-6 col-md-6 col-lg-7">
                      <input type="text" class="form-control" id="inputSGarante" placeholder="DNI">
                    </div>
                    <div class="col-sm-3">
                      <button class="btn-buscar btn-primary " type="submit" id="SearchGarante">Buscar</button>
                    </div>
                  </div> -->
                <hr class="my-3">
                <div class="form-group row">
                  <label class="col-sm-3 col-md-7 col-lg-8 col-form-label">Datos garante</label>
                </div>
                <hr class="my-3">
                <!-- NOTE INPUT DNI GARANTE -->
                <div class="form-group row">
                  <label for="inputDniGarante" class="col-sm-4 col-md-4 col-lg-2 col-form-label">DNI</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="dnig" id="inputDniGarante" placeholder="DNI" required>
                  </div>
                </div>
                <!-- NOTE INPUT APELLIDO GARANTE -->
                <div class="form-group row">
                  <label for="inputSurnaGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Apellido</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="surnameg" id="inputSurnaGar" placeholder="Apellido" required>
                  </div>
                </div>
                <!-- NOTE INPUT NOMBRE GARANTE -->
                <div class="form-group row">
                  <label for="inputNameGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nombre</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="nameg" id="inputNameGar" placeholder="Nombre" required>
                  </div>
                </div>
                <!-- NOTE FECHA NACIMIENTO GARANTE -->
                <div class="form-group row">
                  <label for="inputFNG" class="col-sm-4 col-md-4 col-lg-2 col-form-label">F. Nacimiento</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="birthdayg" id="inputFNG" placeholder="DD/MM/YYYY" required>
                  </div>
                </div>
                <!-- NOTE DIRECCION GARANTE -->
                <div class="form-group row">
                  <label for="inputAddrGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Direccion</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="addressg" id="inputAddrGar" placeholder="Direccion" required>
                  </div>
                </div>
                <!-- NOTE TIPO TELEFONO GARANTE -->
                <div class="form-group row">
                  <label for="tipoTelGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Tipo Telefono</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <select class="form-control" name="tipoTelefonog" id="tipoTelGar">
                      <option value='1'>Telefono Fijo</option>
                      <option value='2'>Celular</option>
                    </select>
                  </div>
                </div>
                <!-- NOTE TELEFONO GARANTE -->
                <div class="form-group row">
                  <label for="inputTelGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Telefono</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="telg" id="inputTelGar" placeholder="Telefono" required>
                  </div>
                </div>
                <!-- NOTE BOTTON INSCRIBIR -->
                <hr class="my-4">
                <div class="form-group row">
                  <label for="" class="col-sm-5 col-md-5 col-lg-10 col-form-label"></label>
                  <button class="btn btn-lg btn-primary text-uppercase" name="submit" type="submit" id="btnInscribir">Inscribir</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <section id="contact" class="map">
          <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed" style="pointer-events: none;"></iframe>
          <br>
          <small>
          <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
          </small>
      </section> -->
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
      <div class="container text-center">
        <!-- <small>Copyright &copy; Your Website</small> -->
        <small>Universidad Gaston Dachary - Tecnologias de Base de datos</small>
      </div>
    </footer>
    <!-- scripts Jquery, boostrap y ajax -->
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
  // PODRIAMOS PONER LA LOGICA PARA LLAMAR AL PROCEDIMIENTO DE LA SIGuiENTE MANERA
  // if (isset($_POST['submit'])) {
  //   function test_input($data)
  //   {
  //     //funcion para pasar a string y que nose ingrese un script
  //     $data = stripslashes($data);
  //     $data = htmlspecialchars($data);
  //     return $data;
  //   }
  //   //tomamos el valor de usuario pasado por post y lo guardamos en una variable $usuario
  //   //llamamos a una funcion que verifica los datos ingresados
  //   $dni = test_input($_POST['dni']);
  //   $surname = test_input($_POST['surname']);
  //   $name = test_input($_POST['name']);
  //   $birthday = test_input($_POST['birthday']);
  //   $address = test_input($_POST['address']);
  //   $tipoTelefono = test_input($_POST['tipoTelefono']);
  //   $tel = test_input($_POST['tel']);
  //   $IngresosTotales = test_input($_POST['IngTitular']);
  //   $CantFamiliares = test_input($_POST['cantFamiliar']);
  //   $IngresosRetenidos = test_input($_POST['IngRetenidos']);
  //   $dnig = test_input($_POST['dnig']);
  //   $surnameg = test_input($_POST['surnameg']);
  //   $nameg = test_input($_POST['nameg']);
  //   $birthdayg = test_input($_POST['birthdayg']);
  //   $addressg = test_input($_POST['addressg']);
  //   $tipoTelefonog = test_input($_POST['tipoTelefonog']);
  //   $telg = test_input($_POST['telg']);

  //   $conn = oci_connect($_SESSION['usuarioSession'], $_SESSION['passwordSession'], '192.168.0.31/ORCL', 'AL32UTF8');
  //   if (!$conn) {
  //     $e = oci_error();
  //     trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  //   }
  //   // else {
  //   //   echo "conexion exitosa <br>";
  //   // }
  //   $resultado = 0;
  //   //Cuando se analizan programas PL/SQL, debería existir un punto y coma final de la cadena
  //   $stid = oci_parse($conn, 'begin pro_agregar_inscripcion(:pNroDocumentop, :pApellido, :pNombre, :pFNacimiento, :pDireccion, :pIdTipoTelefono, 
  //                                 :pNumeroTelefono, :pIngresosTotales, :pCantFamiliares, :pIngresosRetenidos, :pNroDocumentoG, :pApellidoG, :pNombreG,
  //                                 :pFNacimientoG, :pDireccionG, :pIdTipoTelefonoG , :pNumeroTelefonoG ); end;');
  //   oci_bind_by_name($stid, ':pNroDocumentop', $dni);
  //   oci_bind_by_name($stid, ':pApellido', $surname);
  //   oci_bind_by_name($stid, ':pNombre', $name);
  //   oci_bind_by_name($stid, ':pFNacimiento', $birthday);
  //   oci_bind_by_name($stid, ':pDireccion', $address);
  //   oci_bind_by_name($stid, ':pIdTipoTelefono', $tipoTelefono);
  //   oci_bind_by_name($stid, ':pNumeroTelefono', $tel);
  //   oci_bind_by_name($stid, ':pIngresosTotales', $IngresosTotales);
  //   oci_bind_by_name($stid, ':pCantFamiliares', $CantFamiliares);
  //   oci_bind_by_name($stid, ':pIngresosRetenidos', $IngresosRetenidos);
  //   oci_bind_by_name($stid, ':pNroDocumentoG', $dnig);
  //   oci_bind_by_name($stid, ':pApellidoG', $surnameg);
  //   oci_bind_by_name($stid, ':pNombreG', $nameg);
  //   oci_bind_by_name($stid, ':pFNacimientoG', $birthdayg);
  //   oci_bind_by_name($stid, ':pDireccionG', $addressg);
  //   oci_bind_by_name($stid, ':pIdTipoTelefonoG', $tipoTelefonog);
  //   oci_bind_by_name($stid, ':pNumeroTelefonoG', $telg, 255);
  //   $resultado = oci_execute($stid);
  //   // echo '<br>';
  //   // echo $resultado;
  //   if ($resultado = 1) {
  //     echo '<script>alert("La inscripion se realizo de manera correcta")</script>';
  //   } else {
  //     echo '<script>alert("Surgio un error no se pudo agregar la inscripion")</script>';
  //   }

  //   // echo '<br>';
  //   // echo 'Se llamo correctamente al procedimiento por_agregar_inscripcion';
  //   $resultado = 0;
  //   oci_free_statement($stid);
  //   oci_close($conn);
  // }
} else {
  //Si no hay una session abierta dirige al login
  header("Location:1-login.php");
}
?>
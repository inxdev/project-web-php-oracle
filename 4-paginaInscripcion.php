<?php
// se inicia la session de php
session_start();
// controla si hay una session abierta
// si hay una session abierta se despliega la pagina
if (isset($_SESSION['usuarioSession'])) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <!-- Division para el registro -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-10 col-md-7 col-lg-8 mx-auto">
          <div class="card card-signin my-5">
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
                    <input type="text" class="form-control" name="dni" id="inputDniClient" placeholder="DNI">
                  </div>
                </div>
                <!-- NOTE INPUT APELLIDO TITULAR -->
                <div class="form-group row">
                  <label for="inputSurnaClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Apellido</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="surname" id="inputSurnaClient" placeholder="Apellido">
                  </div>
                </div>
                <!-- NOTE INPUT NOMBRE TITULAR -->
                <div class="form-group row">
                  <label for="inputNameClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nombre</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="name" id="inputNameClient" placeholder="Nombre">
                  </div>
                </div>
                <!-- NOTE INPUT FECHA NACIMIENTO TITULAR -->
                <div class="form-group row">
                  <label for="inputFNC" class="col-sm-4 col-md-4 col-lg-2 col-form-label">F. Nacimiento</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="birthday" id="inputFNC" placeholder="DD/MM/YYYY">
                  </div>
                </div>
                <!-- NOTE INPUT DIRECCION TITULAR -->
                <div class="form-group row">
                  <label for="inputAddrClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Direccion</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="address" id="inputAddrClient" placeholder="Direccion">
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
                    <input type="text" class="form-control" name="tel" id="inputTelClient" placeholder="Telefono">
                  </div>
                </div>
                <!-- NOTE INPUT INGRESOS TOTALES TITULAR-->
                <div class="form-group row">
                  <label for="inputIngClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Ingresos Totales</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="IngTitular" id="inputIngClient" placeholder="Ingresos Totales">
                  </div>
                </div>
                <!-- NOTE INPUT CANTIDAD FAMILIARES TITULAR -->
                <div class="form-group row">
                  <label for="inputFamilyClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Cantidad Familiares</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="cantFamiliar" id="inputFamilyClient" placeholder="Cantidad Familliares">
                  </div>
                </div>
                <!-- NOTE INPUT INGRESOS RETENIDOS TITULAR -->
                <div class="form-group row">
                  <label for="inputRetenClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Ingresos Retenidos</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="IngRetenidos" id="inputRetenClient" placeholder="Ingresos Retenidos">
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
                    <input type="text" class="form-control" name="dnig" id="inputDniGarante" placeholder="DNI">
                  </div>
                </div>
                <!-- NOTE INPUT APELLIDO GARANTE -->
                <div class="form-group row">
                  <label for="inputSurnaGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Apellido</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="surnameg" id="inputSurnaGar" placeholder="Apellido">
                  </div>
                </div>
                <!-- NOTE INPUT NOMBRE GARANTE -->
                <div class="form-group row">
                  <label for="inputNameGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nombre</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="nameg" id="inputNameGar" placeholder="Nombre">
                  </div>
                </div>
                <!-- NOTE FECHA NACIMIENTO GARANTE -->
                <div class="form-group row">
                  <label for="inputFNG" class="col-sm-4 col-md-4 col-lg-2 col-form-label">F. Nacimiento</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="birthdayg" id="inputFNG" placeholder="DD/MM/YYYY">
                  </div>
                </div>
                <!-- NOTE DIRECCION GARANTE -->
                <div class="form-group row">
                  <label for="inputAddrGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Direccion</label>
                  <div class="col-sm-6 col-md-6 col-lg-9">
                    <input type="text" class="form-control" name="addressg" id="inputAddrGar" placeholder="Direccion">
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
                    <input type="text" class="form-control" name="telg" id="inputTelGar" placeholder="Telefono">
                  </div>
                </div>
                <!-- NOTE BOTTON INSCRIBIR -->
                <hr class="my-4">
                <div class="form-group row">
                  <label for="" class="col-sm-5 col-md-5 col-lg-10 col-form-label"></label>
                  <button class="btn btn-lg btn-primary text-uppercase" type="submit" id="btnInscribir">Inscribir</button>
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
} else {
  //Si no hay una session abierta dirige al login
  header("Location:1-login.php");
}
?>
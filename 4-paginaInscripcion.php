<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-10 col-md-7 col-lg-8 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Inscripcion clientes</h5>
                <form class="form-signin" action="" method="POST">
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
                  <div class="form-group row">                          
                    <label for="inputDniClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">DNI</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputDniClient" placeholder="DNI">
                    </div>
                  </div>
                  <div class="form-group row">                          
                    <label for="inputSurnaClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Apellido</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputSurnaClient" placeholder="Apellido">
                    </div>
                  </div>
                  <div class="form-group row">                          
                    <label for="inputNameClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nombre</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputNameClient" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputFNC" class="col-sm-4 col-md-4 col-lg-2 col-form-label">F. Nacimiento</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="date" class="form-control" id="inputFNC" value="2011-08-19">
                    </div>
                  </div>
                  <div class="form-group row">                          
                    <label for="inputAddrClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Direccion</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputAddrClient" placeholder="Direccion">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tipoTelefonoClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Tipo Telefono</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <select class="form-control" id="tipoTelefonoClient">
                        <option>1</option>
                        <option>2</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">                          
                    <label for="inputTelClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Telefono</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputTelClient" placeholder="Telefono">
                    </div>
                  </div>
                  <div class="form-group row">                          
                    <label for="inputIngClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Ingresos Totales</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputIngClient" placeholder="Ingresos Totales">
                    </div>
                  </div>
                  <div class="form-group row">                          
                    <label for="inputFamilyClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Cantidad Familiares</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputFamilyClient" placeholder="Cantidad Familliares">
                    </div>
                  </div>
                  <div class="form-group row">                          
                    <label for="inputRetenClient" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Ingresos Retenidos</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputRetenClient" placeholder="Ingresos Retenidos">
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
                  <div class="form-group row">                          
                    <label for="inputDniGarante" class="col-sm-4 col-md-4 col-lg-2 col-form-label">DNI</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputDniGarante" placeholder="DNI">
                    </div>
                  </div>
                  <div class="form-group row">                          
                    <label for="inputSurnaGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Apellido</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputSurnaGar" placeholder="Apellido">
                    </div>
                  </div>
                  <div class="form-group row">                          
                    <label for="inputNameGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Nombre</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputNameGar" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputFNG" class="col-sm-4 col-md-4 col-lg-2 col-form-label">F. Nacimiento</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="date" class="form-control" id="inputFNG" value="2011-08-19">
                    </div>
                  </div>
                  <div class="form-group row">                          
                    <label for="inputAddrGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Direccion</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputAddrGar" placeholder="Direccion">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tipoTelGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Tipo Telefono</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <select class="form-control" id="tipoTelGar">
                        <option>1</option>
                        <option>2</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">                          
                    <label for="inputTelGar" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Telefono</label>
                    <div class="col-sm-6 col-md-6 col-lg-9">
                      <input type="text" class="form-control" id="inputTelGar" placeholder="Telefono">
                    </div>
                  </div>
                  <hr class="my-4">
                  <div class="form-group row">
                    <label for="" class="col-sm-5 col-md-5 col-lg-10 col-form-label"></label>
                    <button class="btn btn-lg btn-primary text-uppercase" type="submit" id="btnInscribir">Inscripbir</button>
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

<script type="text/javascript">
    $(document).ready(function(){
    $('#SearchClient').click(function(){
      if($('#inputSClient').val()==""){
        alert("ingresar dni");
      }
    });

    $('#SearchGarante').click(function(){
      if($('#inputSGarante').val()==""){
        alert("ingresar dni");
      }
    });

    $('#btnInscribir').click(function(){

      if($('#inputDniClient').val()==""){
        alert("Ingresar el dni del cliente");
      }else if($('#inputSurnaClient').val()==""){
        alert("ingresar el apellido del cliente");
      }else if($('#inputNameClient').val()==""){
        alert("ingresar el nombre del cliente");
      }else if($('#inputAddrClient').val()==""){
        alert("ingresar la direccion del cliente");
      }
      
      // else if($('#inputTelClient').val()==""){
      //   alert("Debes ingresar numero de telefono del cliente");
      // }
      /*
      else if($('#inputDniGarante').val()==""){
        alert("ingresar el dni del garante");
      }else if($('#inputSurnaGar').val()==""){
        alert("ingresar el apellido del garante");
      }else if($('#inputNameGar').val()==""){
        alert("ingresar el nombre del garante");
      }else if($('#inputAddrGar').val()==""){
        alert("ingresar la direccion del garante");
      }else if($('#inputTelGar').val()==""){
        alert("Debes ingresar numero de telefono del garante");
      }
      */

      inscripcion = "dni_client=" + $('#inputDniClient').val() + "&surname_client=" +  $('#inputSurnaClient').val() +
                "&name_client=" + $('#inputNameClient').val() + "&birthday_client=" + $('#inputFNC').val() +
                "&address_client=" + $('#inputAddrClient').val();
              
              // + "&type_tel_client=" + $('#tipoTelefonoClient').val() +
              // "&tel_client" + $('#inputTelClient').val();
              //  + 
              //  "&dni_gar=" + $('#inputDniGarante').val() + "&surname_gar" + $('#inputSurnaGar').val() + 
              //  "&name_gar" + $('#inputNameGar').val() + "&birthday_gar" + $('#inputFNG').val() +
              //  "&address_gar" + $('#inputAddrGar').val() + "&type_tel_gar" + $('#tipoTelGar').val() +
              //  "&tel_gar=" + $('#inputTelGar').val();
                console.log("dni_client= " + $('#inputDniClient').val() + "&surname_client= " +  $('#inputSurnaClient').val() +
                "&name_client= " + $('#inputNameClient').val() + "&birthday_client= " + $('#inputFNC').val() +
                "&address_client= " + $('#inputAddrClient').val());
              $.ajax({
                type: "POST",
                url: "php/inscripcion.php",
                data: inscripcion,
                success: function(r){
                  if (r==1){
                    alert("Inscripcion realizada con exito");
                  }else{
                    alert("Fallo al agregar inscripcion");
                  }
                }
              })

    });
  });
</script>
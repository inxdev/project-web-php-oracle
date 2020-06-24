<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="Moura Elias" content="">

  <?php
  require_once "php/estilos.php";
  ?>
</head>

<body class="d-flex flex-column">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login Sistema Prestamos</h5>
            <div style="text-align : center;">
              <img class="img-fluid " src="assets/img/login2.png" alt="">
            </div>
            <!-- TODO: from -->
            <form class="form-signin" action="php/conexionPrincipal.php" method="POST">

              <div class="form-label-group">
                <!-- <label for="inputUser">Usuario</label> -->
                <input type="text" id="inputUser" name="user" class="form-control" placeholder="Usuario" required autofocus>
              </div>
              <div class="form-label-group">
                <!-- <label for="inputPassword">Password</label> -->
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
              </div>
              <hr class="my-4">
              <!-- <div class="custom-control custom-checkbox mb-3"> -->
              <!-- <input type="checkbox" class="custom-control-input" id="customCheck1"> -->
              <!-- <label class="custom-control-label" for="customCheck1">Remember password</label> -->
              <!-- </div> -->
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="entrarSistema">Sign in</button>
              <!-- <button class="btn btn-lg btn-danger btn-block text-uppercase" type="submit" id="entrarSistema">Sign in</button> -->
              <!-- /<a href="registrar"></a> -->
              <!-- <hr class="my-4"> -->
              <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button> -->
              <!-- <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <!-- <small>Copyright &copy; Your Website</small> -->
      <small>Universidad Gaston Dachary - Tecnologias de Base de datos</small>
    </div>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
<!-- No hace falta lo de abajo -->
<!-- 
<script type="text/javascript">
  $(document).ready(  function(){
    $('#entrarSistema').click(function(){
      if($('#inputUser').val()==""){
        alert("Ingresar Usuario");
      }else if($('#inputPassword').val()==""){
        alert("Ingresar Passwrod");
      }
    });
  });
</script> -->
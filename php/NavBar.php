<!-- NOTE Menu de navegacion superior de la pagina web -->
<nav class="navbar navbar-expand-lg sticky-top navbar navbar-dark bg-dark" id="mainNav">

  <!-- NOTE Nombre del sistema que aparece en el menu superior a la izquierda -->
  <a class="navbar-brand js-scroll-trigger mr-sm-5 mb-0 " href="#page-top">Sistema de prestamos</a>

  <!-- NOTE boton que aparecera para desplegar el menu cuando la pantalla se achique -->
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> Menu
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- NOTE Botones del menu superior -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav justify-content-center mr-auto">

      <!-- NOTE botton para ir a la pagina principal -->
      <li class="nav-item active">
        <a class="nav-link" href="3-paginaPrincipal.php"> Home <span class="sr-only">(current)</span></a>
      </li>

      <!-- NOTE boton que despliega el submenu de clientes -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="4-paginaInscripcion.php">Inscripcion</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Modificacion</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Agregar Garante</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Agregar Garante</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something</a>
        </div>
      </li>

      <!-- NOTE boton que despliega el submenu de Prestamos -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Prestamos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="5-paginaAltaPrestamo.php">Inscripcion</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Modificacion</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Prestamos con deudas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something</a>
        </div>
      </li>

      <!-- NOTE boton que despliega el submenu de Convenios -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Convenios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="7-paginaAltaConvenio.php">Inscripcion</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Modificacion</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something</a>
        </div>
      </li>

      <!-- NOTE  boton que despliega el submenu de Informes -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Informes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="9-pagListadoPersonas.php">Lista de personas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="10-pagListadoTitulares.php">Lista de Titulares</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Lista de garantes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Lista de prestamos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Lista de prestamos con deudas</a>
        </div>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Something</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something</a>
        </div>
      </li> -->

      <!-- NOTE seccion que muestra el usuario conectado -->
      <ul class="navbar-nav ml-lg-5 ml-sm-0 mr-auto">
        <li class="nav-item">
          <div class="text-light">
            <?php echo "<h3>Usuario: $_SESSION[usuarioSession]</h3>"; ?>
          </div>
        </li>
      </ul>
    </ul>

    <!-- NOTE codigo del boton de salida del sistema -->
    <div class="row justify-content-end">
      <form class="form-inline my-2 mr-3 my-lg-0">
        <a class="btn btn-danger" href="php/salir.php">Salir</a>
      </form>
    </div>
  </div>
</nav>
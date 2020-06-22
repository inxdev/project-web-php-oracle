<nav class="navbar navbar-expand-lg sticky-top navbar navbar-dark bg-dark" id="mainNav">
  <a class="navbar-brand js-scroll-trigger mr-sm-5 mb-0 " href="#page-top">Sistema prestamos</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> Menu
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav justify-content-center mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="3-paginaPrincipal.php"> Home <span class="sr-only">(current)</span></a>
      </li>
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Convenios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Inscripcion</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Modificacion</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Informes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Lista de clientes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Lista de titulares</a>
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

      <ul class="navbar-nav ml-lg-5 ml-sm-0 mr-auto">
        <li class="nav-item">
          <div class="text-light">
            <?php echo "<h3>Usuario: $_SESSION[usuarioSession]</h3>"; ?>
          </div>
        </li>
      </ul>
    </ul>
    <div class="row justify-content-end">
      <form class="form-inline my-2 mr-3 my-lg-0">
        <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
        <a class="btn btn-danger" href="php/salir.php">Salir</a>
      </form>
    </div>
  </div>
</nav>
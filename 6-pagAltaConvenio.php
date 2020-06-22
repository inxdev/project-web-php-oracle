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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Alta Convenio</title>
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
                            <h5 class="card-title text-center">Agregar convenio</h5>
                            <form class="form-signin" action="php/altaPrestamo.php" method="POST">
                                <div class="form-group row">
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
                                </div>
                                <hr class="my-3">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-md-7 col-lg-8 col-form-label">Datos cliente</label>
                                </div>
                                <hr class="my-3">
                                <!-- NOTE INPUT DNI TITULAR -->
                                <div class="form-group row">
                                    <label for="inputDniTitular" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Dni titular</label>
                                    <div class="col-sm-6 col-md-6 col-lg-9">
                                        <input type="text" class="form-control" name="dni" id="inputDniTitular" placeholder="DNI" required>
                                    </div>
                                </div>
                                <hr class="my-3">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-md-7 col-lg-8 col-form-label">Datos prestamo</label>
                                </div>
                                <!-- NOTE INPUT CAPITAL PRESTAMO-->
                                <div class="form-group row">
                                    <label for="inputCapital" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Capital</label>
                                    <div class="col-sm-6 col-md-6 col-lg-9">
                                        <input type="text" class="form-control" name="capital" id="inputCapital" placeholder="Capital" required>
                                    </div>
                                </div>
                                <!-- NOTE INPUT CANTIDAD DE CUOTAS PRESTAMO -->
                                <div class="form-group row">
                                    <label for="inputCantCuotas" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Cantidad cuotas</label>
                                    <div class="col-sm-6 col-md-6 col-lg-9">
                                        <input type="text" class="form-control" name="cantCuotas" id="inputCantCuotas" placeholder="Cantidad de cuotas" required>
                                    </div>
                                </div>
                                <!-- NOTE INPUT INTERES ANUAL PRESTAMO -->
                                <div class="form-group row">
                                    <label for="inputIntAnual" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Interes anual</label>
                                    <div class="col-sm-6 col-md-6 col-lg-9">
                                        <input type="text" class="form-control" name="intAnual" id="inputIntAnual" placeholder="5 - 10 - 100" required>
                                    </div>
                                </div>
                                <!-- NOTE INPUT VENCIMIENTO MENSUAL -->
                                <div class="form-group row">
                                    <label for="inputVentMen" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Vencimiento mensual</label>
                                    <div class="col-sm-6 col-md-6 col-lg-9">
                                        <input type="text" class="form-control" name="ventMen" id="inputVentMen" placeholder="Vencimiento mensual" required>
                                    </div>
                                </div>
                                <hr class="my-3">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-md-7 col-lg-8 col-form-label">Datos garante</label>
                                </div>
                                <hr class="my-3">
                                <!-- NOTE INPUT DNI GARANTE -->
                                <div class="form-group row">
                                    <label for="inputDniG" class="col-sm-4 col-md-4 col-lg-2 col-form-label">Dni garante</label>
                                    <div class="col-sm-6 col-md-6 col-lg-9">
                                        <input type="text" class="form-control" name="dnig" id="inputDniClientG" placeholder="DNI" required>
                                    </div>
                                </div>
                            </form>
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
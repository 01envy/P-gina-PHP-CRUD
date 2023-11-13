<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="cssfooter/all.min.css">
    <link rel="stylesheet" href="cssfooter/fontawesome.min.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estilo.scss">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

  <div class="navegacion">
    <nav>
        <img src="logo2.png" width=200px height=auto>
        <ul>
            
        </ul>
    </nav>
  </div>
    

  <div class="registrarse">
    <div class="container d-flex">
      <form action="insertar2.php" method="POST">
          <h2 id="exo2">Registro de Cuenta</h2>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Usuario</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Usuario" name="usuario" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña" name="contrasena" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword">Correo</label>
            <input type="email" class="form-control" id="inputAddress" placeholder="ejemplo@gmail.com" name="correo" required>
          </div>
          <div>
            <label>Sexo: </label>
            <input type="radio"
                name="sexo" required
                value="Male"
                checked>
            <label>Hombre</label>

            <input type="radio"
                name="sexo" required
                value="Female">
            <label>Mujer</label>
            <input type="radio"
                name="sexo"
                value="otro">
            <label>Otro</label>
          </div>
          <div class="form-group">
            <label for="inputPassword2">N° de teléfono</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="N° de teléfono" name="fechanac" required>
          </div>
          <div class="form-group">
            <label for="inputPassword2">Edad</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Edad" name="edad" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Acepto recibir noticias.
              </label>
            </div>
          </div>
          <?php


            if (isset($_GET['error'])) {
                  $error_message = $_GET['error'];
                  echo "<div class='error'>$error_message</div>";
              }

            if (isset($_GET['success'])) {
                  $success_message = $_GET['success'];
                  echo "<div class='success'>$success_message</div>";
              }

                        
          ?>
          
          <button type="submit" class="btn btn-primary" name="submit">Enviar</button>

          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ¿Ya tienes cuenta?
        </button>
          




          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content bg-dark">
                <div class="modal-header">
                  <h2 class="modal-title fs-5" id="exampleModalLabel">Registro</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="d-block">
                            <div class="col-4 col-md-6 offset-md-3">
                                <form>
                                    <h2 id="exo2">Inicio de sesión</h2>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Correo electrónico</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      <small id="emailHelp" class="form-text text-muted">No compatiremos su información con nadie.</small>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Contraseña</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Guardar datos</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <a href="registro.html" id="exo2"><i>No tienes cuenta?</i></a>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Guardar</button>
                </div>
              </div>
            </div>
          </div>
        </form>
    </div>
  </div>
  
  

  
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>


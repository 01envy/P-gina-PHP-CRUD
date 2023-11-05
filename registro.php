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
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

  <div class="navegacion">
    <nav>
        <img src="logo2.png" width=200px height=auto>
        <ul>
            <div class="botonesnav">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="Nosotros.html">Nosotros</a></li>
                <li><a href="index.html">Historia</a></li>
                <li><a href="index.html">Noticias</a></li>
                <li>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Login
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
                </li>
            </div>
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
            <label>Masculino</label>

            <input type="radio"
                name="sexo" required
                value="Female">
            <label>Femenino</label>
          </div>
          <div class="form-group">
            <label for="inputPassword2">Fecha de nacimiento</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Fecha de nacimiento" name="fechanac" required>
          </div>
          <div class="form-group">
            <label for="inputPassword2">Edad</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Edad" name="edad" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Guardar datos
              </label>
            </div>
          </div>
          
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
  
  

  
  <footer class="footer">
    <div class="container">
        <div class="footerfila">
            <div>
                <ul>
                    <li>
                        <img class="imagenfooter" src="img/nerv.png">
                    </li>
                </ul>
            </div>
            <div class="links">
                <h4>Política</h4>
                <ul>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Acuerdos</a></li>
                    <li><a href="#">Privacidad</a></li>
                </ul>
            </div>

            <div class="links">
                <h4>Ayuda</h4>
                <ul>
                    <li><a href="#">Preguntas</a></li>
                    <li><a href="#">Soporte</a></li>
                    <li><a href="#">Errores</a></li>
                </ul>
            </div>

            <div class="links">
                <h4>Reglas</h4>
                <ul>
                    <li><a href="#">Saber mas</a></li>
                    <li><a href="#">Archivos</a></li>
                    <li><a href="#">Manuales</a></li>
                </ul>
            </div>

            <div class="links">
                <h4>Síguenos</h4>
                <div class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-tumblr"></i></a>
                </div>
            </div>

        </div>
    </div>
  </footer>
    
  
  <div class="copyright">
    <img src="copyright.png" alt="copyright" width="20px">
    <h2>Copyright 2023 Fernando Véliz Silva</h2>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>

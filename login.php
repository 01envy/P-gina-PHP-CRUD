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
    <title>LOGIN</title>
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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="Nosotros.html">Nosotros</a></li>
                <li><a href="index.php">Historia</a></li>
                <li><a href="index.php">Noticias</a></li>
                <li>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Login
                    </button>
                      
                    
                      
                </li>
            </div>
        </ul>
    </nav>
  </div>
    

  <div class="registrarse">
    <div class="container d-flex">

        <form action="" method="POST">
            <h2 id="exo2">*Registro de Cuenta</h2>
            <?php
            include "validacion.php";
            ?>
            
            
            <div class="form-row">
                <div class="form-group">
                    <label for="inputEmail4">Usuario</label>
                    <input type="text" class="form-control" id="input" placeholder="Usuario" name="usuario" >
                </div>
                
                </div>
                <div class="form-group">
                    <label for="inputPassword">Contraseña</label>
                    <input type="password" class="form-control" id="input" placeholder="Mínimo de 5 carácteres" name="contrasena" >
                </div>
                <input type="submit" class="btn btn-primary" name="btningresar" value="iniciar sesion">

                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    ¿Ya tienes cuenta?
                </button>
                
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
          
            
        </form>
       
    </div>
  </div>
  

    
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>
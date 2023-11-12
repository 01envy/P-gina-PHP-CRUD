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
        
    </nav>
  </div>
    

   

    <div class="registrarse">
        <div class="container d-flex">

            <form action="" method="POST">
                <h2 id="exo2">Iniciar sesión</h2>
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
                        <a href= "registro.php">¿No tienes cuenta?</a>
                    </button>

                    <div class="my-3">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Recuperar contraseña
                        </button>

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
            
                
            </form>
        
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modifique sus datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container mt-3 mb-3">
                        <form action="update.php" method="POST">
                                                            
                                <input type="hidden" name="codusuario" value="<?php echo $row['codusuario']  ?>">
                                                                        
                                
                                <input type="text" class="form-control mb-3" name="contrasena" placeholder="contrasena" value="<?php echo $row['contrasena']  ?>">
                                <input type="text" class="form-control mb-3" name="contrasena" placeholder="Confirme su contraseña" value="<?php echo $row['contrasena']  ?>">
                                
                                                                        
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                            </div>
                        </form>                   
                    </div>                                                  
                </div>
                                                    
            </div>
        </div>
    </div>
  

    
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
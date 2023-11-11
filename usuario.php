<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title> PAGINA BASE DE DATOS</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="estilo.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>




    <script>
        function confirmacion(){
            var respuesta = confirm("Desea realmente borrar el registro?");
            if (respuesta == true){
                return true;
            } else {
                return false;
            }
        }
    </script>

<body>
    


    <div class="titulodb">
        <div class= "container" style="max-width: 50%;">
            <div class="text-center mt-5 mb-4">
                <h2> BUSQUEDA</h2>
            </div>

            <div class="barrabusqueda">
                <input type="text" class= "form-control" id="getName" autocomplete="off" placeholder="Buscar...">
            </div>
        </div>

    </div>

    
    
    
    <div class="recuadro">
        <div class="container d-flex bg-dark text-light p-4">
            
            <div class="col-md-3 p-4">
                <h2>Ingrese datos</h2>
                    <form action="insertar.php" method="POST">

                        <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php if(isset($usuario)) echo $usuario ?>">
                        <input type="text" class="form-control mb-3" name="contrasena" placeholder="contrasena" value="<?php if(isset($contrasena)) echo $contrasena ?>">
                        <input type="text" class="form-control mb-3" name="correo" placeholder="correo" value="<?php if(isset($correo)) echo $correo ?>" >
                        <div>
                        <label>Sexo: </label>
                        <input type="radio"
                            name="sexo"
                            value="Masculino"
                            checked>
                        <label>Hombre</label>

                        <input type="radio"
                            name="sexo"
                            value="Femenino">
                        <label>Mujer</label>
                        <input type="radio"
                            name="sexo"
                            value="otro">
                        <label>Otro</label>
                        </div><br />
                        <input type="text" class="form-control mb-3" name="fechanac" placeholder="N° de teléfono" value="<?php if(isset($fechanac)) echo $fechanac ?>">
                        <input type="text" class="form-control mb-3" name="edad" placeholder="edad" value="<?php if(isset($edad)) echo $edad ?>">
                                    
                        <input type="submit" name="submit" class="btn btn-primary">
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
            

            <div class="container text-light p-3">           
                <table class="table table-striped text-light">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Correo</th>
                        <th>Sexo</th>
                        <th>N° de teléfono</th>
                        <th>Edad</th>
                    </tr>
                    </thead>
                    <tbody id="showdata">
                    <?php  
                            $sql = "SELECT * FROM usuarios";
                            $query = mysqli_query($con,$sql);
                            while($row = mysqli_fetch_assoc($query))
                            {
                                $codusuario = $row['codusuario'];
                                $usuario = $row['usuario'];
                                $contrasena = $row['contrasena'];
                                $correo = $row['correo'];
                                $sexo = $row['sexo'];
                                $fechanac = $row['fechanac'];
                                $edad = $row['edad'];
    
                                ?>
    
                                <tr class= "text-light">
                                    <td><?php echo $codusuario;?></td>
                                    <td><?php echo $usuario;?></td>
                                    <td><?php echo $contrasena;?></td>
                                    <td><?php echo $correo;?></td>
                                    <td><?php echo $sexo;?></td>
                                    <td><?php echo $fechanac;?></td>
                                    <td><?php echo $edad;?></td>
    
                                    <td><!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            Modificar
                                        </button>

                                        <!-- Modal -->
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
                                                                        
                                                                        <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php echo $row['usuario']  ?>">
                                                                        <input type="text" class="form-control mb-3" name="contrasena" placeholder="contrasena" value="<?php echo $row['contrasena']  ?>">
                                                                        <input type="text" class="form-control mb-3" name="correo" placeholder="correo" value="<?php echo $row['correo']  ?>">
                                                                        <input type="text" class="form-control mb-3" name="sexo" placeholder="sexo" value="<?php echo $row['sexo']  ?>">
                                                                        <input type="text" class="form-control mb-3" name="fechanac" placeholder="fechanac" value="<?php echo $row['fechanac']  ?>">
                                                                        <input type="text" class="form-control mb-3" name="edad" placeholder="edad" value="<?php echo $row['edad']  ?>">
                                                                        
                                                                    <div class="modal-footer">
                                                                        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                                                                    </div>
                                                            </form>                   
                                                        </div>                                                  
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div></td>
                                    <td><a href="delete.php?id=<?php echo $row['codusuario'] ?>" class="btn btn-danger" onclick='return confirmacion()'>Eliminar</a></td>
    
                                </tr>
    
                                <?php
                            }
                            
                        ?>
                    </tbody>
                </table>
            </div>                

        </div>
            
        
    
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $('#getName').on("keyup", function(){
            var getName = $(this).val();
            $.ajax({
            method:'POST',
            url:'livesearch.php',
            data:{input:getName},
            success:function(response)
            {
                    $("#showdata").html(response);
            } 
            });
        });
        });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);

    

    if (isset($_GET['errors'])) {
        $error_messages = explode(",", $_GET['errors']);
        echo "<script>alert('Error: " . implode("\\n", $error_messages) . "');</script>";
    }
    
    if (isset($_GET['success'])) {
        $success_message = $_GET['success'];
        echo "<script>alert('Éxito: $success_message');</script>";
    }
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
        <div class="container d-flex bg-dark text-light">
            
            <div class="col-md-3">
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
                        <label>Masculino</label>

                        <input type="radio"
                            name="sexo"
                            value="Femenino">
                        <label>Femenino</label>
                        </div><br />
                        <input type="text" class="form-control mb-3" name="fechanac" placeholder="fecha de nacimiento" value="<?php if(isset($fechanac)) echo $fechanac ?>">
                        <input type="text" class="form-control mb-3" name="edad" placeholder="edad" value="<?php if(isset($edad)) echo $edad ?>">
                                    
                        <input type="submit" name="submit" class="btn btn-primary">
                        
                        
                    </form>
            </div>
            

            <div class="container text-light">           
                <table class="table table-striped text-light">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Correo</th>
                        <th>Sexo</th>
                        <th>F.de nacimiento</th>
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
    
                                    <td><a href="actualizar.php?id=<?php echo $row['codusuario'] ?>" class="btn btn-info">Editar</a></td>
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
</body>
</html>
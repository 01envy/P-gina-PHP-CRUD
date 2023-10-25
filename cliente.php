<?php

include("conexion.php");
$con=conectar();

$sql = "SELECT * from cliente";
$query = mysqli_query($con,$sql);

$row = mysqli_fetch_array($query);

?>

<html lang="en">
    <head>
        <title> PAGINA cliente</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos">
                                    <input type="text" class="form-control mb-3" name="rut" placeholder="rut">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion">
                                    <input type="text" class="form-control mb-3" name="sexo" placeholder="sexo">
                                    <input type="text" class="form-control mb-3" name="fechanac" placeholder="fechanac">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="edad">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>nombre</th>
                                        <th>apellido</th>
                                        <th>rut</th>
                                        <th>direccion</th>
                                        <th>sexo</th>
                                        <th>fechanac</th>
                                        <th>edad</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['rut']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['sexo']?></th>
                                                <th><?php  echo $row['fechanac']?></th>
                                                <th><?php  echo $row['edad']?></th>      
                                                <th><a href="actualizar.php?rut=<?php echo $row['rut'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?rut=<?php echo $row['rut'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
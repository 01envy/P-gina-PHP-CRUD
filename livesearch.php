<?php

include("conexion.php");
    $con=conectar();

if(isset($_POST['input'])){

    $input= $_POST['input'];

    $query = "SELECT * FROM usuarios WHERE usuario LIKE '{$input}%' OR contrasena LIKE '{$input}%' OR correo LIKE '{$input}%' OR sexo LIKE '{$input}%' OR fechanac LIKE '{$input}%' OR edad LIKE '{$input}%'";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) > 0){?>

        <div class = "container bg-dark text-white">

                <table class="table table-bordered table-striped mt-4" >
                    <thead class= "text-light">
                        <tr>
                            <th>Codigo</th>
                            <th>usuario</th>
                            <th>contraseña</th>
                            <th>correo</th>
                            <th>sexo</th>
                            <th>fechanac</th>
                            <th>edad</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class= "text-light">
                        <?php
                        while($row = mysqli_fetch_assoc($result)){

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

        <?php
    }else{

        echo "Sin resultados :(";
    }
}

?>




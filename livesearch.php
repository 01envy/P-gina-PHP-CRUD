<?php

include("conexion.php");
    $con=conectar();

    $input= $_POST['input'];

    $sql = "SELECT * FROM usuarios WHERE usuario LIKE '{$input}%' OR contrasena LIKE '{$input}%' OR correo LIKE '{$input}%' OR sexo LIKE '{$input}%' OR fechanac LIKE '{$input}%' OR edad LIKE '{$input}%' OR codusuario LIKE '{$input}%'"; 
    $query = mysqli_query($con,$sql);
    $data='';
    
    while($row = mysqli_fetch_assoc($query))
    {
        $data .=  
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
     echo $data;

     

?>




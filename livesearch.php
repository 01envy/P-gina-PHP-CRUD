<?php

include("conexion.php");
    $con=conectar();

    $input= $_POST['input'];

    $sql = "SELECT * FROM usuarios WHERE usuario LIKE '{$input}%' OR contrasena LIKE '{$input}%' OR correo LIKE '{$input}%' OR sexo LIKE '{$input}%' OR fechanac LIKE '{$input}%' OR edad LIKE '{$input}%'"; 
    $query = mysqli_query($con,$sql);
    $data='';
    while($row = mysqli_fetch_assoc($query))
    {
        $data .=  "<tr><td>".$row['codusuario']."</td><td>".$row['usuario']."</td><td>".$row['contrasena']."</td></tr>";
    }
     echo $data;

?>




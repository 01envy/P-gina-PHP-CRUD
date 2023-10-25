<?php

include("conexion.php");
$con=conectar();

$rut=$_GET['rut'];

$sql="DELETE FROM cliente  WHERE rut='$rut'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
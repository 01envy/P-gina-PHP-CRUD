<?php

include("conexion.php");
$con=conectar();

$codusuario=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE codusuario='$codusuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>
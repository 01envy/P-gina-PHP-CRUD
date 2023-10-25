<?php

include("conexion.php");
$con=conectar();

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$rut=$_POST['rut'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$fechanac=$_POST['fechanac'];
$edad=$_POST['edad'];

$sql="UPDATE cliente SET  nombres='$nombres',apellidos='$apellidos',rut='$rut',direccion='$direccion',sexo='$sexo',fechanac='$fechanac',edad='$edad'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
<?php
include("conexion.php");
$con=conectar();

$codusuario= null;
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$correo=$_POST['correo'];
$sexo=$_POST['sexo'];
$fechanac=$_POST['fechanac'];
$edad=$_POST['edad'];

$sql="INSERT INTO usuarios VALUES('$codusuario','$usuario','$contrasena','$correo','$sexo','$fechanac','$edad')";


$query= mysqli_query($con,$sql);

if($query){
    Header("Location: registro.php");
    
}else {
}


?>
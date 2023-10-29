<?php

include("conexion.php");
$con=conectar();

$codusuario=$_POST['codusuario'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$correo=$_POST['correo'];
$sexo=$_POST['sexo'];
$fechanac=$_POST['fechanac'];
$edad=$_POST['edad'];

$sql="UPDATE usuarios SET  usuario='$usuario',contrasena='$contrasena',correo='$correo',sexo='$sexo',fechanac='$fechanac',edad='$edad' WHERE codusuario='$codusuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>
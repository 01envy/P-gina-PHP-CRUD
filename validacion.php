
<?php

if(!empty($_POST["btningresar"])){
    if(!empty($_POST["usuario"]) and !empty($_POST["contrasena"])){
        $usuario=$_POST["usuario"];
        $contrasena=$_POST["contrasena"];
        $sql = $con->query("SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena' ");
        if($datos=$sql->fetch_object()){
            header("location: index.php");
        }
    } else {
        echo "Rellene todos los datos.";
    }
}

?>
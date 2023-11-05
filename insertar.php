<?php
include("conexion.php");
$con = conectar();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];

// Validación de datos
$errors = array();

if (empty($usuario) || empty($contrasena) || empty($correo) || empty($edad)) {
    $errors[] = "Todos los campos son obligatorios.";
}

if (strlen($contrasena) < 5) {
    $errors[] = "La contraseña debe tener al menos 5 caracteres.";
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "El correo electrónico no es válido.";
}

if (!ctype_digit($edad)) {
    $errors[] = "La edad debe contener solo números.";
}

if (count($errors) > 0) {
    // Si hay errores, redirige a usuario.php con mensajes de error en la URL
    header("Location: usuario.php?errors=" . implode(",", $errors));
    exit;
}

// Ahora puedes proceder a la inserción en la base de datos
$codusuario = null;
$sexo = $_POST['sexo'];
$fechanac = $_POST['fechanac'];

$sql = "INSERT INTO usuarios VALUES ('$codusuario', '$usuario', '$contrasena', '$correo', '$sexo', '$fechanac', '$edad')";

$query = mysqli_query($con, $sql);

if ($query) {
    // Redirige a usuario.php con un mensaje de éxito
    header("Refresh: 0;url: usuario.php?success=registro_exitoso");
    echo "<script>alert('Exito');</script>";
} else {
    // Redirige a usuario.php con un mensaje de error de la base de datos
    header("Refresh: 0;url: usuario.php?error=base_de_datos");
    echo "<script>alert('error');</script>";
}
?>

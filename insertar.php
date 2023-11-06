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
    $errors[] = "Todos los campos son obligatorios.<br>";
}

if (strlen($contrasena) < 5) {
    $errors[] = "La contraseña debe tener al menos 5 caracteres.<br>";
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "El correo electrónico no es válido.<br>";
}

if (!ctype_digit($edad)) {
    $errors[] = "La edad debe contener solo números.<br>";
}

if (count($errors) > 0) {
    // Si hay errores, redirige a usuario.php con un mensaje de error
    header("Location: usuario.php?error=" . urlencode(implode(", ", $errors)));
    exit;
}

// Ahora puedes proceder a la inserción en la base de datos
$codusuario = null;
$sexo = $_POST['sexo'];
$fechanac = $_POST['fechanac'];

$sql = "INSERT INTO usuarios VALUES ('$codusuario', '$usuario', '$contrasena', '$correo', '$sexo', '$fechanac', '$edad')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: usuario.php?success=Te has registrado con éxito!");
} else {
    header("Location: usuario.php?error=base_de_datos");
}
?>

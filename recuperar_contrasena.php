<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión
    include 'conexion.php';

    // Conectar a la base de datos
    $con = conectar();

    // Obtener el correo electrónico y dirección del formulario
    $correo = filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL);
    $usuario = $_POST['usuario'];

    // Consultar la base de datos para verificar si el correo y la dirección están presentes
    $query = "SELECT contrasena FROM usuarios WHERE correo = '$correo' AND usuario = '$usuario'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            // Si el correo y la dirección están en la base de datos, redirigir a la página de restablecimiento
            header("Location: recuperar.php?reset=1&correo=" . urlencode($correo) . "&usuario=" . urlencode($usuario));
            exit();
        } else {
            // Si el correo o la dirección no están en la base de datos, redirigir con un mensaje de error
            header("Location: recuperar.php?error=1");
            exit();
        }
    } else {
        // Manejar cualquier error en la consulta
        echo 'Error: ' . mysqli_error($con);
        exit();
    }
}

?>



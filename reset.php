<?php
// Verificar si el formulario se envió por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión
    include 'conexion.php';

    // Conectar a la base de datos
    $con = conectar();

    // Obtener los datos del formulario
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $nueva_contrasena = $_POST['nueva_contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];

    // Validar que las contraseñas coincidan
    if ($nueva_contrasena !== $confirmar_contrasena) {
        echo 'Las contraseñas no coinciden.';
        exit();
    }

    // Actualizar la contraseña en la base de datos
    $query = "UPDATE usuarios SET contrasena = '$nueva_contrasena' WHERE correo = '$correo' AND usuario = '$usuario'";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Contraseña actualizada exitosamente
        echo 'Contraseña actualizada exitosamente. <a href="index.php">Inicio</a>';
        error_log("Query: " . $query);
    } else {
        // Manejar errores en la actualización de la contraseña
        echo 'Error al actualizar la contraseña: ' . mysqli_error($con);
    }

    // Cerrar la conexión
    mysqli_close($con);
} else {
    // Si no se envió por POST, mostrar el formulario de recuperación
    ?>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recuperar Contraseña</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body style="background-color:#2B3035">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Recuperar Contraseña</div>
                        <div class="card-body">
                            <?php
                                if (isset($_GET['error'])) {
                                    echo '<div class="alert alert-danger" role="alert">Correo electrónico o usuario no encontrados.</div>';
                                } elseif (isset($_GET['contrasena'])) {
                                    echo '<div class="alert alert-success" role="alert">';
                                    echo 'Tu contraseña es: ' . htmlspecialchars($_GET['contrasena']);
                                    echo '</div>';
                                }
                            ?>
                            <form action="reset.php" method="POST">
                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo electrónico:</label>
                                    <input type="correo" class="form-control" name="correo" required>
                                </div>
                                <div class="mb-3">
                                    <label for="usuario" class="form-label">Usuario:</label>
                                    <input type="text" class="form-control" name="usuario" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nueva_contrasena" class="form-label">Nueva Contraseña:</label>
                                    <input type="password" class="form-control" name="nueva_contrasena" required>
                                </div>
                                <div class="mb-3">
                                    <label for="confirmar_contrasena" class="form-label">Confirmar Contraseña:</label>
                                    <input type="password" class="form-control" name="confirmar_contrasena" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Recuperar Contraseña</button>
                                <a type="button" href="index.php">Inicio</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
    </html>

    <?php
}

?>
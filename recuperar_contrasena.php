<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'conexion.php';

    
    $con = conectar();

    
    $correo = filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL);
    $usuario = $_POST['usuario'];

    
    $query = "SELECT contrasena FROM usuarios WHERE correo = '$correo' AND usuario = '$usuario'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            
            header("Location: recuperar.php?reset=1&correo=" . urlencode($correo) . "&usuario=" . urlencode($usuario));
            exit();
        } else {
            
            header("Location: recuperar.php?error=1");
            exit();
        }
    } else {
        
        echo 'Error: ' . mysqli_error($con);
        exit();
    }
}

?>



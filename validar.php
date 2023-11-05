<?php


if(isset($_POST['submit'])) {
    

    $errors = array();

    if (empty($usuario)) {
        $errors[] = "* Agrega tu usuario";
        echo "<p class='error'>*Agrega tu usuario</p>";
    } else{
        if(strlen($usuario) > 15) {
            echo "<p class='error'>*usuario muy largo</p>";
        }
    }
        

    if (empty($edad)) {
        $errors[] = "* Agrega tu edad";
        echo "<p class='error'>*usuario muy largo</p>";
    } else{
        if(!is_numeric($edad)) {
            $errors[] = "* La edad debe ser un número";
            echo "<p class='error'>*edad debe ser un numero</p>";
        }
    } 


    if (empty($correo)) {
        $errors[] = "* Agrega tu correo";
        echo "<p class='error'>*agrega un correo</p>";
    } else{
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "* El correo es incorrecto";
            echo "<p class='error'>*correo incorrecto</p>";
        }
    }
    

    if (empty($errors)) {
        // No hay errores de validación, por lo que puedes redirigir a 'insertar.php' para insertar los datos.
        if($query){
            Header("Location: insertar.php");
            
        }else {
        }
        echo "Datos insertados en la base de datos exitosamente.";
    } else {
        // Muestra los errores de validación al usuario.
        foreach ($errors as $error) {
            echo "<p class='error'>" . $error . "</p>";
        }
    }
}
?>
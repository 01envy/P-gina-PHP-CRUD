<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="fernando2001";

    $bd="testdb";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
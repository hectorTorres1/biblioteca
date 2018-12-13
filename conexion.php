<?php
    $servername ="127.0.0.1";
    $username = "root";
    $password = "";
    $database = "biblioteca";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Conexion Fallida: ". mysqli_connect_error());
    }else{
      
    }
?>
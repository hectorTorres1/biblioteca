<?php

    $nom=$_POST['nom'];
    $ape=$_POST['ap'];
    $car=$_POST['car'];
    $mat=$_POST['mat'];
    $dir=$_POST['dir'];
    $cor=$_POST['cor'];
    $tit=$_POST['tit'];
    $aut=$_POST['aut'];
    $cla=$_POST['cla'];
    $edi=$_POST['edi'];
    $fp='2018-05-21';
    $fe='2018-05-21';

    require('conexion.php');

    $sql="INSERT INTO prestamos (id_prestamo,nombre,apellidos,carrera,matricula,direccion,correo,titulo,autor,clasificacion,
    editorial,fechaPrestamo,fechaEntrega,estatus)
    VALUES (0,'$nom','$ape','$car','$mat','$dir','$cor','$tit','$aut','$cla','$edi','$fp','$fe',1)";

    if(mysqli_query($conn,$sql)){  
        echo "Registro Guardado";
    }else{
        echo "No se pudo guardar";
    }
    mysqli_close($conn);
    header('location:');
?>
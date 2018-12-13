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

    require 'PHPMailer/PHPMailerAutoload.php' ;
    $email = new PHPMailer();
	$email->isSMTP();
	$email->SMTPAuth = true;
	$email->SMTPSecure = 'tls';
	$email->Host = 'smtp.gmail.com';
	$email->Port = 587;
	
	$email->Username = 'caosvirtual0@gmail.com'; //Correo de donde enviaremos los correos
	$email->Password = 'caosvirtual12'; // Password de la cuenta de envío
	
	$email->setFrom('caosvirtual0@gmail.com', 'soy la vergaaaaaaaaaaa');
	$email->addAddress('$cor', 'probando que soy la mera crema'); //Correo receptor
	
	
	$email->Subject = 'holi';
	$email->Body    = 'segimos probando ppcdsalvc 1,2,3';
	
	if($email->send()) {
		echo 'Correo Enviado';
		} else {
		echo 'many maaaa';
	}

    mysqli_close($conn);
    header('location:libros.php');
?>
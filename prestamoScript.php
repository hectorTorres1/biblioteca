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
        echo "Registro Guardado ";
    }else{
        echo "No se pudo guardar";
    }
    require 'PHPMailer/PHPMailerAutoload.php' ;
    $mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	
	$mail->Username = 'caosvirtual0@gmail.com'; //Correo de donde enviaremos los correos
	$mail->Password = 'caosvirtual12'; // Password de la cuenta de envío
	
	$mail->setFrom('caosvirtual0@gmail.com', 'Universidad Tecnologica del Estado de Zacatecas');
	$mail->addAddress($cor, $nom); //Correo receptor
	echo $cor;
	
	$mail->Subject = 'Biblioteca';
    $mail->Body    = 'Estimado usuario se te informa que haz adquirido un libro. No olvides que al cumplirse los 7 dias del prestamo 
     tendras que regresar el material prestado. A)	De acuerdo al procedimiento P-BIB-01, hace mención en la política 9,  el material debe ser devuelto en optimas condiciones o de lo contrario se realizara el trámite para su reposición.';
	
	if($mail->send()) {
		echo ' Correo Enviado';
		} else {
		echo 'Error';
	}

    mysqli_close($conn);
    header('location:');
?>
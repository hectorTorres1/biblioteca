<?php
	require 'PHPMailer/PHPMailerAutoload.php' ;
	
	$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	
	$mail->Username = 'caosvirtual0@gmail.com'; //Correo de donde enviaremos los correos
	$mail->Password = 'caosvirtual12'; // Password de la cuenta de envío
	
	$mail->setFrom('caosvirtual0@gmail.com', 'soy la verga');
	$mail->addAddress('fobia50@gmail.com', 'probando que soy la mera crema'); //Correo receptor
	
	
	$mail->Subject = 'holi ';
	$mail->Body    = 'segimos probando ppcdsalvc 1,2,3';
	
	if($mail->send()) {
		echo 'Correo Enviado';
		} else {
		echo 'Error al enviar correo';
	}
?>		
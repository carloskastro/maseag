<?php
if (isset($_REQUEST['enviar'])) {
	$name="";
	$email="";
	$subject="";
	$message="";
	$recipient="cacastro970@misena.edu.co"; //Correo donde llegarán los mensajes

	if (isset($_POST['email'])) {
		$email=$_POST['email'];
	}
	if (isset($_POST['nombres'])) {
		$name=$_POST['nombres'];
	}
	if (isset($_POST['asunto'])) {
		$subject=$_POST['asunto'];
	}
	if (isset($_POST['comentario'])) {
		$message=$_POST['comentario'];
	}

	//Función que envía un mensaje por medio del servicio sendmail

	if (mail($recipient, $subject, $message)) {
		echo "El mensaje se envío";
	}else{
		echo "El mensaje no se envío";
	}
}
?>
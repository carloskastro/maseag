<?php
$servername = 'localhost'; //el nombre del servidor
$username = 'root'; // nombre de usuario de phpmyadmin
$password = ''; // contraseña de usuario de phpmyadmin
$dbname = 'mase'; // base de datos en phpmyadmin

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "<button type='button' class='btn btn-success'></button>";
} catch (Exception $e) {
	echo "<button type='button' class='btn btn-danger'></button> ".$e->getMessage();	
}

?>
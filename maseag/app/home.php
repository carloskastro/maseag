<!DOCTYPE html>
<html lang="es-CO">
<head>
	<meta charset="utf-8">
	<!--Etiqueta para configuración del Responsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>&copy; Mase</title>
	<link rel="icon" type="image/x-icon" href="../assets/img/logosena.png">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
</head>
<body>
	<?php
	require_once 'conn.php';
	session_start();

	if (isset($_SESSION['aprendiz'])) {
		$search=$conn->prepare('SELECT * FROM aprendiz WHERE idaprendiz=?');
		$search->bindParam(1,$_SESSION['aprendiz']);
		$search->execute();

		$data=$search->fetch(PDO::FETCH_ASSOC);

		if (count($data)>0) {
			$user=$data;
		}

		if (!empty($user)) {
	?>
	<!--Código html-->
	<h4>Bienvenido <?php echo $user['nombre']; ?></h4>
	<a href="logout.php">Cerrar Sesión</a>



	<!--Código html-->
	<?php		
		}
	}else{
		header('location: ./');
	}
	?>
</body>
</html>
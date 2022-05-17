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
<body class="bg-login">
	<?php 
	require_once 'conn.php';
	session_start();

	if (isset($_POST['sesion'])) {
		
		$result=$conn->prepare('SELECT * FROM aprendiz WHERE user=:user');
		$result->bindparam(':user',$_POST['user']);
		$result->execute();
		$data=$result->fetch(PDO::FETCH_ASSOC);

		if ($data['user']==$_POST['user'] && $_POST['pass']==$data['pass']) {
			$_SESSION['aprendiz'] = $data['idaprendiz'];
			header('location: home.php');
		}else{
			echo "Revise los datos";
		}
	}

	?>
	<div class="container login">
		<div class="card" style="border-radius: 2.25rem;background-color: #ffffffdb;">
			<div class="card-header text-center pt-2 pb-2">
				<div class="clearfix pt-3">
					<span class="float-start">
						<h4>Inicio de Sesión</h4>
					</span>
					<span class="float-end">
						<a href="../"><i class="fa fa-xmark fa-2x text-danger"></i></a>
					</span>
				</div>
			</div>
			<div class="card-body">
				<form action="" class="was-validated" method="post">
					<div class="mb-3 mt-3">
						<label for="uname" class="form-label">Usuario:</label>
						<input type="text" class="form-control" id="uname" placeholder="Ingrese su usuario" name="user" required>
						<div class="valid-feedback">Validado.</div>
						<div class="invalid-feedback">Campo vacio</div>
					</div>
					<div class="mb-3 mt-3">
						<label for="pwd" class="form-label">Contraseña:</label>
						<input type="password" class="form-control" id="pwd" placeholder="Ingrese su Contraseña" name="pass" required>
						<div class="valid-feedback">Validado.</div>
						<div class="invalid-feedback">Campo vacio</div>
					</div>
					<div class="clearfix pt-3 pb-3">
						<span class="float-start">
							<button type="submit" class="btn btn-success" name="sesion">Ingresar</button>
						</span>
						<span class="float-end">
							<a href="registro.php" class="btn btn-link">Regístrate</a>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
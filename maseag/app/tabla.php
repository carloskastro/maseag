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

	<!--Datatables Styles-->
	<link rel="stylesheet" type="text/css" href="../assets/datatables/css/dataTables.bootstrap5.min.css">

	<!--Datatables Responsive-->
	<link rel="stylesheet" type="text/css" href="../assets/datatables/css/responsive.dataTables.min.css">

	<!--Datatables Scripts-->
	<script type="text/javascript" src="../assets/datatables/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../assets/datatables/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../assets/datatables/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="../assets/datatables/js/dataTables.bootstrap5.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#table').DataTable({
				responsive: true,
				language: {url:'../assets/datatables/es-ES.json', },
			});
		});
	</script>
	


</head>
<body class="bg-light d-flex flex-column h-100">

		<!--Navbar-->
		<header>
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
				<div class="container-fluid">
					<a class="navbar-brand" href="#"><img src="../assets/img/logosena.png" style="width: 40px;"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="collapsibleNavbar">

						<ul class="nav navbar-nav me-auto" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" href="#home">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#ficha">Ficha</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#compromiso">Compromiso</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#tratamiento">Tratamiento</a>
							</li>
						</ul>

						<kbd class="bg-warning">Hola <?php echo $user['nombre']; ?></kbd>
						<div class="navbar-brand dropdown">
							<button type="button" class="navbar-brand btn btn-link dropdown-toggle" data-bs-toggle="dropdown">
								<img src="../assets/img/img_avatar.png" alt="Logo" style="width:40px;" class="rounded-pill">
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Datos</a></li>
								<li><a class="dropdown-item" href="logout.php">Salir</a></li>
							</ul>
						</div>	
					</div>
				</div>
			</nav>
		</header>
		<!--Navbar-->

		<!--Content-->
		<main class="mt-5 pt-5">

			<div class="card">
				<div class="card-body">
					<table class="table table-striped table-bordered table-hover" id="table">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Correo</th>
								<th>Documento</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Carlos Andres</td>
								<td>Castro Jaramillo</td>								
								<td>cacjx778@gmail.com</td>
								<td>456658</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		</main>
		<!--Content-->

		<!--Footer-->
		<footer class="footer mt-auto py-3 bg-dark">
			<div class="container text-center">
				<span class="text-muted">&copy; Copyright ASEM.</span>
			</div>
		</footer>
		<!--Footer-->
		


</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/bootstrap.css" />
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	
	<title>BLOCKBUSM</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<img src="../IMAGES/logo v3.PNG" alt="Logo" width="8%">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarColor02">
				<ul class="navbar-nav me-auto">
					<li class="nav-item">
						<a class="nav-link" href="peliculas.php">Películas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pocasunidades.php">Pocas unidades</a>
					</li>
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Top 5 Películas</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="Top5tom.php">Mejores según USMTomatoes</a>
						<a class="dropdown-item" href="bottom5tom.php">Peores según USMTomatoes</a>
						<a class="dropdown-item" href="top5resenas.php">Con mayor cantidad de reseñas</a>
						<a class="dropdown-item" href="top5rentadas.php">Más rentadas según público</a>
					</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="perfil.php">Perfil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cerrar-sesion.php">Cerrar Sesión</a>
					</li>

				</ul>
				<?php 
				include("conexion-bd.php");
				session_start();
				if (!isset($_SESSION['usuario'])) {
					$sesionu = "no se ha iniciado sesión";
					
				} else {
					$mail = $_SESSION['usuario'];
				$result = mysqli_query($conexion, "SELECT nombre FROM usuarios WHERE mail = '$mail'");
				if (!$result) {
	                $sesionu = "no se ha iniciado sesión";
				} else {
	                $sesionu = mysqli_fetch_column($result);
	                $sesionu = "usuario actual: " . $sesionu;
                }
                }
				
				?>
				<div class="d-flex flex-row-reverse">
				<div class="order-md-3 p-2"><?php echo $sesionu ?></div>
				</div>
				
				
				<form class="d-flex" action="buscar.php" method="GET">
					<input class="form-control me-sm-2" type="text" name="busqueda" placeholder="Buscar">
					<input class="btn btn-secondary my-2 my-sm-0" type="submit" name="enviar" ></button>
				</form>
			</div>
		</div>
	</nav>

	<div class="container">
		<br />
		<div class="row">
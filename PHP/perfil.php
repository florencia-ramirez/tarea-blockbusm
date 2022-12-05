<?php
include("cabeza.php");

session_start();
if (!isset($_SESSION['usuario'])) {
	header("location: login.php");
	session_destroy();
	die();
}
include("conexion-bd.php");
$usuarios = "SELECT * FROM usuarios";
$mail = $_SESSION['usuario'];

$result = mysqli_query($conexion, "SELECT * FROM usuarios WHERE mail = '$mail'");
if (!$result) {
    echo 'Could not run query: ' . mysqli_error($conexion);
    exit;
}
$row = mysqli_fetch_array($result);

// Reseñas
$cantr = mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM reseñas WHERE usuario = '$mail'"));

?>
<div class="card mb-4">
	<h2 class="card-header">Tu Perfil</h2>
</br>
	<div class="card-body">
		<h3 class="card-title"><?php echo $row['nombre'] ?></h3>
	</div>
	<img src="../IMAGES/user.svg" alt="icono" width="10%" height="25%">
	<div class="card-body">
		<p class="card-subtitle text-muted"><?php echo "Seguidores: ", $row['seguidores'], " | Seguidos: ", $row['seguidos'] ?></p>
		</br>
		<p class="card-text"><?php echo $row['descripcion'] ?></p>
	</div>
	<ul class="list-group list-group-flush">
		<li class="list-group-item">Tu saldo actualmente: <?php echo $row['saldo'] ?></li>
		<li class="list-group-item">Numero de reseñas hechas: <?php echo $cantr ?></li>
	</ul>
</div>



<?php include("pie.php"); ?>
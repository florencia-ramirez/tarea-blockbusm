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
    echo 'Could not run query: ' . mysqli_error();
    exit;
}
$row = mysqli_fetch_array($result);



?>
<div class="card mb-4">
	<h2 class="card-header">Tu Perfil</h2>
	<div class="card-body">
		<h3 class="card-title"><?php echo $row['nombre'] ?></h3>
	</div>
	<img src="../IMAGES/blank-profile-picture.png" alt="icono" width="10%" height="25%">
	<div class="card-body">
		<p class="card-text"><?php echo $row['descripcion'] ?></p>
	</div>
	<ul class="list-group list-group-flush">
		<li class="list-group-item">Tu Saldo : <?php echo $row['saldo']; ?></li>
		<li class="list-group-item">Número de seguidores: <?php echo $row['seguidores']; ?></li>
		<li class="list-group-item">Número de seguidos: <?php echo $row['seguidos']; ?></li>
	</ul>
	<div class="card-body">
		<a href="#" class="card-link">Editar Cuenta</a>
		<a href="#" class="card-link">Agregar Saldo</a>
	</div>
</div>


<?php include("pie.php"); ?>
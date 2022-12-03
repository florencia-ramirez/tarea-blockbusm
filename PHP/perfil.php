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

$sqlsentence = mysqli_query($conexion, "SELECT nombre FROM usuarios WHERE mail = '$mail'");
$nombre = mysqli_fetch_column($sqlsentence);
$sqlsentence = mysqli_query($conexion, "SELECT descripcion FROM usuarios WHERE mail = '$mail'");
$descri = mysqli_fetch_column($sqlsentence);



?>
<div class="card mb-3">
	<h2 class="card-header">Tu Perfil</h2>
	<div class="card-body">
		<h3 class="card-title"><?php echo $nombre ?></h3>
	</div>
	<img src="../IMAGES/blank-profile-picture.png" alt="icono" width="10%" height="25%">
	<div class="card-body">
		<p class="card-text"><?php echo $descri ?></p>
	</div>
	<ul class="list-group list-group-flush">
		<li class="list-group-item">Cras justo odio</li>
		<li class="list-group-item">Dapibus ac facilisis in</li>
		<li class="list-group-item">Vestibulum at eros</li>
	</ul>
	<div class="card-body">
		<a href="#" class="card-link">Editar Cuenta</a>
		<a href="#" class="card-link">Another link</a>
	</div>
	<div class="card-footer text-muted">
		2 days ago
	</div>
</div>
<div class="card">
	<div class="card-body">
		<h4 class="card-title">Card title</h4>
		<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		<a href="#" class="card-link">Card link</a>
		<a href="#" class="card-link">Another link</a>
	</div>
</div>

<?php include("pie.php"); ?>
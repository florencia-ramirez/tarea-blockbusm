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
$sqlsentence = mysqli_query($conexion, "SELECT seguidos FROM usuarios WHERE mail = '$mail'");
$seguido = mysqli_fetch_column($sqlsentence);
$sqlsentence = mysqli_query($conexion, "SELECT seguidores FROM usuarios WHERE mail = '$mail'");
$seguidor = mysqli_fetch_column($sqlsentence);

// Reseñas
$cantr = mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM reseñas WHERE usuario = '$mail'"));

?>
<div class="card mb-3">
	<h2 class="card-header">Tu Perfil</h2>
</br>
	<img src="../IMAGES/user.svg" alt="icono" width="10%" height="25%">
	<div class="card-body">
		<h3 class="card-title"> <?php echo $nombre ?></h3>
		<h6 class="card-subtitle mb-2 text-muted"><?php echo "Seguidores: ", $seguidor ?> | <?php echo "Seguidos: ", $seguido ?></h6>
		<p class="card-text"><?php echo $descri ?></p>
		<a href="#" class="card-link">Editar Cuenta</a>
		<a href="#" class="card-link">Another link</a>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<h4 class="card-title">Reseñas</h4>
		<h6 class="card-subtitle mb-2 text-muted"><?php echo "Total de reseñas hechas: ", $cantr ?></h6>
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	</div>
</div>

<?php include("pie.php"); ?>
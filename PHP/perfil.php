<?php
include("cabeza.php");

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
$cantrent = mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM rentadas WHERE usuario = '$mail'"));

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
		<li class="list-group-item">Número de reseñas hechas: <?php echo $cantr ?></li>
		<li class="list-group-item">Número de películas rentadas actualmente: <?php echo $cantrent ?></li>
	</ul>
</div>

<h1>Películas rentadas</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nombre Pelicula</th>
      <th scope="col">Fecha y hora de la renta</th>
    </tr>
  </thead>
  <?php
  $sql = "SELECT * FROM rentashistorial;";
if ($result = mysqli_query($conexion, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
			?>
  <tbody>
    
    <tr class="table-Dark">
      <th scope="row"></th>
      <td><?php echo ($row['pelicula']); ?></td>
      <td><?php echo ($row['fecha']); ?></td>
    </tr>

	<?php
	}
	mysqli_free_result($result);
} else {
	echo "No records matching your query were found.";
}
} else {
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
}
    ?>
  </tbody>
</table>


<?php include("pie.php"); ?>
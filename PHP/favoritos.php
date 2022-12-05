<?php

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
?>

<?php
include("cabeza.php");
include("conexion-bd.php");
?>

<div class="card border-danger mb-3">
    <div class="card-body">
        </br>
        <h3 class="card-title">Agregar película a favoritos</h3>
        </br>
        <form method="post">
        <div class="form-group">
            <label for="examplePelicula">Película</label>
            <input type="text" class="form-control" name="pelicula" placeholder="Ingrese el nombre de la película que desee agregar a su lista de favoritos">
        </div>

        </br>

        <div class="form-group">
            <label for="exampleMail">Mail</label>
            <input type="text" class="form-control" name="mail" placeholder="Por favor, ingrese su mail para confirmar">
        </div>

        <br />
        <button type="submit" name="favorito" class="btn btn-lg btn-danger">Agregar película a favoritos</button>
        </form>
        <?php
            include("fav.php");
        ?>
    </div>
</div>

<?php include("pie.php"); ?>
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



<?php include("pie.php"); ?>
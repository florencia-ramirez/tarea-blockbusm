<?php
include("cabeza.php");
include("conexion-bd.php");
?>
<h1>Público G</h1>
<?php
$sql = "SELECT * FROM peliculas WHERE publico = 'G' ORDER BY cantRentada DESC LIMIT 5";
if ($result = mysqli_query($conexion, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
?>

            <div class="col-md-2">
                <div class="card border-primary mb-3">
                    <img class="card-img-top" src="<?php echo ($row['imagen']); ?>" alt="" style="height: auto; display: block; max-width: 100%;">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo ($row['nombre']); ?></h4>
                        <h6 class="card-text">Cantidad de veces rentada: <?php echo ($row['cantRentada']); ?></h6>
                        <!-- Botones -->
                        <a type="button" class="btn btn-danger" href="favoritos.php"> <img src="../IMAGES/heart.svg" alt="" width="16" height="16"> </a>
                        <a type="button" class="btn btn-danger" href="wishlist.php"> <img src="../IMAGES/bookmark.svg" alt="" width="16" height="16"> </a>
                        <a type="button" class="btn btn-danger" href="rentar.php"> <img src="../IMAGES/shopping-cart.svg" alt="" width="16" height="16"> </a>
                    </div>
                </div>
                <br />
            </div>

<?php   }
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
} 
?>
<h1>Público PG</h1>
<?php
$sql = "SELECT * FROM peliculas WHERE publico = 'PG' ORDER BY cantRentada DESC LIMIT 5";
if ($result = mysqli_query($conexion, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
?>

            <div class="col-md-3">
                <div class="card border-primary mb-3">
                    <img class="card-img-top" src="<?php echo ($row['imagen']); ?>" alt="" style="height: auto; display: block; max-width: 100%;">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo ($row['nombre']); ?></h4>
                        <h6 class="card-text">Cantidad de veces rentada: <?php echo ($row['cantRentada']); ?></h6>
                        <!-- Botones -->
                        <a type="button" class="btn btn-danger" href="favoritos.php"> <img src="../IMAGES/heart.svg" alt="" width="16" height="16"> </a>
                        <a type="button" class="btn btn-danger" href="wishlist.php"> <img src="../IMAGES/bookmark.svg" alt="" width="16" height="16"> </a>
                        <a type="button" class="btn btn-danger" href="rentar.php"> <img src="../IMAGES/shopping-cart.svg" alt="" width="16" height="16"> </a>
                    </div>
                </div>
                <br />
            </div>

<?php   }
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
} 

?>
<h1>Público R</h1>
<?php
$sql = "SELECT * FROM peliculas WHERE publico = 'R' ORDER BY cantRentada DESC LIMIT 5";
if ($result = mysqli_query($conexion, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
?>

            <div class="col-md-3">
                <div class="card border-primary mb-3">
                    <img class="card-img-top" src="<?php echo ($row['imagen']); ?>" alt="" style="height: auto; display: block; max-width: 100%;">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo ($row['nombre']); ?></h4>
                        <h6 class="card-text">Cantidad de veces rentada: <?php echo ($row['cantRentada']); ?></h6>
                        <!-- Botones -->
                        <a type="button" class="btn btn-danger" href="favoritos.php"> <img src="../IMAGES/heart.svg" alt="" width="16" height="16"> </a>
                        <a type="button" class="btn btn-danger" href="wishlist.php"> <img src="../IMAGES/bookmark.svg" alt="" width="16" height="16"> </a>
                        <a type="button" class="btn btn-danger" href="rentar.php"> <img src="../IMAGES/shopping-cart.svg" alt="" width="16" height="16"> </a>
                    </div>
                </div>
                <br />
            </div>

<?php   }
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
} ?>



<?php include("pie.php"); ?>
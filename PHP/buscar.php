<?php
include("cabeza.php");
include("conexion-bd.php");

if (isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];
    $consulta = $conexion->query("SELECT * FROM peliculas WHERE nombre LIKE '%$busqueda%' ");
    while ($row = $consulta->fetch_array()) {
        ?>
        <div class="col-md-3">
                <div class="card border-primary mb-3">
                    <img class="card-img-top" src="<?php echo ($row['imagen']); ?>" alt="" style="height: auto; display: block; max-width: 100%;">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo ($row['nombre']); ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo ($row['genero']), " | ", ($row['duracion']), " minutos"; ?></h6>
                        <p class="card-text"><?php echo ($row['descripcion']); ?></p>
                        <p class="card-subtitle mb-2 text-muted"><?php echo "Reparto: ", ($row['reparto']); ?></p>
                        <a type="button" class="btn btn-danger" href="favoritos.php"> <img src="../IMAGES/heart.svg" alt="" width="16" height="16"> </a>
                        <a type="button" class="btn btn-danger" href="wishlist.php"> <img src="../IMAGES/bookmark.svg" alt="" width="16" height="16"> </a>
                        <a type="button" class="btn btn-danger" href="rentar.php"> <img src="../IMAGES/shopping-cart.svg" alt="" width="16" height="16"> </a>
                    </div>
                </div>
                <br />
            </div>
            <?php }
} 
?>
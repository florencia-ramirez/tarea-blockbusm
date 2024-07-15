<?php
include("cabeza.php");
include("conexion-bd.php");
$sql = "SELECT * FROM peliculas";
if ($result = mysqli_query($conexion, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
?>
            <!-- Arreglar diferencias de tamaños, maybe el texto es muy garnde ?? -->
            <div class="col-md-3">
                <div class="card border-primary mb-3">
                    <img class="card-img-top" src="<?php echo ($row['imagen']); ?>" alt="" style="height: auto; display: block; max-width: 100%;">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo ($row['nombre']); ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo ($row['publico']), " | ", ($row['genero']), " | ", ($row['duracion']), " minutos | ", ($row['disponibles']), "/", ($row['totales']), " unidades"; ?> <p class="text-danger"> <strong> <?php echo "$", ($row['precio']); ?> </strong></p></h6>

                        <p class="card-text"><?php echo ($row['descripcion']); ?></p>
                        <p class="card-subtitle mb-2 text-muted"><?php echo "Reparto: ", ($row['reparto']); ?></p>
                        <p class="text-info"><?php echo "Cantidad de veces rentadas: ", ($row['cantRentada']); ?></p>
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
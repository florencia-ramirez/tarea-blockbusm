<?php
include("cabeza.php");
include("conexion-bd.php");
$sql = "SELECT * FROM top5usmt";
if ($result = mysqli_query($conexion, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
?>

            <div class="col-md-3">
                <div class="card border-primary mb-3">
                    <img class="card-img-top" src="<?php echo ($row['imagen']); ?>" alt="" style="height: auto; display: block; max-width: 100%;">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo ($row['nombre']); ?></h4>
                        <h6 class="card-text">Calificación usmTomatoes: <?php echo ($row['calUSMT']); ?></h6>
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
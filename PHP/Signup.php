<?php
include("cabeza.php");

if (isset($_SESSION['usuario'])) {
    header("location: /pagina-prinicipal.php");
    }
?>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Sign Up
                        </div>
                        <div class="card-body">
                            <form method="post">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="mail" placeholder="Ingresa tu dirección de mail">
                                </div>

                                <div class="form-group">
                                    <label for="examplename">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre completo">
                                </div>

                                <div class="form-group">
                                    <label for="exampledesc">Descripcion</label>
                                    <input type="text" class="form-control" name="descripcion" placeholder="Ingrese una pequeña descripcion">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="clave" placeholder="Ingresa tu contraseña">
                                </div>

                                <a href="login.php" class="badge badge-primary">¿Ya tienes una cuenta? ¡Entra al sitio! </a>
                                <br />
                                <button type="submit" name="registrar" class="btn btn-primary">Registrarse</button>
                            </form>
                            <?php
                            include("registrar.php");
                            ?>

                        </div>

                    </div>
                </div>

<?php include("pie.php"); ?>
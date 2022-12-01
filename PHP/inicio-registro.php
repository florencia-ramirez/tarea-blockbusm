<?php
    if (isset($_SESSION['usuario'])) {
        header("location: /pagina-prinicipal.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Conexión con el css -->
    <link rel="stylesheet" href="../CSS/bootstrap.css" />
    <title>BLOCKBUSM | Únete a nosotros</title>
</head>

<body>
    <!-- inicio de sesion y registro de cuenta -->
    <!-- automaticamente despues pase a mostrar el perfil maybe -->
    <img src="../IMAGES/logo v3.PNG" alt="Logo" width="8%">
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="post">
                        <div class = "form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="mail" aria-describedby="emailHelp" placeholder="Ingresa tu dirección de mail">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="clave" placeholder="Ingresa tu contraseña">
                        </div>
                        
                        <a href="Signup.php" class="badge badge-primary">No tienes cuenta? Únete a nosotros </a>
                        <br/>
                        <button type="submit" name="iniciar" class="btn btn-primary">Entrar</button>
                        </form>
                        <?php
                        include("iniciar.php");
                        ?>
                        
                    </div>               
                </div>
            </div>
        </div>
    </div>
</body>
</html>
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
    <title>BLOCKBUSM | Únete a nosotros</title>
</head>

<body>
    <!-- inicio de sesion y registro de cuenta -->
    <!-- automaticamente despues pase a mostrar el perfil maybe -->
    <div class="registrarse">
        <!-- Formulario a completar -->
        <form method="post">
            <h1>Únete a nosotros</h1>
            <input type="text" name="nombre" placeholder="Ingresa tu nombre completo">
            <input type="text" name="mail" placeholder="Ingresa tu dirección de mail">
            <input type="text" name="clave" placeholder="Ingresa tu contraseña">
            <input type="text" name="descripcion" placeholder="Ingrese una pequeña descripción">
            <input type="submit" name="registrar" />
        </form>
        <?php
            include("registrar.php");
        ?>
    </div>
    <div class="inicio">
        <!-- Formulario a completar -->
        <form method="post">
            <h1>Inicia sesión en tu cuenta</h1>
            <input type="text" name="mail" placeholder="Ingresa tu dirección de mail">
            <input type="text" name="clave" placeholder="Ingresa tu contraseña">
            <input type="submit" name="iniciar" />
        </form>
        <?php
            include("iniciar.php");
        ?>
    </div>
</body>
</html>
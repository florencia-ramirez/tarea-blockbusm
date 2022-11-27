<?php
    include("conexion-bd.php");

    // Cuando se apreta el boton de enviar
    if (isset($_POST["registrar"])) {
       // Revisa que ninguno de los campos este vacio
        if (strlen($_POST["nombre"]) >= 1 && strlen($_POST["mail"]) >= 1 && strlen($_POST["descripcion"]) >= 1 && strlen($_POST["clave"]) >= 1) {
            $nombre = trim($_POST["nombre"]);
            $mail = trim($_POST["mail"]);
            $clave = trim($_POST["clave"]);
            $descripcion = trim($_POST["descripcion"]);
            // Se genera la consulta
            $consulta = "INSERT INTO usuarios(nombre, clave, mail, descripcion) VALUES ('$nombre', '$clave', '$mail', '$descripcion')";
            $resultado = mysqli_query($conexion, $consulta);
            if ($resultado) {
                echo "Te has registrado correctamente";
            }
            else {
                echo "Ha ocurrido un error, inténtalo nuevamente";
            }
        }
        else {
            echo "Rellena todos los campos para poder registrarte";
        } 
    }
    
?>
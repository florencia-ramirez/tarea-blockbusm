<?php
    include("conexion-bd.php");

    // Cuando se apreta el boton
    if (isset($_POST["rentar"])) {

       // Revisa que ninguno de los campos este vacio
        if (strlen($_POST["pelicula"]) >= 1 && strlen($_POST["mail"]) >= 1) {
            $pelicula = $_POST["pelicula"];
            $mail = $_POST["mail"];

            // Se genera la consulta
            $consulta = "INSERT INTO rentadas(usuario, pelicula) VALUES ('$mail', '$pelicula')";

            //Verificar que no haya una cuenta existente con ese correo
            $verificar_correo = mysqli_query($conexion, "SELECT * FROM rentadas WHERE (usuario = '$mail' AND pelicula = '$pelicula')");
            if (mysqli_num_rows($verificar_correo) > 0) {
                echo '
                <script>
                    alert("Ya se rentó esta película");
                    window.location = "rentar.php";
                </script>
                ';
                exit();
            }
            else {
                $saldo = mysqli_query($conexion, "SELECT saldo FROM usuarios WHERE (mail = '$mail')");
                $precio = mysqli_query($conexion, "SELECT precio FROM peliculas WHERE (nombre = '$pelicula')");
                if ($saldo >= $precio) {
                    $resultado = mysqli_query($conexion, $consulta);
                    if ($resultado) {
                        header("location: perfil.php");
                    }
                    else {
                        echo "Ha ocurrido un error, inténtalo nuevamente";
                    }
                }
                else {
                    echo "No tienes saldo suficiente para rentar esta película";
                }
            }
        }
        // No se rellenaron todos los campos
        else {
            echo "Rellena todos los campos para poder rentar la pelicula";
        } 
    }
    
?>
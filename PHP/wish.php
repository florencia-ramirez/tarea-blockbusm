<?php
    include("conexion-bd.php");

    // Cuando se apreta el boton
    if (isset($_POST["wishlist"])) {

       // Revisa que ninguno de los campos este vacio
        if (strlen($_POST["pelicula"]) >= 1 && strlen($_POST["mail"]) >= 1) {
            $pelicula = $_POST["pelicula"];
            $mail = $_POST["mail"];

            // Se genera la consulta
            $consulta = "INSERT INTO wishlist(usuario, pelicula) VALUES ('$mail', '$pelicula')";

            //Verificar que no haya una cuenta existente con ese correo
            $verificar_correo = mysqli_query($conexion, "SELECT * FROM wishlist WHERE (usuario = '$mail' AND pelicula = '$pelicula')");
            if (mysqli_num_rows($verificar_correo) > 0) {
                echo '
                <script>
                    alert("Ya se agregó esta película a su wishlist");
                    window.location = "wishlist.php";
                </script>
                ';
                exit();
            }
            else {
                $resultado = mysqli_query($conexion, $consulta);
                if ($resultado) {
                    header("location: perfil.php");
                }
                else {
                    echo "Ha ocurrido un error, inténtalo nuevamente";
                }
            }
        }
        // No se rellenaron todos los campos
        else {
            echo "Rellena todos los campos para poder agregar la pelicula";
        } 
    }
    
?>
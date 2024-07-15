<?php
    include("conexion-bd.php");

    // Cuando se apreta el boton de enviar
    if (isset($_POST["registrar"])) {

       // Revisa que ninguno de los campos este vacio
        if (strlen($_POST["nombre"]) >= 1 && strlen($_POST["mail"]) >= 1 && strlen($_POST["descripcion"]) >= 1 && strlen($_POST["clave"]) >= 1) {
            $nombre = $_POST["nombre"];
            $mail = $_POST["mail"];
            $clave = $_POST["clave"];
            $descripcion = $_POST["descripcion"];

            // Se genera la consulta
            $consulta = "INSERT INTO usuarios(nombre, clave, mail, descripcion) VALUES ('$nombre', '$clave', '$mail', '$descripcion')";

            //Verificar que no haya una cuenta existente con ese correo
            $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE mail = '$mail'");
            if (mysqli_num_rows($verificar_correo) > 0) {
                echo '
                <script>
                    alert("Este correo está asociado a una cuenta ya existente.");
                    window.location = "Signup.php";
                </script>
                ';
                exit();
            }
            else {
                $resultado = mysqli_query($conexion, $consulta);
                if ($resultado) {
                    $_SESSION['usuario'] = $mail;
                    echo '
                    <script>
                        alert("Se ha creado con éxito el usuario, será redireccionado para que inicie sesión");
                        window.location = "login.php";
                    </script>
                    ';
                }
                else {
                    echo "Ha ocurrido un error, inténtalo nuevamente";
                }
            }
        }
        // No se rellenaron todos los campos
        else {
            echo "Rellena todos los campos para poder registrarte";
        } 
    }
    
?>
<?php
    //Iniciar sesión y hacer la conexión con la base
    session_start();
    include 'conexion-bd.php';

    // Cuando se apreta el boton de enviar
    if (isset($_POST["registrar"])) {
        $mail = $_POST["mail"];
        $clave = $_POST["clave"];
 
        //Comprobar que existan esos datos en la base
        $validar_login = mysqli_query($conexion, "SELECT * FROM users WHERE mail = '$mail' and clave = '$clave'");
        if (mysqli_num_rows($validar_login) > 0) {
            $_SESSION['usuario'] = $mail;
            header("location: /pagina-principal.php");
        }
        else {
            echo '
                <script>
                alert("Usuario no existente, verifique los datos introducidos");
                window.location = "pagina-principal.php";
                </script>
            ';
            exit();
        }
    }
?>
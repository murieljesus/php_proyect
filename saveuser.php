<?php
session_start();

if (isset($_POST['login'])) {

    if (isset($_POST['usuario']) && isset($_POST['password'])) {
        $user = $_POST['usuario'];
        $pass = $_POST['password'];
        include("conectabd.php");

        $query = "SELECT ID,user,pass,id_datos FROM usuario WHERE user = ?";
        $resultado = mysqli_prepare($link, $query);
        $ok = mysqli_stmt_bind_param($resultado, "s", $user);
        $ok = mysqli_stmt_execute($resultado);


        if ($ok == false) {
            echo "error de consulta";
        } else {

            $respuesta = $resultado->get_result();
            $colum = $respuesta->fetch_assoc();
            if (password_verify($pass, $colum['pass'])) {

                if ($colum['id_datos'] == 'Administrador') { //ADMINISTRADOR

                    $_SESSION['tipo'] = 1;
                    $_SESSION['usuario'] = $colum['user'];
                    header("Location:admin.php");
                } else if ($colum['id_datos'] == 'Tecnico') { //SERVICIO TECNICO

                    $_SESSION['tipo'] = 2;
                    $_SESSION['usuario'] = $colum['user'];
                    header("Location:tecnico.php");
                } else if ($colum['id_datos'] == 'Cliente') { // CLIENTE

                    $_SESSION['tipo'] = 3;
                    $_SESSION['usuario'] = $user;
                    header("Location: cliente.php ");
                } else if ($colum['id_datos'] == 'Administrativo') { //PERSONAL ADMINISTRATIVO

                    $_SESSION['tipo'] = 4;
                    $_SESSION['usuario'] = $colum['user'];
                    header("Location:factura.php");
                }
                echo "error";
            }
            echo "Usuario no registrado";
        }
    }
}
?>
<p><a href="login.php">Volver</a><br /></p>
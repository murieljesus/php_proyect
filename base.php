<?php
session_start();

if (isset($_POST['Enviar'])) {
    echo "in";
    if (isset($_POST['id']) && isset($_POST['dni'])) {
        $user = $_POST['id'];
        $pass = $_POST['dni'];
        include("conectabd.php");
        echo "in2";
        $query = "SELECT ID,DNI FROM user WHERE ID = ?";
        $resultado = mysqli_prepare($link, $query);
        $ok = mysqli_stmt_bind_param($resultado, "s", $user);
        $ok = mysqli_stmt_execute($resultado);


        if ($ok == false) {
            echo "in3";
            echo "error de consulta";
        } else {

            $respuesta = $resultado->get_result();
            $colum = $respuesta->fetch_assoc();
           // if (password_verify($pass, $colum['pass'])) {
                echo $colum['ID'] ;
                //if ($colum['ID'] == 1) { ADMINISTRADOR

                  //  $_SESSION['tipo'] = 1;
                   // $_SESSION['usuario'] = $colum['user'];
                   header("Location:https://yhizuz.000webhostapp.com/home.php");

                } /*else if ($colum['id_datos'] == 'Tecnico') { //SERVICIO TECNICO

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
                }*/
                //echo "error";
          //  }
            
        }
    }

?>
<p><a href="login.php">Volver</a><br /></p>
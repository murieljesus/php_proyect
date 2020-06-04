<?php
session_start();
// trae datos del servidot local por laravel
if (isset($_POST['dni']) && isset($_POST['id']) && isset($_POST['ape']) && isset($_POST['name']) &&
 $_POST['tmptxt'] == $_SESSION['tmptxt']){
$id = $_POST['id'];
$url = "http://localhost/Parcial2_recup_servidor/public/usuarios/$id";


if(json_decode(file_get_contents("$url"), true)){
$datos = json_decode(file_get_contents("$url"), true);
$_SESSION['nombre'] = $datos["nombre"];
$_SESSION['apellido'] = $datos["apellido"];
$_SESSION['dni'] = $datos["dni"];

header("Location: home.php");
}
} else{
    session_destroy();
header("Location: login.php");
}
?>
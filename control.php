<?php
session_start();
include ("conectabd.php");
$id = $_SESSION['id'];
    $query = "SELECT * FROM usuario WHERE ID = '$id'";
    $resultado = mysqli_query($link, $query);
    if (($muestra = mysqli_fetch_array($resultado)) == false) {

header("Location: planilla.php");
    
}else
{


    header("Location: error.php");
}
    
?>
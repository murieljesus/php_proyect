<?php
session_start(); 
include("conectabd.php");
echo$id = $_SESSION['id'];
$query = "SELECT * FROM usuario WHERE ID = '$id'";
$resultado = mysqli_query($link, $query);
if (($muestra = mysqli_fetch_array($resultado)) == false) {

  // if (isset($_POST['cuil']) && isset($_POST['mes']) && isset($_SESSION['sub'])){
        $cuil2 = $_POST['cuil'];//calle 
        $mes = $_POST['mes'];//interseccion
        $sub = $_POST['sub'];//numeral
        $nom = $_SESSION['nombre'];
        $ape= $_SESSION['apellido'];
        $dni = $_SESSION['dni'];
        $cuil = "null";$anio = "null";$re = "null";$total="null";
        $query2 = " INSERT INTO usuario (ID,NOMBRE,APELLIDO,DNI,CUIL,INGRESO,EMPRESA,MES,SUBTOTAL,RETENCIONES,TOTAL) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?) ";
        $preparo = mysqli_prepare($link, $query2);
        mysqli_stmt_bind_param($preparo, "issiiiisiii", $id, $nom, $ape, $dni, $cuil, $anio, $cuil2, $mes,$sub,$re,$total);
        $ok = mysqli_stmt_execute($preparo);
        header("Location: ok.php");
  //}
} else {




    header("Location: error.php");
}
?>
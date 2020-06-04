<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="ESTILO.css" type="text/css">
	<title>Inicio</title>
</head>
<div id="titulo2">
	<h1> BIENVENIDO A MERCADOLIBRE </h1>
</div>

<body>

	<div id="na2">
		<a href="inicio.php" id="hover">Home</a>
		<a href="video.php" id="hover">Promociones</a>
		<a href="planilla.php" id="hover">Maps</a>
		<a href="chekpdf.php" id="hover">Grafico de uso</a>
		<a href="index.php" id="hover">Salir</a>
	</div>
	<div id="articulo">
		<p id="letras">Hola <?php echo $_SESSION['nombre'] . " " . $_SESSION['dni']; ?>
			Queremos invitarte a que conozcas nuestras promociones </p>


		<img id="ima" src="foto.png">
	</div>
</body>
<footer id="foot2">
	<p id="text">Mercadolibre</p>
</footer>

</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="ESTILO.css" type="text/css">
	<title>Login</title>

</head>

<div id="titulo2">
	<h1>
		BIENVENIDO
	</h1>
</div>

<div id="na2">
	<a href="index.html" id="hover">Home</a>
	<a href="regis.php" id="hover">Registrarse</a>
</div>

<fieldset id="caja">
	<legend class="style">Login</legend>

	<form method="post" action="base.php" name="formulario">

		<label class="style2">ID</label>
		<input name="id" type="number" min="1" max="4">

		<label class="style2">Dni</label>
		<input type="number" name="dni" min="4">

		<button type="submit" name="Enviar" class="style2" id="boton">
			Enviar
		</button>

	</form>
</fieldset>

<footer id="foot2">
	<p id="text">Mercadolibre</p>
</footer>

</html>
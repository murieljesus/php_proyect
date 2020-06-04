<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css" type="text/css">
    <title>Punto de Local</title>

</head>
<body>
<header>
		<div class="w3-container w3-black">
			<h1>
				<center>Mercadolibre Clientes</center>
			</h1>
		</div>
	</header>
</body>
<div class="w3-bar w3-red">
  <a href="inicio.php" class="w3-bar-item w3-button">Home</a>
  <a href="video.php" class="w3-bar-item w3-button">Promociones</a>
  <a href="planilla.php" class="w3-bar-item w3-button">Maps</a>
  <a href="chekpdf.php" class="w3-bar-item w3-button">Grafico de uso</a>
  <a href="index.php" class="w3-bar-item w3-button">Salir</a>
</div>
<body>
    <center>    <iframe width="625" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-57.54877924919129%2C-38.01269433506926%2C-57.544670104980476%2C-38.01014994558198&amp;layer=mapnik&amp;marker=-38.01142215136497%2C-57.54672467708588"
        style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=-38.01142&amp;mlon=-57.54672#map=18/-38.01142/-57.54672">Ver mapa más grande</a></small>
</center>
</body>


<body>
    <h2>
        <p>Ingrese su direccion para entregas</p>
    </h2>
    <main>

        <article>
            <form action="save.php" method="POST"  class="w3-container" >


                <p>
                    <label>Numeral</label>
                    <input type="number" name="cuil"  min="4" class="w3-input w3-border">
                </p>
                <p>
                    <label>Interseccion</label>
                    <input type="text" name="mes"  class="w3-input w3-border" >
                </p>
                <P>
                    <label >Numero de piso</label>
                    <input type="number" name="sub" lass="w3-input w3-border">
                </P>
                <button class="w3-btn w3-red">Enviar</button>
                <p> <input type="hidden" name="save" value="Guardar"></p>
                
            </form>
        </article>
<body>

    </main>
</body>
<footer>
	<div class="w3-container w3-black">
		<h5>Mercadolibre</h5>
	</div>
</footer>
</html>
<?php
session_start();
/*// o cambiar id por numero de dni  
$_SESSION['tipo'] = 3; */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrarse</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="ESTILO.css">
</head>
<div id="titulo2">
    <h1>
        BIENVENIDO
    </h1>
</div>

<div id="na2">
    <a href="index.php" id="hover">Home</a>
    <a href="login.php" id="hover">Login</a>
</div>

<fieldset id="caja">
    <legend class="style"> Ingrese sus datos</legend>
    <form method="post" action="regis.php">

        <label class="style2">Nombre</label>
        <input type="text" name="nom">

        <label class="style2">Apellido</label>
        <input type="text" name="ape">

        <label class="style2">DNI</label>
        <input type="number" name="id" min="4"></p>

        <label class="style2">Email</label>
        <input name="dni" type="number" min="1" max="4"></p>

        <input type="checkbox" value="1" name="conditions">
        <label class="style2">Acepta terminos y condiciones </label> <br><br>

        <?php
        if (isset($_POST['Enviar'])) {
            if (isset($_POST['conditions']) && $_POST['conditions'] == '1')
                header("location: saveuser.php"); // cambiar ssave user por pagina para guardar usuario nuevo
            else
                echo '<div class="alert alert-danger">Debe aceptar las condiciones de uso.</div><br>';
        }
        ?>
        	<button type="submit" name="Enviar" class="style2" id="boton">
            Registrarse
			</button>
    </form>
</fieldset>

<footer id="foot2">
    <p id="text">Mercadolibre</p>
</footer>


</html>
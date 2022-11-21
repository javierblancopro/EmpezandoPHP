<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejemplo 4: Recibir</title>
</head>
<body>

	<?php include "ejemplo4_funciones.php"; ?>

	<h1>Recibimos del formulario anterior</h1>
	<p>Has elegido hacer el examen en <span><?php echo mostrarCiudad(); ?></span> el día <span><?php echo mostrarFecha(); ?></span></p>

	<a href="ejemplo4.php">Volver</a>

</body>
</html>
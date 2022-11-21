<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo 2: Procesar formulario</title>

	<style type="text/css">
		img {
			width: 200px;
			height: 200px;
		}
	</style>
</head>
<body style="text-align: center;">
	<?php include 'ejemplo3_funciones.php'; ?>

	<h1>Confirmar personaje</h1>

	<h2><?php echo $_POST['nombre']; ?></h2>
	<img src="<?php asignaClase($_POST['clase']); ?>">
	<img src="<?php asignaGenero($_POST['genero']); ?>">

	<br>

	<a href="ejemplo3.php">Volver</a>

</body>
</html>
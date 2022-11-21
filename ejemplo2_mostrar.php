<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo 2: mostrar</title>
</head>
<body>
	<p>Has comprado <?php echo $_POST['cantidad'] ?> unidades de <?php echo $_POST['producto'] ?></p>

	<h2>Lista total</h2>
	<?php
		

		if (!isset($_COOKIE['lista'])) {
			setcookie("lista", "", time() + 200);
		}

		$listaCompra = $_COOKIE['lista'];

		// Se pueden utilizar formas contraidas para agilizar la programación. .= hace el mismo efecto que el siguiente comentario
		$listaCompra .= $_POST['producto'] . " " . $_POST['cantidad'];  
		// $listaCompra = $listaCompra . $_POST['producto'] . $_POST['cantidad'];

		echo $listaCompra;
		setcookie("lista", $listaCompra . "<br>", time() + 500);



		// Descomenta estas líneas para borrar la cookie

		// setcookie("lista", "", time() - 10); // Borro la cookie físicamente
		// unset($_COOKIE['lista']); // Libero la variable en memoria

		
		
	?>
	
	<br>
	<a href="ejemplo2.php">Volver</a>
</body>
</html>
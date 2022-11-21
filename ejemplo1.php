<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo 1: importar de otro fichero</title>
</head>
<body>

	<h1>Lista de la compra</h1>

	<ol>
		 <?php

		 	// Importamos las otras partes del proyecto
		 	include "ejemplo1_Valores.php";
		 	include "ejemplo1_Funciones.php";

		 	// Llamamos a la función y pedimos los datos
		 	enumerarElementos($compra);

 		?>

	</ol>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejemplo 4</title>
</head>
<body>

	<form action="ejemplo4_recibir.php" method="GET">
		<p>Ciudad: <input type="text" name="ciudad"></p>
		<p>Fecha: <input type="date" name="fecha"></p>
		<input type="submit" name="Enviar">
	</form>

	<a href="ejemplo4_recibir.php?ciudad=Madrid&fecha=Pendiente">Me puedo presentar en Madrid en cualquier fecha que me den </a> <!-- Forzamos la URL con un GET -->

</body>
</html>
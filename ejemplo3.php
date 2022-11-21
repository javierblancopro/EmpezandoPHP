<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo 2: Procesar un formulario</title>
</head>
<body>

	<h1>Formulario de creación de personaje</h1>

	<form action="ejemplo3_mostrar.php" method="POST" id="creacion">
		<p>Nombre: <input type="text" name="nombre"></p>
		<p>Selecciona una clase: 
			<select name="clase" form="creacion">
				<option value="guerrero">Guerrero</option>
				<option value="sacerdote">Sacerdote</option>
				<option value="chaman">Chamán</option>
			</select>
		</p>
		<p>Selecciona un género:<br>
			<input type="radio" name="genero" value="masculino"><label>Masculino</label><br>
			<input type="radio" name="genero" value="femenino"><label>Femenino</label><br>
			<input type="radio" name="genero" value="neutro"><label>Neutro</label><br>
		</p>
		<input type="submit" name="accion" value="Enviar">
	</form>

</body>
</html>


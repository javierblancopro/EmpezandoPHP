<?php 

	function mostrarCiudad(){
		if (isset($_GET['ciudad'])){ 
			$ciudad = $_GET['ciudad'];
		} else {
			$ciudad = "NO SE HA DEFINIDO";
		}
		
		return $ciudad;
	}	

	function mostrarFecha(){
		if (isset($_GET['fecha'])){ // Comprobamos si existe el valor
			if ($_GET['fecha'] == "Pendiente"){ // Si tiene el valor "Pendiente" (hemos pulsado el enlace forzando el envío GET)
				$fechaFormateada = "Te avisaremos cuando haya una fecha disponible";
			} else { // Si no, venimos del formulario
				$fecha = $_GET['fecha'];
				$tiempo = strtotime($fecha);
				$fechaFormateada = date("l, d F  Y", $tiempo);
			}
		} else { // Si no está definida, es que hemos accedido directamente a esta página sin pasar por el formulario
			$fechaFormateada = "NO SE HA ELEGIDO FECHA";
		}

		return $fechaFormateada;
	}

?>


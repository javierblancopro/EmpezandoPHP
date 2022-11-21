<?php 
	function asignaClase($clase) {
		switch ($clase) {
			case 'guerrero':
				echo "ejemplo3/logo_guerrero.png";
				break;
			case 'sacerdote':
				echo "ejemplo3/logo_sacerdote.png";
				break;
			case 'chaman':
				echo "ejemplo3/logo_chaman.png";
			}
	}


	function asignaGenero($genero) {
		switch ($genero) {
			case 'masculino':
				echo "ejemplo3/masculino.png";
				break;
			case 'femenino':
				echo "ejemplo3/femenino.png";
				break;
			case 'neutro':
				echo "ejemplo3/neutro.png";
			}
		}


?>
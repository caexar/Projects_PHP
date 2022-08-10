<?php
	
	//clase
	class Persona{

		//atributo
		public $nombre = "Cesar";

		//metodo
		public function hablar($mensaje){
			echo $mensaje;
		}

	}
	$persona = new Persona();
	echo $persona ->nombre;
	$persona->hablar(" Saludos");

?>
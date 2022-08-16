<?php

	class Vehiculo{

		//atributos
		public $motor = false;
		public $marca;
		public $color;

		//metodos
		public function estado(){
			if ($this->motor) {
				echo "el motor esta encendido<br>";
			}else{
				echo "el motor esta apagado <br>";
			}
		}
		public function encender(){
			if ($this->motor) {
				echo "Cuidado, el motor ya esta prendido<br>";			
			}else{
				echo "el moto ahora esta encendido<br>";
				$this->motor = true;
			}
		}
	}
	/*$vehiculo = new Vehiculo();
	$vehiculo->estado();
	$vehiculo->encender();
	$vehiculo->estado();*/


	class Moto extends Vehiculo{

		public function estadoMoto(){
			//los metodos protected heredado solo se pueden usar en otra clase siempre y cuando se herenden en otro metodo.
			$this->estado();
		}
	}

	//esto seria valido si los metodos fueran publicos
	/*$moto = new Moto;
	$moto->estado();*/

	//herencia de la herenci
	class Cuatrimoto extends Moto{

	}
	$moto = new Cuatrimoto();
	$moto->estado();


	

?>
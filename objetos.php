<?php 

	class Persona{

		//atributos
		public $nombre = array();
		public $apellido = array();

		//metodos
		public function guardar($nombre, $apellido){
			$this ->nombre[] = $nombre;
			$this->apellido[] = $apellido;
		}
		
		public function mostrar(){
			for ($i=0 ; $i < count($this->nombre); $i++ ){ 
				// cualquiera de las 3 formas funciona igual 
			//	self::formato($this->nombre[$i], $this->apellido[$i]);
			//	Persona->formato($this->nombre[$i], $this->apellido[$i]);
				$this->formato($this->nombre[$i], $this->apellido[$i]);
			}

		}

		public function formato($nombre, $apellido){
			echo "Nombre: " . $nombre ."  | apellido:	" . $apellido ."<br>";
		}

	}
	$Persona = new Persona();
	$Persona->guardar("Carlos", "Fernandes");
	$Persona->guardar("Uriel", "Hernandez");
	$Persona->mostrar();





?>
<?php 
	
	class NodoEditorial{

		//atributos
		private $denominacion;
		private $idEditorial;
		private $nodoAnterior;
		private $nodoSiguiente;
		private $nodoAbajo;

		//contructor
		public function __construct($denom, $editorial){
			$this->denominacion = $denom;
			$this->idEditorial = $editorial;
			$this->nodoAnterior = null;
			$this->nodoSiguiente = null;
			$this->nodoAbajo = null;
		}

		//getter y setter		
		public function getDenominacion(){
			return $this->denominacion;
		}
		public function setDenominacion($denom){
			$this->denominacion = $denom;
		}

		public function getIdEditorial(){
			return $this->idEditorial;
		}
		public function setIdEditorial($editorial){
			$this->idEditorial = $editorial;
		}

		public function getNodoAnterior(){
			return $this->nodoAnterior;
		}
		public function setNodoAnterior($anterior){
			$this->nodoAnterior = $anterior;
		}

		public function getNodoSiguiente(){
			return $this->nodoSiguiente;
		}
		public function setNodoSiguiente($sigiente){
			$this->nodoSiguiente = $sigiente;
		}

		public function getNodoAbajo(){
			return $this->nodoAbajo;
		}
		public function setNodoAbajo($abajo){
			$this->nodoAbajo = $abajo;
		}
	}


?>
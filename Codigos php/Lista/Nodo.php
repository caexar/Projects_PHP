<?php 

	class Nodo{

		//atrivutos
		private $info;
		private $sig;


		//contructor
		function __construct($i){
			$this->info = $i;
			$this->sig = null;
		}

		//gett y sett
		function getInfo(){
			return $this->info;
		}

		function getSig(){
			return $this->sig;
		}

		function setInfo($i){
			$this->info = $i;
		}
		
		function setSig($i){
			$this->sig = $i;
		}
	}
?>
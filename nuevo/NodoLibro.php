<?php 
	
	class NodoLibro{

		//atributos
		private $idLibro;
		private $titulo;
		private $autor;
		private $pais;
		private $anno;
		private $cantidad;
		private $nodoAbajo;

		//contructor
		function __construct($id, $titulo, $autor, $pais, $anno, $cantidad){
		$this->idLibro = $id;
		$this->titulo = $titulo;
		$this->autor = $autor;
		$this->pais = $pais;
		$this->anno = $anno;
		$this->cantidad = $cantidad;
		$this->nodoAbajo = null;

		}
		
		//getter y setter
		function getIdLibro(){
			return $this->idLibro;
		}
		function setIdLibro($id){
			$this->idLibro = $id;
		}

		function getTitulo(){
			return $this->titulo;
		}
		function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		function getAutor(){
			return $this->autor;
		}
		function setAutor($autor){
			$this->autor = $autor;
		}

		function getPais(){
			return $this->pais;
		}
		function setPais($pais){
			$this->pais = $pais;
		}

		function getAnno(){
			return $this->anno;
		}
		function setAnno($anno){
			$this->anno = $anno;
		}

		function getCantidad(){
			return $this->cantidad;
		}
		function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}

		function getNodoAbajo(){
			return $this->nodoAbajo;
		}
		function setNodoAbajo($abajo){
			$this->nodoAbajo = $abajo;
		}


	}

?>
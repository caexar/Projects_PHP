<?php 

	include("Nodo.php");

	class ListaSimple{

		//atributo
		private $nodoInicial;
		private $nodoFinal;

		//contructor
		function __construct(){
			$this->nodoInicial = null;
			$this->nodoFinal = null;
		}

		//metodos
		//agregar al inicio de la lista
		function agregarInicio($nodo){
			if ($this->nodoInicial == null) {
				$this->nodoFinal = $nodo;
			}else{
				$nodo->setSig($this->nodoInicial);
			}
			$this->nodoInicial = $nodo;
		}

		function visualizarLista(){
			$nodo = $this->nodoInicial;
			$mensaje = "";

				if ($this->nodoInicial == null) {
					return "Lista Vacia";
				}else{
					while ($nodo != null) {
						$mensaje = $mensaje. "<br>-". $nodo->getInfo();
						$nodo = $nodo->getSig();
					}
				}
				return "La Lista es: ". $mensaje;
		}

		function agregarFinal($nodo){
			if ($this->nodoInicial == null) {
				$this->nodoInicial = $nodo;
			}else{
				$this->nodoFinal->setSig($nodo);
			}
			$this->nodoFinal = $nodo;
		}

		function nodoBuscar($cadena){
			$nodo = $this->nodoInicial;
			$encontrado = false;

			while ($nodo != null && $encontrado==false) {
				if ($nodo->getInfo()==$cadena) {
					$encontrado = true;
				}else{
					$nodo = $nodo->getSig();
				}
			}
			return $nodo;
		}

		function eliminarNodo($cadena){
			$nodo = $this->nodoInicial;
			$nodoAnterior = $nodo;
			$encontrado = false;
			$eliminado = false;

			while ($nodo != null && $encontrado == false) {
				if ($nodo->getInfo() == $cadena) {
					$encontrado = true;
				}else{
					$nodoAnterior = $nodo;
					$nodo = $nodo->getSig();
				}
			}

			if ($nodo==null) {
				$eliminado = false;
			}else{
				if ($nodo==$this->nodoInicial) {
					$this->nodoInicial = $this->nodoInicial->getSig();
					if ($nodo == $this->nodoFinal) {
						$this->nodoInicial= null;
					}
				}else{
					$nodoAnterior->setSig($nodo->getSig());
					if ($nodo == $this->nodoFinal) {
						$this->nodoFinal = $nodoAnterior;
					}
				}
				$nodo = null;
				$eliminado = true;
			}
			return $eliminado;
		}
	}

?>
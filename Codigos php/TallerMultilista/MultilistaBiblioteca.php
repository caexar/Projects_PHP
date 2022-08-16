<?php 

	include("NodoEditorial.php");
	//include("NodoLibro.php");

	class MultilistaBiblioteca{

		//atributo
		private $nodoInicial;
		private $nodoFinal;

		//contructor
		function __construct(){
			$this->nodoInicial = null;
			$this->nodoFinal = null;
		}

		//metodos
		//metodo agregar
		function agregarEditorial($nodo){
			if ($this->nodoInicial == null) {
				$this->nodoInicial= $nodo;
			}else{
				$this->nodoFinal->setnodoSiguiente($nodo);
				$nodo->setNodoAnterior($this->nodoFinal);
			}
			$this->nodoFinal = $nodo;
		}

		//metodo visualizar
		function visualizarLista(){
			$nodo = $this->nodoInicial;
			$mensaje = "";

				if ($this->nodoInicial == null) {
					return "Lista Vacia";
				}else{
					while ($nodo != null) {
						$mensaje = $mensaje. "<br>-". $nodo->getDenominacion(). "   -id: ". $nodo->getIdEditorial();
						$nodo = $nodo->getNodoSiguiente();
					}
				}
				return "<br>La Lista es: ". $mensaje;
		}

		//metodo buscar
		function buscarEditorial($id){
			$nodo = $this->nodoInicial;
			$encontado = false;

			while ($nodo != null && !$encontado) {
				if ($nodo->getIdEditorial() == $id) {
					$encontado = true;
				}else{
					$nodo = $nodo->getNodoSiguiente();
				}
			}
			return$nodo;
		}

		function editorialVacia($nodo){
			//$vacia = false;
			if ($nodo->getNodoAbajo() == null) {
				//$vacia true;
				return true;
			}else{
				return false;
			}
		}

		

	}

?>
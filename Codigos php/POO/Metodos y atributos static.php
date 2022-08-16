<?php 

 class Pagina{

 	//atributo
 	public $nombre = "Mi blog personal";
 	public static $url = "www.pagweb.com";

 	//Metodos
 	public function bienvenida(){
 		//para llamar atributos o metodos static se ocupa usar el self:: envez del this
 		echo "bienvenidos a <b>" . $this->nombre . "</b> la pagina es <b>" . self::$url . "</b><br>";
 		//tambien es posible usando la classe para llamarlo
 		/*echo "bienvenidos a <b>" . $this->nombre . "</b> la pagina es <b>" . Pagina::$url . "</b><br>";*/
 	}

 	public static function bienvenido2(){
 		//el self solo sirve para atributos static para normales no
 		//en metodos static no se pueden usar atributos normales...
 		echo "bienvenidos 2" . self::$url;
 	}
 }

 class Web extends Pagina{

 }
 Pagina::bienvenido2();
 Web::bienvenido2();

 /*$pagina = new Pagina();
 $pagina->bienvenida();*/



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista Enlazadas Simples</title>
</head>
<body>
	<h1>Lista enlazadas simple</h1>

<?php 
	include("listaSimple.php");

	//se crea una lista
	$listaDiasSemana = new ListaSimple();

	//se agrega nodos con el metodo agregar al inicio
	$domingo = new Nodo("domingo");
	$listaDiasSemana->agregarInicio($domingo);

	$sabado = new Nodo("sabado");
	$listaDiasSemana->agregarInicio($sabado);

	$viernes = new Nodo("viernes");
	$listaDiasSemana->agregarInicio($viernes);

	//se agrega nodo al final con el metodo
 	$lunes = new Nodo("lunes");
	$listaDiasSemana->agregarFinal($lunes);

	//metodo visualizar lista
 	echo $listaDiasSemana->visualizarLista();

 	//metodo buscar nodo
 	$tem = $listaDiasSemana->nodoBuscar("lunes");
 	if ($tem != null) {
 		echo "<br><hr> Elemento encontrado es: ".$tem->getInfo();
 	}else{
 		echo "<br><hr> Elemento No encontrado ";
 	}

 	//metodo eliminar nodo
 	$eliminarVariable = $listaDiasSemana->eliminarNodo("domingo");
 	if ($eliminarVariable == true) {
 		echo "<br><hr> Elemento eliminado ";
 	}else{
 		echo "<br><hr> Elemento No eliminado ";
 	}

 	//se vuelve a visualizar la lista
 	echo "<br><hr>".$listaDiasSemana->visualizarLista();



?>

</body>
</html>
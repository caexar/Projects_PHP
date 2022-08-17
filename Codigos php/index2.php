<?php 

	include("listaSimple.php");
	//este metodo es para crear una cockes para guardar la informacion en el navegador
	session_start();
	if (isset($_SESSION["lista"])==false) {
		//el issent es para crear solo 1 cockes y no mas
		$_SESSION["lista"] = new ListaSimple();
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<h1> Lista enlazada simple </h1>

Metodo agregar al inicio:
<form action="index2.php" method="post">
	<input type="text" name="agregarinicio">
	<input type="submit" value="Agregar">
</form>

<?php 
	if (isset($_POST["agregarinicio"])) {
		$nodo = new Nodo($_POST["agregarinicio"]);
		$_SESSION["lista"]->agregarInicio($nodo);
	}
?>

Metodo agregar al final:
<form action="index2.php" method="post">
	<input type="text" name="agregarfinal">
	<input type="submit" value="Agregar">
</form>

<?php 
	if (isset($_POST["agregarfinal"])) {
		$nodo = new Nodo($_POST["agregarfinal"]);
		$_SESSION["lista"]->agregarFinal($nodo);
	}
?>


 Metodo Buscar:
<form action="index2.php" method="post">
	<input type="text" name="buscar">
	<input type="submit" value="Buscar">
</form>

<?php 
	if (isset($_POST["buscar"])) {
		$buscar = $_SESSION["lista"]->nodoBuscar($_POST["buscar"]);

		if ($buscar != null) {
 		echo "<br><hr> Elemento encontrado es: ".$buscar->getInfo();
 	}else{
 		echo "<br><hr> Elemento No encontrado ";
 	}
	}
?>

<br><hr>


Metodo Eliminar:
<form action="index2.php" method="post">
	<input type="text" name="eliminar">
	<input type="submit" value="eliminar">
</form>

<?php 
	if (isset($_POST["eliminar"])) {
		$eliminar = $_SESSION["lista"]->eliminarNodo($_POST["eliminar"]);

		if ($eliminar == true) {
 			echo "<br><hr> Elemento se elimino";
 		}else{
 			echo "<br><hr> Elemento No se elimino ";
 		}
	}
?>


<br><hr>
<?php 
	//mostramos la lista usando el metodo visualizar lista
	echo $_SESSION["lista"]->visualizarLista();

?>


</body>
</html>
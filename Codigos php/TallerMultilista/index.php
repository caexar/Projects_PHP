<?php 

	include("MultilistaBiblioteca.php");
	//este metodo es para crear una cockes para guardar la informacion en el navegador
	session_start();
	if (isset($_SESSION["biblioteca"])==false) {
		//el issent es para crear solo 1 cockes y no mas
		$_SESSION["biblioteca"] = new MultilistaBiblioteca();
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biblioteca</title>
</head>
<body>

<h1>Biblioteca con multilista</h1>

Metodo agregar editorial al inicio:
<form action="index.php" method="post">
	Denominacion: <input type="text" name="denominacion">
	Id: <input type="text" name="id">
	<input type="submit" value="Agregar">
</form>

Metodo buscar editorial:
<form action="index.php" method="post">
	Buscar: <input type="text" name="idBuscar">
	<input type="submit" value="buscar">
</form>

Metodo comprobar si la editorial esta vacia:
<form action="index.php" method="post">
	Buscar: <input type="text" name="idVacia">
	<input type="submit" value="buscar">
</form>


<?php 
	if (isset($_POST["denominacion"])) {
		$editorial = new NodoEditorial($_POST["denominacion"], $_POST["id"]);
		$_SESSION["biblioteca"]->agregarEditorial($editorial);
		echo "editorial agregada";
		
	}


	if (isset($_POST["idBuscar"])) {
		$buscador = $_SESSION["biblioteca"]->buscarEditorial($_POST["idBuscar"]);
		if ($buscador != null) {
			echo "<br><hr>Elemento encontrado es: ". $buscador->getDenominacion();
		}else{
			echo "<br><hr>Elemento no encontrado";
		}
	}

	if (isset($_POST["idVacia"])) {
		$ediVacia = $_SESSION["biblioteca"]->editorialVacia($_POST["idVacia"]);
		if ($ediVacia == true) {
			echo "<br><hr> si tiene";
		}else{
			echo "<br><hr> no tiene";
		}
		echo "editorial comprobada";
		
	}
?>

<?php 

echo $_SESSION["biblioteca"]->visualizarLista();
?>

</body>
</html>
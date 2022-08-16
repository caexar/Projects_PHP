<?php
	include("MultilistaBiblioteca.php");
	session_start();
	if (!isset($_SESSION['biblioteca'])) {
	  $_SESSION['biblioteca'] = new MultilistaBiblioteca();
	}
?>
<html>
  <head>
    <title>Multilista</title>
  </head>
  <body>
    
    <h1> Multilista Biblioteca PHP </h1>

    Agregar Editorial:
    <form action="index.php" method="post">
    Denominacion:<input type="text" name="denominacion">
    Id:<input type="text" name="ideditorial">
    <INPUT type="submit" value="Agregar">
    </form>

    Buscar Editorial:
    <form action="index.php" method="post">
    Id:<input type="text" name="id-edi-bus">
    <INPUT type="submit" value="Buscar">
    </form>

      <?php
          if (isset($_POST["denominacion"])){
            $Editorial = new NodoEditorial($_POST["denominacion"],$_POST["ideditorial"] );
            $_SESSION['biblioteca']->AgregarEditorial($Editorial );
            echo "Editorial Agregada!";
            //print_r($_SESSION['biblioteca']);
      }
        if (isset($_POST["id-edi-bus"])){
            $B = $_SESSION['biblioteca']->BuscarEditorial($_POST["id-edi-bus"]);
              if ($B != null){
                echo "<br><hr>Elemento Encontrado es: ". $B->getDenominacion();
              }else{
                echo "<br><hr>Elemento No Encontrado";
              }
        }
      ?>
  </body>
</html>
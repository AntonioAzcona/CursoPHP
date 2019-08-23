<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Funciones</title>
</head>
<body>

<?php 

	require ("02_FuncionesSinHTML.php"); //A fuerzas debe existir ese archivo para que se ejecute el programa
	include ("02_FuncionesSinHTML.php"); //Si no existe el archivo, el flujo continua y marca error hasta donde lo ocupa
	/*
	function dameDatos(){

		echo "Este es el mensaje del interior de la función <br>";
	}*/

	dameDatos(); //Así se llama una función

 ?>

</body>
</html>
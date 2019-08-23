<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ambito de las variables</title>
</head>
<body>
	<?php 

		$nombre = "Antonio";

		//include ("03_AmbitoDeLasVariablesSinHTML.php");
		
		function dameNombre(){

			global $nombre;//La puse así para poder acceder a ella aun que esté fuera de la función

			$nombre = "El nombre es: " . $nombre; //Si no la hubiera vuelt global, no podría acceder a esa variable

		}

		dameNombre();

		echo $nombre;
	 ?>
</body>
</html>
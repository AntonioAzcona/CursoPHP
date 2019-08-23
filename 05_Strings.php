<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strings</title>
	<style type="text/css">
		.resaltar{
			color:#F00;
			font-weight:bold;
		}
	</style>
</head>
<body>

	<?php 
	 	
	 	//Puede ser así
	    echo "<p class='resaltar'>Esto es un ejemplo de frase </p>";
	    //O así
		echo "<p class=\"resaltar\">Esto es un ejemplo de frase </p>";
		//Si se ocuparán comillas, no se pueden usar las mismas, a menos que se encierren entre \ las comillas

		/*strcmp significa "string compare", compara exactamente las cadenas
		  strcasecmp, compara cadenas sin importar mayusculas y minusculas
		  	1 true    0 false*/

		$str1 = "Casa";
		$str2 = "CASA";

		$resultado = strcmp(str1, str2); //Devuelve 1 si son iguales. 0 si son diferentes.
	 ?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Variables Estáticas</title>
</head>
<body>
	<?php

		function incrementarVariable(){
			
			static $contador = 0; 
			//El static es para que cuando salga del metodo no se destruya la variable y su valor actual se conserve

			$contador++;

			echo $contador . "<br>";
		}

		incrementarVariable();
		incrementarVariable();
		incrementarVariable();
		incrementarVariable();

	 ?>
</body>
</html>
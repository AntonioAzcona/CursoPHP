<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Funciones</title>
</head>
<body>
	<?php
		function frase_mayus($frase, $conversion){//$conversion = true
			$frase = strtolower($frase);//Pone en minusculas toda la frase

			if($conversion == true)
				$resultado = ucwords($frase);//Pone en mayusculas cada palabra de la frase
			else
				$resultado = strtoupper($frase);//Pone en mayusculas toda la frase

			return $resultado;
		}

		echo(frase_mayus("Hola como estas amigo, esto es una prueba" , true));
	 ?>
</body>
</html>
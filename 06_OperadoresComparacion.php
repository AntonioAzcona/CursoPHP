<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Operadores Comparación</title>
</head>
<body>
	<?php
		$variable1 = 8;
		$variable2 = "8";
		$variable3 = "Antonio";

		/*    DEVUELVE TRUE SI...
		$variable1 == variable2 ---> Son Iguales (mismo valor)
		$variable1 === variable2 --> Son Identicos (mismo tipo y valor)
		$variable1 != variable2 ---> No son iguales (mismo valor)
		$variable1 <> variable2 ---> No son identicos (mismo tipo y valor)
		$variable1 > variable2 ---> Mayor que
		$variable1 < variable2 ---> Menor que
		*/

		echo "Comparación de variable 1 y variable 2<br>";

		if($variable1 == $variable2)
			echo "Son iguales";
		else 
			echo "No son iguales";
	 ?>
</body>
</html>
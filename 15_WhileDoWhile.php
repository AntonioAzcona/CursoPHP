<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bucle While</title>
</head>
<body>
	<?php
		$var1 = 1;

		while($var1 <= 10){
			echo $var1 . "<br>";
			$var1++;
		} 

		echo "Aqui empieza el Do While<br>";

		$var2 = 10;
		do{
			echo $var2 . "<br>";
			$var2++;
		}while($var2 <= 10);
	 ?>
</body>
</html>
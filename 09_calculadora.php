<?php  
	if(isset($_POST["button"])){
		$numero1 = $_POST["num1"];
		$numero2 = $_POST["num2"];
		$operacion = $_POST["operacion"];

		calcular($operacion);
	}

	function calcular($calculo){
		global $numero1;
		global $numero2;

		if(!strcmp("Suma", $calculo))
			echo "El resultado es: " . ($numero1 + $numero2);
		if(!strcmp("Resta", $calculo))
			echo "El resultado es: " . ($numero1 - $numero2);
		if(!strcmp("Multiplicación", $calculo))
			echo "El resultado es: " . ($numero1 * $numero2);
		if(!strcmp("División", $calculo))
			echo "El resultado es: " . ($numero1 / $numero2);
		if(!strcmp("Módulo", $calculo))
			echo "El resultado es: " . ($numero1 % $numero2);
	}
?>
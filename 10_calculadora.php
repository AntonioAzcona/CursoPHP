<?php  
	
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
		if(!strcmp("Incremento", $calculo)){
			$numero1++; 
			$resultado = $numero1;
			echo "El resultado del incremento es: " . $resultado;
		}
		if(!strcmp("Decremento", $calculo)){
			$numero1--; 
			$resultado = $numero1;
			echo "El resultado del decremento es: " . $resultado;
		}
	}
?>
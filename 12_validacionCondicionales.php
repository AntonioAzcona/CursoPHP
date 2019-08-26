<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}
</style>

<?php

	if(isset($_POST["enviando"])){
		$nombre = $_POST["nombre_usuario"];
		$edad = $_POST["edad_usuario"];

		if($nombre == "Antonio"){
			if($edad < 12){
				echo "Es un niño";
			}else if($edad > 18 && $edad < 25){
				echo "Es mayor de edad";
			}else if($edad == 25){
				echo "Es un adulto";
			}else if($edad == 30){
				echo "Es un señor";
			}else if($edad == 50){
				echo "Es maduro";
			}
		}else{
			echo "Nombre incorrecto";
		}
	}
?>
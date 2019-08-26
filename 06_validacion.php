<style type="text/css">
	h1{
		text-align: center;
	}
	table{
		background-color: #FFC;
		padding: 5px;
		border: #666 5px solid;
	}
	.no_validado{
		font-size:18px;
		color: #F00;
		font-weight: bold;
	}
	.validado{
		font-size:16px;
		color: #0c3;
		font-weight: bold;
	}
</style>

<?php 
	//Una de las funciones de isset es comprobar si se ha pulsado el botón 
	if(isset($_POST["enviando"])){//enviando es el nombre del botón del formulario
		$usuario = $_POST["nombre_usuario"];
		$edad = $_POST["edad_usuario"];

		if($usuario == "Juan" && $edad >= 18)
			echo "<p class='validado'>Nombre y edad valida, puedes entrar</p>";
		else
			echo "<p class='no_validado'>Nombre y edad no valida, no puedes entrar</p>";
	}
 ?>
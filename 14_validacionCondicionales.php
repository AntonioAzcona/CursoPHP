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
		$contra = $_POST["contra"];

		switch($nombre){
			case $nombre == "Antonio" && $contra == "1234":
				echo "Usuario autorizado. Hola Antonio";
			break;
			case $nombre == "Juan" && $contra == "0000":
				echo "Usuario autorizado. Hola Juan";
			break;
			case $nombre == "María" && $contra == "951":
				echo "Usuario autorizado. Hola María";
			break;
			default:
				echo "Usuario no autorizado";
			break;
		}
	}
?>
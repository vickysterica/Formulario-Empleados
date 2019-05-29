<html>
<body>
<?php 
	require ("datos_conexion.php");
	$conexion = mysqli_connect($db_host,$db_usuario,$db_contraseña) or die("Está dando error al conectar");
	mysqli_select_db($conexion,$db_nombre) or die ("Está dando error al seleccionar la BBDD");


	if(isset($_POST["enviar"])){/*Si he pulsado el botón de enviar del formulario...*/
			//$eleccion = $_POST["eleccion"];
		echo "He pulsado";
			if($eleccion == 'select'){
				//$eleccion = $_POST["eleccion"];
				echo "Ha hecho select ";
			}
	}

?>
</body>
</html>
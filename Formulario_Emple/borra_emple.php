<html>
<body>
		<style>
		form{
			border: dotted 5px red;
			margin-left: 35%;
			margin-right: 35%;
			text-align: center;

		}
		h1{
			text-align: center;
		}

		h2{
			text-align: center;
			color: red;
		}
		
		h3{
			text-align: center;
			color: green;
		}

	</style>


	<?php 
		if(isset($_POST["borrar"])){
			$conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo al conectar con la BBDD");
			$emp_no = $_POST["emp_no"];
			$apellido = $_POST["apellido"];
			

			if(empty($emp_no)){
				echo "<h2>Error!!</h2>";
				echo "<h3> Debe introducir un número de empleado!</h3>";
			}
			elseif(empty($apellido)){
				echo "<h2>Error!!</h2>";
				echo "<h3> Debe introducir un apellido!</h3>";
			}
			else{
				$conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo al conectar con la BBDD");
				$insert = mysqli_query($conexion, "DELETE from emple where emp_no ='".$emp_no."' AND apellido = '".$apellido."' ") or die ("Fallo en la inserción");

				echo "Usted ha eliminado lo siguiente<br>";
				echo "Número de empleado :".$emp_no. "<br>";
				echo "Apellido de empleado :" .$apellido. "<br>";
			}
		}
		else{
	?>
<h1>Formulario de borrado de empleados</h1>
<form action="borra_emple.php" method="POST">
	<p>Número de empleado</p>
	<input type="text" name="emp_no"/><br>
	<p>Apellido del empleado</p>
	<input type="text" name="apellido" id="ape"/><br>
	<br><br>
	<input type="submit" name="borrar"/>
	<br><br> 
</form>
	<?php 
		}
	 ?>
</body>
</html>
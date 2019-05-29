<html>
<body>
	<style>
		form{
			text-align: center;
			border:dotted 2px green;
			margin-left: 35%;
			margin-right: 35%;
		}
		h1{
			text-align: center;
			color: purple;
		}
		p{
			font-size: 30px;
			color: orange;
			text-align: center;
		}
		input{
			border-color: orange;
			font-size: 30px;
		}

		select{
			border-color: lightblue;
			font-size: 25px;
			color: black;
		}

		#boton{
			font-size: 20px;
			border-color: blue;
		}
		h2{
			font-size: 40px;
			color: red;
		}
		h3{
			font-size: 20px;
			color: lightgreen;
			
		}
		table{
			text-align: center;
			margin:auto;
			border: dotted 2px blue;
		}
	</style>


	<?php 
		if(isset($_POST["despide"])){
			$conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo en conexión");
			
			$apellido = $_POST["apellido"];
			$emp_no = $_POST["emp_no"];
			$motivo = $_POST["motivo"];
			$descripcion = $_POST["descripcion"];
			
			if(empty($apellido)){
				echo "<h2>Error!!<h2>";
				echo "<h3>Debe introducir un apellido válido </h3>";
			}
			elseif(empty($emp_no)){
				echo "<h2>Error!!<h2>";
				echo "<h3>Debe introducir un número de empleado válido </h3>";
			}
			elseif(empty($motivo)){
				echo "<h2>Error!!<h2>";
				echo "<h3>Debe introducir un motivo válido </h3>";
			}
			elseif(empty($descripcion)){
				echo "<h2>Error!!<h2>";
				echo "<h3>Debe introducir una descripción válida </h3>";
			}
			else{

				$conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo en conexión");

				$delete_emple = mysqli_query($conexion,"DELETE from emple where emp_no ='".$emp_no."'");

				$insert = mysqli_query($conexion, "INSERT into despidos(emp_no,apellido,motivo,descripcion) VALUES('".$emp_no."','".$apellido."','".$motivo."','".$descripcion."')");



				echo "<h2>Usted va a despedir al siguiente empleado</h2>";
				/* echo "<br>".$apellido;
				 echo "<br>".$emp_no;
				echo "<br>".$motivo;
				echo "<br>".$descripcion;*/
				echo "<table border='2px'>";
				//echo "<tr>";
				echo "<td> Apellido </td>";
				echo "<td> Número Empleado </td>";
				echo "<td> Motivo </td>";
				echo "<td> Descripción </td>";
				//echo "</tr>";
				//echo "<td" .$apellido. "</td>";
				echo "<tr>";
				echo "<td>" .$apellido. "</td>";
				echo "<td>" .$emp_no. "</td>";
				echo "<td>" .$motivo. "</td>";
				echo "<td>" .$descripcion. "</td>";
				echo "</tr>";
				echo "</table>";
			}
		}else{

	?>

	<h1>Formulario de despidos</h1>
	<form action="despide_emple.php" method="POST">
		<p>Apellido del empleado  :</p>
		<input type="text" name="apellido"/>
		<p>Número del empleado  :</p>
		<input type="text" name="emp_no"/>
		<p>Motivo del despido o baja</p>
		<select name="motivo" >
			<option value="excedencia">Excedencia</option>
			<option value="ascenso">Ascenso</option>
			<option value="baja_maternal">Baja maternal</option>
		</select>

		<p>Descripción del despido:</p>
		<textarea name="descripcion" cols="30" rows="10">
		</textarea>

		<br><br>
		<input type="submit" name="despide" value="Despedir?" id="boton">
		<br><br>
	</form>
	<?php 
		}
	?>
</body>
</html>
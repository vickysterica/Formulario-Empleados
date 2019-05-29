<html>
<head>
	<style>
		h1{
			color: green;
			text-align: center;
		}

		h3{
			color: red;
			text-align: center;
			margin-top: 25%;
		}
		h4{
			color: orange;
			text-align: center;
		}
		form{
			text-align: center;
			border: dotted 3px green;
			margin-left: 35%;
			margin-top: 5%;
			width: 20%;
		}
		
		table{
			background-color: lightblue;
			border-style: dotted;
			border-color: black;
		}

	</style>
</head>
<body>
	<?php 
		if (isset($_POST["boton"])){

			$conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo al conectar con la BBDD");

			$apellido = $_POST["apellido"];
			$oficio = $_POST["oficio"];
			$dept_no = $_POST["dept_no"];

			if(empty($dept_no)){
				
				print "<h3> Error, no introdujiste un departamento! </h3>";
				print "<a href='consulta_emple.php'> Vuelve </a>";
			}

			if( empty($apellido)){
				echo "<h3>Error! Debes introducir un apellido!</h3>";
			}

			if($oficio == "empleado"){
				echo "<h4>Su búsqueda muestra los siguientes resultados</h4>";
				$conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo al conectar con la BBDD");

				$consulta = mysqli_query($conexion,"SELECT * FROM emple WHERE oficio ='".$oficio."'");


				$nfilas = mysqli_num_rows($consulta);

				if($nfilas > 0){
					echo "<table border='3px' align='center'>";
					echo "<td>Apellido</td>";
					echo "<td>Oficio</td>";
					echo "<td>Número de departamento</td>";

					for($i= 0; $i < $nfilas; $i++){
						$resultados= mysqli_fetch_array($consulta);
						echo "<tr>";
						echo "<td>" .$resultados["APELLIDO"]. "</td>";
						echo "<td>" .$resultados["OFICIO"]. "</td>";
						echo "<td>" .$resultados["DEPT_NO"]. "</td>";
						echo "</tr>";
					}
					
					echo "</table>";
				}

			}
			elseif($oficio == "director"){
				echo "<h4>Su búsqueda muestra los siguientes resultados</h4>";
				$conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo al conectar con la BBDD");

				$consulta = mysqli_query($conexion,"SELECT * FROM emple WHERE oficio ='".$oficio."' AND apellido ='".$apellido."' AND dept_no = '".$dept_no."' ");


				$nfilas = mysqli_num_rows($consulta);

				if($nfilas > 0){
					echo "<table border='3px' align='center'>";
					echo "<td>Apellido</td>";
					echo "<td>Oficio</td>";
					echo "<td>Número de departamento</td>";

					for($i= 0; $i < $nfilas; $i++){
						$resultados= mysqli_fetch_array($consulta);
						echo "<tr>";
						echo "<td>" .$resultados["APELLIDO"]. "</td>";
						echo "<td>" .$resultados["OFICIO"]. "</td>";
						echo "<td>" .$resultados["DEPT_NO"]. "</td>";
						echo "</tr>";
					}
					
					echo "</table>";
				}
			}
			elseif($oficio == "analista"){
				echo "<h4>Su búsqueda muestra los siguientes resultados</h4>";
				$conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo al conectar con la BBDD");

				$consulta = mysqli_query($conexion,"SELECT * FROM emple WHERE oficio ='".$oficio."' AND apellido ='".$apellido."'");


				$nfilas = mysqli_num_rows($consulta);

				if($nfilas > 0){
					echo "<table border='3px' align='center'>";
					echo "<td>Apellido</td>";
					echo "<td>Oficio</td>";
					echo "<td>Número de departamento</td>";

					for($i= 0; $i < $nfilas; $i++){
						$resultados= mysqli_fetch_array($consulta);
						echo "<tr>";
						echo "<td>" .$resultados["APELLIDO"]. "</td>";
						echo "<td>" .$resultados["OFICIO"]. "</td>";
						echo "<td>" .$resultados["DEPT_NO"]. "</td>";
						echo "</tr>";
					}
					
					echo "</table>";
				}
			}
			else{
				echo "<h4>Su búsqueda muestra los siguientes resultados</h4>";
				$conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo al conectar con la BBDD");

				$consulta = mysqli_query($conexion,"SELECT * FROM emple WHERE oficio ='".$oficio."' AND apellido ='".$apellido."'");


				$nfilas = mysqli_num_rows($consulta);

				if($nfilas > 0){
					echo "<table border='3px' align='center'>";
					echo "<td>Apellido</td>";
					echo "<td>Oficio</td>";
					echo "<td>Número de departamento</td>";

					for($i= 0; $i < $nfilas; $i++){
						$resultados= mysqli_fetch_array($consulta);
						echo "<tr>";
						echo "<td>" .$resultados["APELLIDO"]. "</td>";
						echo "<td>" .$resultados["OFICIO"]. "</td>";
						echo "<td>" .$resultados["DEPT_NO"]. "</td>";
						echo "</tr>";
					}
					
					echo "</table>";
				}
			}
		}

		else{
	?>
	<h1>Formulario de consulta de Empleados</h1>
	<form action="consulta_emple.php" method="POST">
		<p>Apellido del empleado:</p>
		<input type="text" name="apellido"/><br>
		<p>Oficio del empleado:</p>
		<select name="oficio" >
			<option value="empleado">Empleado</option>
			<option value="director">Director</option>
			<option value="analista">Analista</option>
			<option value="vendedor">Vendedor</option>
		</select>
		<p>Número de departamento del empleado:</p>
		<input type="checkbox" name="dept_no" value="10">10</input>
		<input type="checkbox" name="dept_no" value="20">20</input>
		<input type="checkbox" name="dept_no" value="30">30</input>
		<br><br>
		<input type="submit" name="boton" id="boton" value="buscar empleado"/>
		<br><br>
	</form>
	<?php 
		}
	?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

</head>
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

            $apellido = $_POST["ape"];
            $emp_no = $_POST["emp"];
            $motivo = $_POST["motivo"];
            $descripcion = $_POST["descripcion"];

            if(empty($apellido)){
                print "<h2> Error </h2>";
                print "<h3> Debe introducir un apellido válido </h3>";
            }elseif(empty($emp_no)){
                print "<h2> Error </h2>";
                print "<h3> Debe introducir un número de empleado válido </h3>";
            }elseif(empty($motivo)){
                print "<h2> Error </h2>";
                print "<h3> Debe introducir un motivo válido </h3>";
            }elseif(empty($descripcion)){
                print "<h2> Error </h2>";
                print "<h3> Debe introducir una descrición válido </h3>";
            }
            else{
                $conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo en conexión a la BBDD");
                $delete_emple = mysqli_query($conexion,"DELETE from EMPLE where emp_no ='".$emp_no."'");

                print "<h2> Usted acaba de despedir al siguiente empleado </h2>";
                print "<table border='2px'>";
                print "<td>Apellido</td>";
                print "<td>Número de Empleado</td>";
                print "<td>Motivo</td>";
                print "<td>Descripción</td>";
                print "<tr>";
                print "<td>" .$apellido. "</td>";
                print "<td>" .$emp_no." </td>";
                print "<td>" .$motivo. "</td>";
                print "<td>" .$descripcion. "</td>";
                print "</tr>";
                print "</table>";
            }
        }else{
            ?>   
        
    <h1> Formulario de despidos </h1>
    <form action="depide_emple_repe.php" method="POST">
            <p>Apellido del empleado : </p>
            <input type="text" name="ape">
            <p>Número del empleado :</p>
            <input type="text" name="emp">
            <p>Motivo del despido o baja :</p>
            <select name="motivo" >
                <option value="excedencia"> Excedencia </option>
                <option value="ascenso"> Ascenso </option>
                <option value="baja_maternal"> Baja Maternal </option>
            </select>

            <p>Descripción del despido :</p>
            <textarea name="descripcion" cols="30" rows="10">
            </textarea><br><br>

            <input type="submit" name="despide" value="¿Despedir?" id="boton">
            <br><br>
    </form>
    
    
    <?php
    }
    ?>
</body>
</html>
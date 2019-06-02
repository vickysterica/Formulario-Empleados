<!--FORMULARIO DE INSERCIÓN DE EMPLEADOS VINCULADO AL MULTIFORMULARIO-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<style>
    h1{
        text-align: center;
        margin-left: 20%;
        margin-right:20%;
        color: crimson;
        border: 3px solid orange;
    }
    h2{
        text-align:center;
    }
    p{
        text-align:center;
    }
    #h2_insert{
        text-align:center;
        color: crimson;
        text-decoration: underline;
    }
    #izquierda{
        float:left;
        /*border: 3px solid crimson;*/
        margin-left: 30%;
    }
    #derecha{
        float:left;
       /* border: 3px dotted lightgreen;*/
        margin-left: 5%;
    }
    #boton_insert{
        border: 8px ridge #15dcd1;
    }

</style>
</head>
<body>
<?php
	//PARTE DE EJECUCIÓN PHP DEL FORMULARIO INSERT
		if(isset($_POST["boton_insert"])){
            $conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo en conexión a BBDD en formulario Insert");
			//Declaración de variables
			$emp_no =$_POST["emp_no"];
			$ape = $_POST["ape"];
			$oficio = $_POST["select_oficio"];
			$salario =$_POST["salario"];
			$director = $_POST["director"];
			$comision = $_POST["comision"];
			$dept_no	= $_POST["dept_no"];

            if(empty($emp_no) || empty($ape) || empty($oficio) || empty($salario) || empty($director) || empty($comision) || empty($dept_no)){
                print "<h2> Tienes que rellenar todo el formulario";
                print "<a href='multiformulario_insert.php'> Vuelve </a>";
            }
            else{
            $consulta = "INSERT into EMPLE(emp_no,apellido,oficio,dir,salario,comision,dept_no) VALUES('$emp_no','$ape','$oficio','$director','$salario','$comision','$dept_no')" or die ("Fallo en la inserción");
            $ejecuta_consulta = mysqli_query($conexion,$consulta) or die ("Fallo en la ejecución de la consulta");
            
            print "<h2> A continuación se muestra lo que se acaba de insertar </h2>";
            
            print "<p> Número de empleado" .$emp_no. "</p>";
            print "<p> Apellido " .$ape. "</p>";
            print "<p> Oficio" .$oficio. "</p>";
            print "<p> Salario " .$salario. "</p>";
            print "<p> Director " .$director. "</p>";
            print "<p> Comisión " .$comision. "</p>";
            print "<p> Número de departamento" .$dept_no. "</p>";


            }
        }
        else{//Si no pulso el botón, me muestra el formulario insert.
?>

<h2> Formulario de Inserción de empleados </h2>
    <br>
    <form action="multiformulario_insert.php" method="POST">
        <div id="izquierda">
        <p>Introduce un número de empleado :</p>
            <input type="text" name="emp_no" id="emp_no"/>
        <p>Introduce un apellido :</p>
            <input type="text" name="ape" id="ape"/>
        <p>Selecciona un oficio de la lista :</p>
            <select name="select_oficio" id="oficio">
                <option value="empleado" name="oficio">Empleado</option>
                <option value="vendedor" name="oficio">Vendedor</option>
                <option value="analista" name="oficio">Analista</option>
                <option value="presidente" name="oficio">Presidente</option>
            </select>
            <p>Introduce un salario :</p>
            <input type="text" name="salario" id="salario">
        </div>
        <div id="derecha">
        <p>Selecciona un número de Director :</p>
            Director Jiménez (7566)<input type="radio" name="director" value="7566"> <br>
            Director Negro (7698)<input type="radio" name="director" value="7698"> <br>
            Director Cerezo (7782)<input type="radio" name="director" value="7782"> <br>
        
        <p>Introduce una comisión :</p>
            <input type="text" name="comision" id="comision">
        <p>Introduce el Número de departamento</p>
            <input type="text" name="dept_no" id="dept_no">
            <br>
            <br>
            <input type="submit" name="boton_insert" id="boton_insert" value="¿Insertar Empleado?">
        </div>
	</form>
<?php
        }
?>
</body>
</html>
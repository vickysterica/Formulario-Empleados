<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!--PARTE CSS -->
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

    #boton{
        border: 8px ridge #15dcd1;
    }

    table{
        text-align: center;
        margin-left:30%;
        margin-right:30%;
        border: 3px dashed lightgreen;
    }
</style>
</head>
<body>

<!--COMIENZO DE LA PARTE PHP-->
<?php
    //Si pulso el botón del formulario...
    if(isset($_POST["boton"])){
        $conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo en la conexión con la BBDD");

        //Declaración de variables del formulario
        $emp_no = $_POST["emp_no"];
        $ape = $_POST["ape"];
        $oficio = $_POST["select_oficio"];
        $dir = $_POST["director"];
        $salario = $_POST["salario"];
        $comision = $_POST["comision"];
        $dept_no = $_POST["dept_no"];

        
        if(empty($emp_no) || empty($ape) || empty($oficio) || empty($salario) || empty($comision) || empty($dept_no)){
            print "<h1> Error !! Debes rellenar el formulario por completo! </h1>";
            
        }else{//Si se rellena todo el formulario ...
            //Conexión a la BBDD
            $conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo en la conexión con la BBDD");
            //Variable con la query INSERT
            $consulta = "INSERT into EMPLE(emp_no,apellido,oficio,dir,salario,comision,dept_no) VALUES('$emp_no','$ape','$oficio','$dir','$salario','$comision','$dept_no')" or die ("Fallo en la inserción");
            //Variable que ejecuta la query
            $ejecuta_consulta = mysqli_query($conexion,$consulta);


            print "<h2 id='h2_insert'> Usted acaba de insertar en la tabla emple los siguientes registros </h2> <br>";
            
            print "<table>";
                print "<th> EMP_NO   </th>";
                print "<th>  APELLIDO  </th>";
                print "<th>  OFICIO  </th>";
                print "<th>  DIR  </th>";
                print "<th>  SALARIO  </th>";
                print "<th>  COMISION  </th>";
                print "<th>  DEPT_NO  </th>";
                print "<tr>";
                    print "<td>" .$emp_no. "</td>";
                    print "<td>" .$ape. "</td>";
                    print "<td>" .$oficio. "</td>";
                    print "<td>" .$dir. "</td>";
                    print "<td>" .$salario. "</td>";
                    print "<td>" .$comision. "</td>";
                    print "<td>" .$dept_no. "</td>";
                print "</tr>";
            print "</table>";
           
            mysqli_close($conexion); //Cierre de la conexión con la BBDD
        }  
    }

else{  //Si no pulso el botón, muestro el formulario a continuación
?>
<!-- CREACIÓN DEL FORMULARIO-->
    <h2> Formulario de Inserción de empleados </h2>
    <br>
    <form action="inserta_emple.php" method="POST">
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
            <input type="submit" name="boton" id="boton" value="¿Insertar Empleado?">
        </div>
    </form>
    <?php
        } //Cierre del Else(if-isset)
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<style>
    h2{
        text-align:center;
    }
    p{
        text-align:center;
    }
    #izquierda{
        float:left;
        margin-left: 30%;
    }
    #derecha{
        float:left;
        margin-left: 5%;
    }
    #boton_delete{
        border: 8px ridge #15dcd1;
    }

</style>
</head>
<body>
<?php
    if(isset($_POST["boton_delete"])){
        $conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo en la conexión");
        //Declaración de variables
        $emp_no = $_POST["emp_no"];
        $ape = $_POST["ape"];


        if(empty($emp_no) || empty($ape) ){
            print "<h2> Tienes que rellenar todo el formulario";
            print "<a href='multiformulario_insert.php'> Vuelve </a>";
        }
        else{
            $conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo en la conexión");
            $consulta = "DELETE FROM EMPLE where emp_no='$emp_no'";
            $ejecuta_consulta = mysqli_query($conexion,$consulta) or die ("Error en el delete");

            print "<h2>Se ha procedido a borrar lo siguiente </h2>";
            print "<p> Número de empleado"  .$emp_no."</p>";
            print "<p> Apellido"  .$ape."</p>";

        }
    }
//Si no pulso el botón_delete, muestra el formulario de borrado
else{
?>

<h2> Formulario de borrado de empleados </h2>
    <br>
    <form action="multiformulario_delete.php" method="POST">
        <div id="izquierda">
        <p>Introduce un número de empleado :</p>
            <input type="text" name="emp_no" id="emp_no"/>
        <p>Introduce un apellido :</p>
            <input type="text" name="ape" id="ape"/>
            <input type="submit" name="boton_delete" id="boton_delete" value="¿Borrar Empleado?">
        </div>
	</form>
    <?php
}
?>
</body>
</html>
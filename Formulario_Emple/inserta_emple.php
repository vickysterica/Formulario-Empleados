<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<style>
    h2{
        text-align:center;
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
</style>
</head>
<body>
<!--COMIENZO DE LA PARTE PHP-->
<?php




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
                <option value="director" name="oficio">Director</option>
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
</body>
</html>
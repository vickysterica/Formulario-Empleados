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
</style>
</head>
<body>
    <h2> Formulario de Inserción de empleados </h2>
    <br>
    <form action="inserta_emple.php" method="POST">
        <div id="izquierda">
        <p>Introduce un número de empleado :</p>
            <input type="text" name="emp_no" id="emp_no"/>
        <p>Introduce un apellido :</p>
            <input type="text" name="ape" id="ape"/>
        <p>Selecciona un oficio de la lista :</p>
            <select name="oficio" id="oficio">
                <option value="empleado" name="select_oficio">Empleado</option>
                <option value="director" name="select_oficio">Director</option>
                <option value="vendedor" name="select_oficio">Vendedor</option>
                <option value="analista" name="select_oficio">Analista</option>
                <option value="presidente" name="select_oficio">Presidente</option>
            </select>
            <p>Introduce un salario :</p>
            <input type="text" name="salario" id="salario">
        </div>
        <div id="derecha">
        <p>Selecciona un número de Director :</p>
            Director Jiménez (7566)<input type="radio" value="7566"> <br>
            Director Negro (7698)<input type="radio" value="7698"> <br>
            Director Cerezo (7782)<input type="radio" value="7782"> <br>
        
        <p>Introduce una comisión :</p>
            <input type="text" name="comision" id="comision">
        <p>Introduce el Número de departamento</p>
            <input type="text" name="dept_no" id="dept_no">
        </div>
    </form>
</body>
</html>
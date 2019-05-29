<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>
    <h2> Formulario de Inserción de empleados </h2>
    
    <form action="inserta_emple.php" method="POST">
        <p>Introduce un número de empleado :</p>
            <input type="text" name="dept_no" id="emp_no"/>
        <p>Introduce un apellido :</p>
            <input type="text" name="ape" id="ape"/>
        <p>Selecciona un oficio de la lista :</p>
            <select name="oficio" id="oficio">
                <option value="empleado">Empleado</option>
                <option value="director">Director</option>
                <option value="vendedor">Vendedor</option>
                <option value="analista">Analista</option>
                <option value="presidente">Presidente</option>
            </select>
        <p>Selecciona un número de Director :</p>
            Director Jiménez <input type="radio" value="7566"> 
            Director Negro <input type="radio" value="7698">
            Director Cerezo <input type="radio" value="7782">
        <p>Introduce un salario :</p>
            <input type="text" name="salario" id="salario">
        <p>Introduce una comisión :</p>
            <input type="text" name="comision" id="comision">
        <p>Introduce el Número de departamento</p>
  
        
    </form>
</body>
</html>
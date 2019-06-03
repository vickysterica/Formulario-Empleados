<!--DOCUMENTO QUE MUESTRA FORMULARIO DE SELECT DE EMPLEADOS, VINCULADO AL MULTIFORMULARIO-->
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        if(isset($_POST["boton_select"])){
            $conexion = mysqli_connect("localhost","root","","curso_php") or die ("Fallo en la conexión");
            $emp_no = $_POST["empleado"];

            $consulta = mysqli_query($conexion,"select * from emple where emp_no = '".$emp_no."'") or die("error en la consulta");
            
            //Cuenta el número de filas que devuelve la consulta
            $nfilas = mysqli_num_rows($consulta);
            //Si el número de filas es mayor a 0
            if( $nfilas > 0){
                for($i=0; $i< $nfilas; $i++){//Ejecuto bucle for si $i es menor al número de filas de la consulta
                    //Recorro el array que me ha devuelto la consulta
                    $fila = mysqli_fetch_array($consulta);

                    //Muestro las posiciones del array deseadas.
                    //Es decir, los campos de la tabla deseados
                    //Los campos a los que hago referencia deben estar escritos igual que en la tabla
                    //Recuerda que es sensible a mayúsculas!
                    print 'Número de empleado'.$fila["EMP_NO"].'<br>';
                    print 'Apellido'.$fila["APELLIDO"].'<br>';
                    print 'Oficio'.$fila["OFICIO"].'<br>';
                    print 'Director'.$fila["DIR"].'<br>';
                    print 'Salario'.$fila["SALARIO"].'<br>';
                    print 'Comisión'.$fila["COMISION"].'<br>';
                    print 'Departamento'.$fila["DEPT_NO"].'<br>';

                }//Cierro el for
            }//Cierro el if($nfilas>0)
        }//Cierro el if isset

    else{
    ?>
    <h1>Formulario de consulta de empleados</h1>
    <form action="multiformulario_select.php" method="POST">
        <p>Introduce un número de empleado :</p>
        <input type="text" name="empleado">
        <input type="submit" name="boton_select">
    </form>
    <?php
    }//Cierro else principal
    ?>
</body>
</html>
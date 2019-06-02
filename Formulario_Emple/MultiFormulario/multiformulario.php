<html>
<meta charset='utf-8'>
<head>
<style>
	#form_principal{
		text-align:center;
		margin-left: 20%;
        margin-right:20%;
	}
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
    #boton_insert{
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
<?php 
	if(isset($_POST["enviar"])){/*Si he pulsado el botón del formulario principal...*/
		//conecto con la BBDD
		$conexion = mysqli_connect("localhost","root","","curso_php") or die("Está dando error al conectar");
		$eleccion = $_POST["eleccion"];
		
		//MOSTRAR FORMULARIO DE INSERTAR EMPLEADO
		//Si elijo la opción insert muestra el formulario de insert
		if($eleccion == 'insert'){
			require("multiformulario_insert.php");
        
        }
        //Si elijo la opción select muestra el formulario de select
        else if($eleccion == 'select'){
            require("multiformulario_select.php");
        }

        //Si elijo la opción update, muestra el formulario de update
        else if($eleccion == 'update'){
            require("multiformulario_update.php");
        }

        else if($eleccion == 'delete'){
            require("multiformulario_delete.php");
        }
        	

	}else{//Si no pulso el botón, me muestra el formulario principal
?>	

<!--PARTE DEL FORMULARIO PRINCIPAL-->
<h1>Web Multiformulario de empleados</h1>
<h2>Elige tu opción</h2>
<form id="form_principal" action="multiformulario.php" method="POST">
	<select name="eleccion">
		<option value="select">Busca empleado</option>
		<option value="update">Actualiza empleado</option>
		<option value="delete">Borra empleado</option>
		<option value="insert">Inserta empleado</option>
	</select>
	<br><br>
	<input type="submit" name="enviar" value="Dale Ya!">
</form>

<?php //Cierro la llave del else principal(botón)
	}
?>
</body>
</html>
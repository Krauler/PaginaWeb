<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('Pikachu');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$Tipo_cliente=$_POST['Tipo_cliente'];
	$Nombre_cliente=$_POST['Nombre_cliente'];
	$Direccion=$_POST['Direccion'];
    $Ciudad=$_POST['Ciudad'];
    $Comunidad=$_POST['Comunidad'];
    $Codigo_Postal=$_POST['$Codigo_Postal'];
    $Teléfono=$_POST['$Teléfono'];
    $Fecha_ultvisita=$_POST['Fecha_ultvisita'];
    $Descuento=$_POST['$Descuento'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO Clientes VALUES('$Tipo_cliente',
								   '$Nombre_cliente',
								   '$Direccion')
								   '$Ciudad',
								   '$Comunidad')
								   '$Codigo_Postal',
								   '$Teléfono')
								   '$Fecha_ultvisita',
								   '$Descuento')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>
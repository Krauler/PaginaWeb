<?php
function conectarse()
{
	$mysqli = new mysqli("localhost", "root", "", "veterinaria");
	if ($mysqli->connect_errno)
	{
		echo "Fallo la conexion MySQL:
		(". $mysqli->connect_errno .")
		" . $mysqli->connect_error;
		exit();
	}
	return $mysqli;
}
conectarse();
?>

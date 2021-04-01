<?php
$conex = new mysqli("localhost","root","","vaicrud1");
	
	if($conex->connect_errno)
	{
		echo "No hay conexión: (" . $conex->connect_errno . ") " . $conex->connect_error;
	}
?>
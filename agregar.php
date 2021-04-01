<?php include_once("conexion.php"); 
    
    $nombre 	= $_POST['txtnombre'];
    $correo 	= $_POST['txtcorreo'];
    $telefono 	= $_POST['txttelefono'];
    $clave 	    = $_POST['txtclave'];
    
	mysqli_query($conn, "INSERT INTO usuarios(nom,correo,tel,clave) VALUES('$nombre','$correo','$telefono','$clave')");
    mysqli_query($conn, "INSERT INTO paciente(nombre) VALUES('$nombre')");
    
header("Location:index.php");
	

?>
<?php include_once("conex.php"); 
    
    $nombrep 	= $_POST['txtnombrep'];
    $apellidop 	= $_POST['txtapellidop'];
    $cedulap 	= $_POST['txtcedulap'];
    $generop 	= $_POST['txtgenerop'];
    $tsp 	    = $_POST['txttipodesangrep'];
    $telefonop 	= $_POST['txttelefonop'];
    $correop 	= $_POST['txtcorreop'];
    $edadp 	    = $_POST['txtedadp'];
    
	mysqli_query($conex, "INSERT INTO paciente(nombre,apellido,cedula,genero,tipo_de_sangre,telefono,correo,edad) VALUES('$nombrep','$apellidop','$cedulap','$generop','$tsp','$telefonop','$correop','$edadp')");
    
header("Location:index.php");
	

?>
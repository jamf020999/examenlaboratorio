<?php
include_once("conexion.php"); 
?>
<!--Busca por VaidrollTeam para más proyectos. -->
<html>
<head>    
		<title>VaidrollTeam</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
	<img src="logo.png">
			<div id="barrabuscar">
		<form method="POST">
		<input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Ingresar nombre de usuario">
		</form>
		</div>
			<tr><th colspan="5"><h1>DATOS</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
			<tr>
		    <th>Nro</th>
			<th>Código</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Clave</th>
            <th>Teléfono</th>
            <th>Acción</th>
            <th>Acción</th>
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conn, "SELECT cod,nom,correo,tel FROM usuarios where nom like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($conn, "SELECT * FROM usuarios ORDER BY cod asc");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
            echo "<tr>";
			echo "<td>".$numerofila."</td>";
            echo "<td>".$mostrar['cod']."</td>";
            echo "<td>".$mostrar['nom']."</td>";
            echo "<td>".$mostrar['correo']."</td>";
            echo "<td>".$mostrar['clave']."</td>";    
			echo "<td>".$mostrar['tel']."</td>";  
            echo "<td style='width:26%'><a href=\"editar.php?cod=$mostrar[cod]\">Modificar</a> | <a href=\"eliminar.php?cod=$mostrar[cod]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[nom]?')\">Eliminar</a></td>";           
}
        ?>
    </table>
	 <script>
function abrirform() {
  document.getElementById("formregistrar").style.display = "block";
  
}

function cancelarform() {
  document.getElementById("formregistrar").style.display = "none";
}

</script>
<div class="caja_popup" id="formregistrar">
  <form action="reporte.php" class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2">Nuevo usuario</th></tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="name" name="txtnombrep" required></td>
            </tr>
            <tr> 
                <td>Apellido</td>
                <td><input type="apellido" name="txtapellidop" required></td>
            </tr>
            <tr> 
                <td>Cedula</td>
                <td><input type="cedula" name="txtcedulap" required></td>
            </tr>
            <tr> 
                <td>Genero (M/F)</td>
                <td><input type="genero" name="txtgenerop" required></td>
            </tr>
            <tr> 
                <td>Tipo de sangre</td>
                <td><input type="ts" name="txttipodesangrep" required></td>
            </tr>
            <tr> 
                <td>Telefono</td>
                <td><input type="number+" name="txttelefonop" required></td>
            </tr>
            <tr> 
                <td>Correo</td>
                <td><input type="emai" name="txtcorreop" required></td>
            </tr>
            <tr> 
                <td>Edad</td>
                <td><input type="ager" name="txtedadp" required></td>
            </tr>
            <tr> 	
               <td colspan="2">
				   <button type="button" onclick="cancelarform()">Cancelar</button>
				   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar a este usuario?');">
			</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
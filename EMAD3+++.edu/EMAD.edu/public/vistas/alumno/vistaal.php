<?php
include '../../../conexion.php';

 ?>


<!DOCTYPE html>
<html>
<head>
	
	 <meta charset="utf-8">
    <link rel="stylesheet" href="../../../public/bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../../public/css/registro_encargado.css">
        <link rel="stylesheet" href="../../../public/css/mostrar.css">

	<style type="text/css" media="print">
.nover {display:none}
</style>
	<title>Vista Alumnos Registrados</title>
	
	<br>
	<img src="../../img/icono.png" width="100" height="100" align="left" >
	<h1>Escuela de Educacion Especial de Usulutan</h1>
	<h3>Reporte de Alumnos Registrados</h3>
	
<script>
var f = new Date();
document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
</script>  
</head>
	<br>
	
		
	
	<br><br>
<body>
<center>
<br>
	
	<br>

	<table border="1" >
		<tr>
			<td align="center">Id</td>
			<td align="center">Nombre</td>
			<td align="center">Apellido</td>
			<td align="center">Discapacidad</td>
			<td align="center">Nivel de Dicapacidad</td>
			<td align="center">Encargado</td>
			<td align="center">Direccion</td>
			<td align="center">Telefono</td>
			<td align="center">Alergico a</td>
			<td align="center">Genero</td>
				
		</tr>
		
		<?php 
		$sql="SELECT * from alumno";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_a'] ?></td>
			<td><?php echo $mostrar['nombre_alumnos'] ?></td>
			<td><?php echo $mostrar['apellido_alumno'] ?></td>
			<td><?php echo $mostrar['discapacidad_alumno'] ?></td>
			<td><?php echo $mostrar['nivel_discapacidad'] ?></td>
			<td><?php echo $mostrar['encargado_alumno'] ?></td>
			<td><?php echo $mostrar['direccion'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
			<td><?php echo $mostrar['alergico_a'] ?></td>
			<td><?php echo $mostrar['genero'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table><br>
	<center><tr><input type="button" value="Imprimir Registros" class="nover" onClick="window.print()" class="btn btn-primary" style="width:175px;height:50px"></tr></center>
	
</center>
</body><br>
		
		
	
	<br>
</html>
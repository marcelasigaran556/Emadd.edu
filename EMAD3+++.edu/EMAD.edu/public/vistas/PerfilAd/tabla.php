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
	<title>Modificar</title>
	
	<br>
	<img src="../../img/icono.png" width="100" height="100" align="left" >
	<h1>Modificar datos</h1>
	
	
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
			<td align="center">Telefono</td>
			<td align="center">Direccion</td>
			<td align="center">Correo</td>
			<td align="center">Acciones</td>
			
				
		</tr>
		
		<?php 
		$query="SELECT * from administrador";
		$resultado=$conexion->query($query);

		while($mostrar=$resultado->fetch_assoc()){
		 ?>

		<tr>
			<td><?php echo $mostrar['idAdmin'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
			<td><?php echo $mostrar['direccion'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><a href="../PerfilAd/modi.php?idAdmin=<?php echo $mostrar['idAdmin']; ?>">Modificar</a> </td>
			
			
		</tr>
	<?php 
	}
	 ?>
	</table><br>
	
	
</center>
</body><br>
		
		
	
	<br>
</html>
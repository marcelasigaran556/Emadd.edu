<html>
<head>
		 <meta charset="utf-8">
    <link rel="stylesheet" href="../../../public/bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../../public/css/registro_encargado.css">
        <link rel="stylesheet" href="../../../public/css/mostrar.css">
	
	<title>Modificar</title>
	</head>
	<body>
		<br>
		<h1>Cambiar datos</h1>
	<center>
		
		<br>
		
		<form action="../../vistas/PerfilAd/editar.php" method="post">
			<?php
			
			$id= $_REQUEST['idAdmin'];
		include '../../../conexion.php';
		
		$query="select * from administrador";
		$resultado = $conexion->query($query);
		$mostrar=$resultado->fetch_assoc();
			
		
		?>
		<input type="text" name="telefono" style="width:200px;height:35px" placeholder="Telefono" value="<?php echo $mostrar['telefono'];?>"/>
			
			<input type="text" name="direccion" style="width:200px;height:35px" placeholder="Direccion" value="<?php echo $mostrar['direccion'];?>"/>
			<input type="text" name="correo" style="width:200px;height:35px" placeholder="Correo" value="<?php echo $mostrar['correo']; ?>"/>
			<br>
			<br>
			<td><input type="submit" value="Gardar Datos" style="width:200px;height:35px" ></td>
		
		</form>
		
		</center>
	</body>
</html>
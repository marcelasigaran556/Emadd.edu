
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
	<title>Mi perfil</title>
	
	<br>
	<img src="../../img/icono.png" width="100" height="100" align="left" >
	<h1>Bienvenido: Administrador de EMAD.EDU</h1>
	<h3>Disfruta tu experiencia</h3>
	
<script>
var f = new Date();
document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
</script>  
</head>
	
	
		
	
	<br><br>
<body>
<center>
<br>
	


	
		
			
		
		
		<?php 
		$sql="SELECT * from administrador";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
<center><img src="../../img/perfil.png" style="width:200px;height:200px"></center>
		<tr align="center">
	<h2>		<td align="center">Id: <?php echo $mostrar['idAdmin'] ?></td></h2>
			
		<h2>	<td align="center">Nombre: <?php echo $mostrar['usuario'] ?></td></h2>
			
		<h2>	<td align="center">Telefono: <?php echo $mostrar['telefono'] ?></td></h2>
			
		<h2>	<td align="center">Direccion: <?php echo $mostrar['direccion'] ?></td></h2>
			
		<h2>	<td align="center">Correo: <?php echo $mostrar['correo'] ?></td></h2>
			
		<h2>	<td align="center">Sexo: <?php echo $mostrar['sexo'] ?></td></h2>
			
		<h2>	<td align="center">Profesion: <?php echo $mostrar['profesion'] ?></td></h2>
	
			
		</tr>
	<?php 
	}
	 ?>
	<br>
	
	
</center>
</body><br>
		
		<a href="../../vistas/PerfilAd/tabla.php" class="btn btn-primary"style="width:200px;height:35px" >Editar datos del perfil</a>
		 <a href="../../vistas/PerfilAd/cambiar/index.php" class="btn btn-primary"style="width:200px;height:35px" >Cambiar foto de perfill</a><br>
	
	<br>
</html>
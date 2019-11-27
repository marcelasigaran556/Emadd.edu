<?php
include '../../../conexion.php';



 ?>


<!DOCTYPE html>
<html>
<head>
	
	 <meta charset="utf-8">
    <link rel="stylesheet" href="../../bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/registro_encargado.css">
        <link rel="stylesheet" href="../../css/mostrar.css">

	<style type="text/css" media="print">
.nover {display:none}
</style>
	<title>Notal Alumno</title>
	
	<br>
	 <nav class="navbar navbar-expand-lg navbar-light bg-light" >
   <img src="../../../public/img/icono.png" width="60" height="60" class="d-inline-block align-top" alt="">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <br>
  <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-4 mt-lg-0" align="center">
      
	<li class="nav-item">
        <a class="nav-link" href="../PerfilEn/perfil.php">Mi Perfil</a>
      </li>
     	<li class="nav-item">
        <a class="nav-link" href="../docu_pa/docu.php">Documentacion</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="../notas_padre/nopa.php">Notas Alumno</a>
      </li>
		<li class="nav-item ">
        <a class="nav-link" href="../../vistas/calendarizaciones/calen_enca.php">Calendarizacion</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="../acercade/Acerca_de.html">Acerca de</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../../../index.html">Cerrar Sesión</a>
      </li>
    </ul>
  </div>
</nav><br>
	<h1>Bienvenido a la Documentacion de su Hijo</h1>
	<h3>Disfrute su experiencia</h3>
	
	
<script>
var f = new Date();
document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
</script>  
</head>
	
	
	
		
	
	<br><br>
	
	
	<img src="../../img/icono.png" width="200" height="200" align="center" >
	
<body>
<center>
<br>
		
		<?php 
		$sql="SELECT * from documentacion";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
<h2>Documentacion perteneciente a:</h2>
	<h2>Juana Marisol Hernandez Garcia</h2><br>
		<tr align="center">
	<h2>		<td align="center">Id: <?php echo $mostrar['id_doc'] ?></td></h2>
			
		<h2>	<td align="center"> Partida de Nacimiento: <?php echo $mostrar['partida'] ?></td></h2>
			
		<h2>	<td align="center">Copia DUI Responsable: <?php echo $mostrar['dui'] ?></td></h2>
			
		<h2>	<td align="center">Certificado de grado anterior: <?php echo $mostrar['certificado'] ?></td></h2>
			
		<h2>	<td align="center">Carnet de Menoridad: <?php echo $mostrar['carnet'] ?></td></h2>
		
		<h2>	<td align="center">Fecha de entrega de Dumentos: <?php echo $mostrar['facha'] ?></td></h2>
		
	
			
		</tr>
	<?php 
	}
	 ?>
	<br>
	
	
</center>
</body><br>
		
		
	
	<br>
</html>
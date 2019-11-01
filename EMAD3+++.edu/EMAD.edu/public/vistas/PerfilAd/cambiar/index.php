<?php
include ("../../../../conexion.php");
$sql="SELECT * FROM `tbimg` ";
$resultado=mysqli_query($conexion,$sql);
?>
<!doctype html>
<html lang="en">
	<meta charset="UTF-8">
    <link rel="stylesheet" href="../../bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/subir.css">
	   <link rel="stylesheet" href="../../css/estiloss.css">
<head>
    <br>
    <title>Cambiar Foto de Perfil</title>
</head>
<body>
<h1>Cambiar Foto de Perfil</h1><br>
<form action="cargar.php" method="POST" enctype="multipart/form-data">
    Nombre <input type="file" name="img" ><br><br>
    <input type="submit" value="Aceptar">
</form>
<hr>
<?php
while ($data=mysqli_fetch_array($resultado))
{
    echo '<img src="'.$data['ruta'].'" width="200px" height="200px">';
}
?><br><br><br>
	<a href="../perfil.php" class="btn btn-primary"style="width:200	px;height:35px" >Regresar</a><br>
</body>
</html>
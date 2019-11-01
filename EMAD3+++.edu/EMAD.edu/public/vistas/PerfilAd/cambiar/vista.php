<?php
include ("../../../../conexion.php");
$sql="SELECT * FROM `tbimg` ";
$resultado=mysqli_query($conexion,$sql);?>

<!doctype html>
<html lang="en">
	<meta charset="UTF-8">
    <link rel="stylesheet" href="../../bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/subir.css">
	   <link rel="stylesheet" href="../../css/estiloss.css">
<head>
    <br>
    <title> Contenido </title>
</head>
<body>
<h1>Contenido de Materias</h1><br>

<hr>

</body>
</html>
<?php

while ($data=mysqli_fetch_array($resultado))
{
    echo '<img src="'.$data['ruta'].'" width="200px" height="200px">';
}
?>
<br><br><br>
<a href="../Materia_docente/materia.html" class="btn btn-primary"style="width:200	px;height:35px" >Regresar</a><br>
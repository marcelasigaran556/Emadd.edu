<?php
include '../../../conexion.php';

  
    $telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$correo = $_POST['correo'];

$query = "UPDATE alumnos SET telefono='$telefono', direccion='$direccion', correo='$correo' WHERE 1";

$resultado =  mysqli_query($conexion, $query);
if ($resultado) {
 echo 
	'<script>
                    alert("Felicidades, Datos Modificados");
                    window.history.go(-1);
                    </script>';
}else{
    echo 'Error al modificar datos ';
}
  mysqli_close($conexion);
?>
<?php
include '../../../conexion.php';
$nombre_encargado = $_POST["nombre_encargado"];
$apellido_encargado = $_POST["apellido_encargado"];
$dui_encargado = $_POST["dui_encargado"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];


$insertar = "INSERT INTO encargado(nombre_encargado, apellido_encargado, dui_encargado, direccion, telefono ) VALUES ('$nombre_encargado', '$apellido_encargado', '$dui_encargado', '$direccion', '$telefono')";

$resultado =  mysqli_query($conexion, $insertar);
if ("$resultado") {
 echo 
	'<script>
                    alert("Felicidades, Registro Ingresado Exitosamente");
                    window.history.go(-1);
                    </script>';
}else{
    echo 'Error al guardar datos ';
}
  mysqli_close($conexion);

    ?>




<?php
include ("../../../conexion.php");


$nombre_alumno = $_POST["nombre_alumno"];
$grado = $_POST["grado"];
$periodo = $_POST["periodo"];


$insertar = "INSERT INTO matricula(nombre_alumno, grado, periodo) VALUES ('$nombre_alumno', '$grado', '$periodo')";



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

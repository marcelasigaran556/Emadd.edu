<?php
include '../../../conexion.php';
$nombre = $_POST["nombre_alumnos"];
$apellido = $_POST["apellido_alumno"];
$discapacidad = $_POST["discapacidad_alumno"];
$nivel_discapacidad = $_POST["nivel_discapacidad"];
$encargado = $_POST["encargado_alumno"];
$direccion =$_POST["direccion"];
$telefono = $_POST["telefono"];
$alergico_a = $_POST["alergico_a"];
$genero = $_POST["genero"];
$usuario = $_POST["usuario"];
$clave= $_POST["clave"];


$insertar = "INSERT INTO alumno(nombre_alumnos, apellido_alumno, discapacidad_alumno, nivel_discapacidad, encargado_alumno, direccion, telefono, alergico_a,genero, usuario, clave) VALUES ('$nombre', '$apellido', '$discapacidad', '$nivel_discapacidad', '$encargado',  '$direccion', '$telefono', '$alergico_a','$genero', '$usuario', '$clave')";

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

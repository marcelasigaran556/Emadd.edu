<?php

//CONECTAR A LA BASE DE DATOS
include '../../../conexion.php';

//ALMACENA DATOS DE USUARIO Y CONTRASEÑA
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];


//CONSULTA PARA COMPARAR DATOS
$consulta="SELECT * FROM alumno WHERE usuario='$usuario' AND clave='$clave'";
$resultado = mysqli_query($conexion, $consulta);

//valida que los campos sean iguales
$filas=mysqli_num_rows($resultado);

//si los campos existen en la BD accede sino da mensaje de error
if ($filas>0){
    header("location:../menu_alumno/menu_alumno.html");
}else{
    echo '<script>
                    alert("Error en la autentificacion por favor verifique que el usuario y contraseña esten escritos correctamente");
                    window.history.go(-1);
                    </script>';
}
mysqli_free_result($resultado);

//cerrar la conexion
mysqli_close($conexion);
?>
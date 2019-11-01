<?php
include '../../../conexion.php';
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$dui = $_POST["dui"];
$usuario = $_POST["usuario"];
$clave= $_POST["clave"];





$insertar = "INSERT INTO docente(nombre, apellido, direccion, telefono, dui, usuario, clave ) VALUES ('$nombre', '$apellido', '$direccion', '$telefono', '$dui', '$usuario', '$clave')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM docente WHERE usuario = '$usuario'");
        if(mysqli_num_rows($verificar_usuario)>0){
            echo '<script>
                    alert("El nombre de usuario ya a sido utilizado por favor intente con otro nombre de usuario");
                    window.history.go(-1);
                    </script>';
            exit;
        }

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

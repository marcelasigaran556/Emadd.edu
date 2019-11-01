<?php

$type = $_FILES['material']['type'];
$tmp_name = $_FILES['material']['tmp_name'];
$name = $_FILES['material']['name'];

$nuevo_path="../../Material_lecciones/".$name;

move_uploaded_file($tmp_name,$nuevo_path);

$array=explode('.',$nuevo_path);

$ext= end($array);

 $insertar = "INSERT INTO subir_material (material) 
        VALUES ('$nuevo_path')";

/*
$uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile'][size];
echo $_FILES[uploadedfile][name];
if ($_FILES[uploadedfile][size]>400000)
{$msg=$msg."El archivo es mayor que 400KB, debes reduzcirlo antes de subirlo<BR>";
$uploadedfileload="false";}

if (!($_FILES[uploadedfile][type] =="image/pjpeg/" OR $_FILES[uploadedfile][type] =="image/gif" OR $_FILES[uploadedfile][type] =="image/png"))
{$msg=$msg." Tu archivo tiene que ser JPG o GIF o PNG. Otros archivos no son permitidos<BR>";
$uploadedfileload="false";}

$file_name=$_FILES[uploadedfile][name];
$add="uploads/$file_name";
if($uploadedfileload=="true"){

if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $add)){
echo " Ha sido subido satisfactoriamente";
}else{echo "Error al subir el archivo";}

}else{echo $msg;}
echo "<img src='uploads/$file_name' >";
*/
?>
  
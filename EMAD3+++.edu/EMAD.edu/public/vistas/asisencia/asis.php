<?php 
	$link =mysqli_connect("localhost","root","");
	if($link){
		mysqli_select_db($link , "pruevafinal");
	}
	$checkbox=$_POST['checkbox'];
	foreach($checkbox as $llave => $valor) {
		$ficha2="INSERT INTO asistencia SET nombre='$valor' ";
		$ejecutar_insertar_ficha2 = mysqli_query($link , $ficha2);
	}
 ?>
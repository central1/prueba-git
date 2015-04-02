<?php
session_start();
extract($_REQUEST);

$nombre_imagen = $_FILES['imagen']['name'];
$tipo_imagen   = $_FILES['imagen']['type'];
$tamano_imagen = $_FILES['imagen']['size'];
$carpeta = 'images/';
		
if ($nombre_imagen!="")
{ 
	if ( (strpos($tipo_imagen , "jpeg") || strpos($tipo_imagen , "jpg") || strpos($tipo_imagen , "png") || strpos($tipo_imagen , "gif")) && ($tamano_imagen < 10048576) ) 
	{
		copy($_FILES['imagen']['tmp_name'], $carpeta.$nombre_imagen);
		$_SESSION['img_editor']=$nombre_imagen;	
		echo"<script language='javascript'>window.location='phpimageeditor/index.php?imagesrc=". urlencode('../images/'.$nombre_imagen.'') ."'</script>";
	}
	else
	{  
		echo "<script languaje='javascript'>alert('ERROR EN LA IMAGEN')</script>";
		echo"<script language='javascript'>window.location='../admin/editor_nuevo.php?menu=inicio.php'</script>";	
	}	
}
else
{
	echo "<script languaje='javascript'>alert('FALTA IMAGEN')</script>";
	echo"<script language='javascript'>window.location='../admin/editor_nuevo.php?menu=inicio.php'</script>";	
}
?>
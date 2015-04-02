<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 
mysql_select_db($database_con_admin, $con_admin);
$sql=("SELECT imagen2,imagen,orden,titulo FROM categoria WHERE id_ca=".$_REQUEST["id_ca"]."");
$r=mysql_query($sql, $con_admin) or die(mysql_error());
$filas=mysql_fetch_array($r);
	  
$imgn=$filas['imagen'];	
$imgn2=$filas['imagen2'];	
	  
$carpeta='../img/categoria/';
	 
if (file_exists($carpeta.$imgn))
{
	unlink($carpeta.$imgn);
}
if (file_exists($carpeta.$imgn2))
{
	unlink($carpeta.$imgn2);
}
		      
mysql_select_db($database_con_admin, $con_admin);
mysql_query("DELETE FROM categoria WHERE id_ca=".$_REQUEST["id_ca"]."", $con_admin);			 

echo  "<script language='javascript'>window.location='categoria.php?menu=galeria.php'</script>";

?>

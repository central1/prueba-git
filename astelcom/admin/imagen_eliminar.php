<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 
mysql_select_db($database_con_admin, $con_admin);
$sql=("SELECT imagen,orden FROM imagenes WHERE id_im=".$_REQUEST["id_im"]."");
$r=mysql_query($sql, $con_admin) or die(mysql_error());
$filas=mysql_fetch_array($r);
	  
$imgn=$filas['imagen'];	
	  
$carpeta='../img/imagenes/';
	 
if (file_exists($carpeta.$imgn))
{
	unlink($carpeta.$imgn);
}
		      
mysql_select_db($database_con_admin, $con_admin);
mysql_query("DELETE FROM imagenes WHERE id_im=".$_REQUEST["id_im"]."", $con_admin);			 

echo  "<script language='javascript'>window.location='imagenes_oi.php?menu=promociones.php'</script>";

?>

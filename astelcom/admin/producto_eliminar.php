<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 
mysql_select_db($database_con_admin, $con_admin);
$sql=("SELECT imagen,orden,titulo FROM productos WHERE id_p=".$_REQUEST["id_p"]."");
$r=mysql_query($sql, $con_admin) or die(mysql_error());
$filas=mysql_fetch_array($r);
	  
$imgn=$filas['imagen'];	
	  
$carpeta='../img/productos/';
	 
if (file_exists($carpeta.$imgn))
{
	unlink($carpeta.$imgn);
}
		      
mysql_select_db($database_con_admin, $con_admin);
mysql_query("DELETE FROM productos WHERE id_p=".$_REQUEST["id_p"]."", $con_admin);			 

echo  "<script language='javascript'>window.location='productos.php?menu=galeria.php'</script>";

?>

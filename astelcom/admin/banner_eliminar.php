<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 
mysql_select_db($database_con_admin, $con_admin);
$sql=("SELECT * FROM banner WHERE id_banner=".$_REQUEST["id_banner"]."");
$r=mysql_query($sql, $con_admin) or die(mysql_error());
$filas=mysql_fetch_array($r);
	  
$imgn=$filas['imagen'];	
	  
$carpeta='../img/banner/';
	 
if (file_exists($carpeta.$imgn))
{
	unlink($carpeta.$imgn);
}
		      
mysql_select_db($database_con_admin, $con_admin);
mysql_query("DELETE FROM banner WHERE id_banner=".$_REQUEST["id_banner"]."", $con_admin);			 

echo  "<script language='javascript'>window.location='banner.php?menu=inicio.php'</script>";

?>

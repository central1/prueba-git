<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 
mysql_select_db($database_con_admin, $con_admin);
$sql=("SELECT imagen,orden,url FROM redes WHERE id_red=".$_REQUEST["id_red"]."");
$r=mysql_query($sql, $con_admin) or die(mysql_error());
$filas=mysql_fetch_array($r);
	  
$imgn=$filas['imagen'];	
	  
$carpeta='../img/redes/';
	 
if (file_exists($carpeta.$imgn))
{
	unlink($carpeta.$imgn);
}
		      
mysql_select_db($database_con_admin, $con_admin);
mysql_query("DELETE FROM redes WHERE id_red=".$_REQUEST["id_red"]."", $con_admin);			 

echo  "<script language='javascript'>window.location='redes.php?menu=inicio.php'</script>";

?>

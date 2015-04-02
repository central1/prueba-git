<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 
mysql_select_db($database_con_admin, $con_admin);
$sql=("SELECT imagen,titulo,orden FROM relevantes WHERE id_re=".$_REQUEST["id_re"]."");
$r=mysql_query($sql, $con_admin) or die(mysql_error());
$filas=mysql_fetch_array($r);
	  
$imgn=$filas['imagen'];	
	  
$carpeta='../img/relevantes/';
	 
if (file_exists($carpeta.$imgn))
{
	unlink($carpeta.$imgn);
}
		      
mysql_select_db($database_con_admin, $con_admin);
mysql_query("DELETE FROM relevantes WHERE id_re=".$_REQUEST["id_re"]."", $con_admin);			 

echo  "<script language='javascript'>window.location='relevantes.php?menu=inicio.php'</script>";

?>

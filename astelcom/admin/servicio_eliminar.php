<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 
mysql_select_db($database_con_admin, $con_admin);
$sql=("SELECT orden,titulo,descripcion FROM servicios WHERE id_se=".$_REQUEST["id_se"]."");
$r=mysql_query($sql, $con_admin) or die(mysql_error());
	      
mysql_select_db($database_con_admin, $con_admin);
mysql_query("DELETE FROM servicios WHERE id_se=".$_REQUEST["id_se"]."", $con_admin);			 

echo  "<script language='javascript'>window.location='servicio.php?menu=servicios.php&seccion=Servicios'</script>";

?>

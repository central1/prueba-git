<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 
mysql_select_db($database_con_admin, $con_admin);
$sql=("SELECT * FROM promociones WHERE id_pro=".$_REQUEST["id_pro"]."");
$r=mysql_query($sql, $con_admin) or die(mysql_error());
	      
mysql_select_db($database_con_admin, $con_admin);
mysql_query("DELETE FROM promociones WHERE id_pro=".$_REQUEST["id_pro"]."", $con_admin);			 

echo  "<script language='javascript'>window.location='paquetes.php?menu=promociones.php'</script>";

?>

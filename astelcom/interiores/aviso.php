<?php require_once('../Connections/con_admin.php');  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/General.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!---------------------------Fuentes--------------->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800|Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!---------------------------Fuentes--------------->
<!---------------------------Metas--------------->


<!--<meta name="title" content="" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="site" content="" />-->


<!---------------------------Metas--------------->

<!---------------------------favicon--------------->
<link type="image/x-icon" href="../img/favicon/favicon.ico" rel="icon" />
<!---------------------------favicon--------------->
<?php
mysql_select_db($database_con_admin, $con_admin);
$qry88 = "SELECT * FROM op1 WHERE seccion='Pestana'";
$r88 = mysql_query($qry88, $con_admin) or die(mysql_error());
if ( $r88 !== false && mysql_num_rows($r88) > 0 ) 
{
	$a88 = mysql_fetch_assoc($r88);
	$ids88= stripslashes($a88['id_op']);
	$title88 = stripslashes($a88['titulo']);
	$desc88 = stripslashes($a88['descripcion']);
	$sec88 = stripslashes($a88['seccion']);
}
?>
<title><?php echo $title88?></title>

<!-- InstanceBeginEditable name="doctitle" -->




<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<!--oncontextmenu="return false" ondragstart="return false" onmousedown="return false" onselectstart="return false"-->
<body>

<!-------------------------PLANTILLA----------------------------->
  
<div id="header">
   <div id="head"> <a href="../index.php"><img src="../img/logo/logo.png" width="270" height="115" border="0" /></a>
   
   <?php
mysql_select_db($database_con_admin, $con_admin);
$qry = "SELECT * FROM op1 WHERE seccion='seccion1'";
$r = mysql_query($qry, $con_admin) or die(mysql_error());
if ( $r !== false && mysql_num_rows($r) > 0 ) 
{
	$a2 = mysql_fetch_assoc($r);
	$ids= stripslashes($a2['id_op']);
	$title = stripslashes($a2['titulo']);
	$subtitle = stripslashes($a2['subtitulo']);
	$tex1= stripslashes($a2['tex1']);
	$sec = stripslashes($a2['seccion']);
	
}
?>
      <div id="frase">
      <h1> "<?php echo $title;?>" </h1>
      <h3><?php echo $subtitle;?><span><?php echo $tex1;?></span></h3>
      </div>
  
   </div>
  
  
      <div id="botonera" style="border-bottom:5px solid #333;">
   		 <div id="menu">
  		 	   <ul>
		 	   <li style="border-right:#0069C5 1px solid;"><a href="../index.php"><img src="../imagenes/inicio/home.png" width="24" height="17" border="0" /></a></li>
			    <li style="border-right:#0069C5 1px solid;"><a href="quienes.php">QUIÉNES SOMOS</a></li>
				 <li style="border-right:#0069C5 1px solid;"><a href="galeriadeproductos.php" style="width:190px;">GALERÍA DE PRODUCTOS</a></li>
				  <li style="border-right:#0069C5 1px solid;"><a href="promociones.php">PROMOCIONES</a></li>
		 		  <li style="border-right:#0069C5 1px solid;"><a href="servicios.php" style="width:68px;">SERVICIOS</a></li>
		 		  <li><a href="contacto.php" style="width:84px;">CONTACTO</a></li>
				   </ul>
  		  </div>
		 
      </div>
</div>
 
 
 
 
 
 <!-------------------------PLANTILLA----------------------------->

<div id="contenido">
<!-- InstanceBeginEditable name="content" -->
<div id="titulos_seccion">
<?php                
mysql_select_db($database_con_admin, $con_admin);
$qry3 = "SELECT * FROM op1 where seccion='seccion14'";
$r3 = mysql_query($qry3, $con_admin) or die(mysql_error());
if ( $r3 !== false && mysql_num_rows($r3) > 0 ) 
{
	$a3 = mysql_fetch_assoc($r3);
	$ids3 = stripslashes($a3['id_op']);
	$tit3 = stripslashes($a3['titulo']);
	$desc3 = stripslashes($a3['descripcion']);
}
?>  

<h2><?php echo $tit3;?></h2>
</div>

<!------------------------------->

<div id="aviso">

<p><?php echo $desc3?></strong></p>


</div>





 <!-- InstanceEndEditable -->
 </div>
 
<!------------------PIE---------------------------->
  <div id="pie">
  <?php
mysql_select_db($database_con_admin, $con_admin);
$qry99 = "SELECT * FROM op1 WHERE seccion='seccion3'";
$r99 = mysql_query($qry99, $con_admin) or die(mysql_error());
if ( $r99 !== false && mysql_num_rows($r99) > 0 ) 
{
	$a99 = mysql_fetch_assoc($r99);
	$ids99= stripslashes($a99['id_op']);
	$title99 = stripslashes($a99['titulo']);
	$subtitle99 = stripslashes($a99['subtitulo']);
	$desc99 = stripslashes($a99['descripcion']);
	$sec99 = stripslashes($a99['seccion']);
	
}
?>
<?php
mysql_select_db($database_con_admin, $con_admin);
$qryt = "SELECT * FROM op1 WHERE seccion='seccion14'";
$rt = mysql_query($qryt, $con_admin) or die(mysql_error());
if ( $rt !== false && mysql_num_rows($rt) > 0 ) 
{
	$at = mysql_fetch_assoc($rt);
	$idst= stripslashes($at['id_op']);
	$titlet = stripslashes($at['titulo']);
	$desct = stripslashes($at['descripcion']);
	$sect = stripslashes($at['seccion']);	
}
?>
      <div id="izquierda">
	  <p><?php echo $subtitle99;?><a href="aviso.php"><?php echo $titlet;?></a></p>
	  
	  </div>
  	   
	   
	   
	   <div id="derecha"> 
       <?php              
mysql_select_db($database_con_admin, $con_admin);
$qry2 = "SELECT * FROM redes ORDER BY orden ASC";
$r2 = mysql_query($qry2, $con_admin) or die(mysql_error());
if ( $r2 !== false && mysql_num_rows($r2) > 0 ) 
{
	while ($a2 = mysql_fetch_assoc($r2))
	{
		$ima = stripslashes($a2['imagen']); 
		$orden = stripslashes($a2['orden']); 
		$url = stripslashes($a2['url']);
		$ids = stripslashes($a2['id_red']);  
?>		
       <a href="#" target="_blank"><img src="../img/redes/<?php echo $ima; ?>" width="28" height="27" border="0" /></a>
	   <?php
	}
}
?>
	   
	   </div>
  </div>
  
  
    <!------------------PIE---------------------------->



</body>
<!-- InstanceEnd --></html>

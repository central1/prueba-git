<?php require_once('../Connections/con_admin.php'); ?>
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
$qry77 = "SELECT * FROM op1 WHERE seccion='seccion6'";
$r77 = mysql_query($qry77, $con_admin) or die(mysql_error());
if ( $r77 !== false && mysql_num_rows($r77) > 0 ) 
{
	$a77 = mysql_fetch_assoc($r77);
	$ids77= stripslashes($a77['id_op']);
	$title77 = stripslashes($a77['titulo']);
}
?>
<h2><?php echo $title77;?></h2>
</div>


<!------------------------------->

<div id="galeria1">   
 <!---------------COPIAR PARA COLOCAR NUEVO CUADRO----------------------------->
 <?php   
$cont=0;           
mysql_select_db($database_con_admin, $con_admin);
$qry2 = "SELECT * FROM categoria ORDER BY orden ASC";
$r2 = mysql_query($qry2, $con_admin) or die(mysql_error());
if ( $r2 !== false && mysql_num_rows($r2) > 0 ) 
{
	while ($a2 = mysql_fetch_assoc($r2))
	{
		$titulo = stripslashes($a2['titulo']); 
		$ima = stripslashes($a2['imagen']); 
		$ima2 = stripslashes($a2['imagen2']); 
		$orden = stripslashes($a2['orden']); 
		$ids = stripslashes($a2['id_ca']);  
		$cont=$cont+1;
if ($cont==1 or $cont==2 or $cont==3){		
?>		
<div id="producto1">
            
            
           	  <div id="texto_product1">
                <h3><?php echo $titulo;?></h3>
<?php if($ima2==""){?>                
                <?php } else {?>
				 <img src="../img/categoria/<?php echo $ima2?>" width="101" height="32" />
				<?php }?>
                </div>
                
                <div id="imagen_producto">
                <img src="../img/categoria/<?php echo $ima?>" width="215" height="130" />
            </div>
                
                <div id="ver_producto" onclick="location.href='conmutadores.php?id_ca=<?php echo $ids;?>'" style="cursor:pointer;">
                
                <p><a href="conmutadores.php?id_ca=<?php echo $ids;?>">Ver Productos</a>	</p>
                
                </div>
            </div>
<?php } else { ?>
<div id="producto2">
            
            
           	  <div id="texto_product1">
                <h3><?php echo $titulo;?></h3>
                <?php if($ima2==""){?>                
                <?php } else {?>
				 <img src="../img/categoria/<?php echo $ima2?>" width="101" height="32" />
				<?php }?>
                </div>
                
                <div id="imagen_producto">
                <img src="../img/categoria/<?php echo $ima?>" width="215" height="130" />
            </div>
                
                <div id="ver_producto" onclick="location.href='conmutadores.php?id_ca=<?php echo $ids;?>'" style="cursor:pointer;">
                
                <p><a href="conmutadores.php?id_ca=<?php echo $ids;?>">Ver Productos</a>	</p>
                
                </div>
            </div>
<?php } if ($cont==4){$cont=0;} ?>            
	   <?php
	}
}
?>
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

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
<link type="image/x-icon" href="imagenes/favicon.ico" rel="icon" /> 



<!--Este link contiene opciones para el slider > http://www.egrappler.com/jquery-image-slider-plugin-with-cool-transition-effects-quake-slider/-->
 <link href="css/quake.slider.css" rel="stylesheet" type="text/css" />
 
<!--Esta es la hoja de estilos para modificar los estilos de los bullets y flechas-->
 <link href="skins/plain/quake.skin.css" rel="stylesheet" type="text/css" />
<!--Esta es la hoja de estilos para modificar los estilos de los bullets y flechas-->
    
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/quake.slider-min.js" type="text/javascript"></script>
    <script src="js/demo.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.quake-slider').quake({ 
				effects: ['slideLeft'],<!--Esta opción es para elegir un efecto de transición (se recomienda usar solo estos efectos fade, slideLeft o slideRight)-->
                thumbnails: false,<!--Esta opción es para que se vizualice la imagen en pequeño a la hora de colocar el cursor sobre los bullets-->
                animationSpeed: 300,<!--Esta opción es para darle tiempo a la transición de la imagen-->
                navAlwaysVisible: true,<!--Esta opción es para que siempre esten visibles los controladores--> 
				pauseTime:9000, <!--Esta opción es para darle tiempo a la imagen que se esta vizualizando-->
				hoverpause: true,<!--Esta opción es para para que se detenga la animación mientras esta el cursor sobre la imagen-->

            });

        });
    </script>
<style type="text/css">
body {
	background-color: #FFF;
	background-repeat: repeat-x;
	margin:0px;
}
</style>
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
<div id="promo_cont">
<!-------------------------------------->
<?php
mysql_select_db($database_con_admin, $con_admin);
$qry = "SELECT * FROM op1 WHERE seccion='seccion7'";
$r = mysql_query($qry, $con_admin) or die(mysql_error());
if ( $r !== false && mysql_num_rows($r) > 0 ) 
{
	$a2 = mysql_fetch_assoc($r);
	$ids= stripslashes($a2['id_op']);
	$title = stripslashes($a2['titulo']);
	$desc = stripslashes($a2['descripcion']);
	$sec = stripslashes($a2['seccion']);
	
}
?>
	<div id="titulo_promo">
    <h2><?php echo $title;?></h2>
    </div>
  <img src="../imagenes/promociones/sombrafull.jpg" width="1000" height="10" />
  <div id="promo2">
  <h3><?php echo $desc;?></h3>
  </div>
  
  
  <div id="cuadros_promo">
  <?php  
  $count=0;            
mysql_select_db($database_con_admin, $con_admin);
$qry2 = "SELECT * FROM imagenes ORDER BY orden ASC";
$r2 = mysql_query($qry2, $con_admin) or die(mysql_error());
if ( $r2 !== false && mysql_num_rows($r2) > 0 ) 
{
	while ($a2 = mysql_fetch_assoc($r2))
	{
		$ima = stripslashes($a2['imagen']); 
		$orden = stripslashes($a2['orden']); 
		$ids = stripslashes($a2['id_im']);  
		$count=$count+1;
		if ($count==1 or $count==2){
?>
  <div id="sombra_abajo">
  	<div id="cuadro1_promo">
      <img src="../img/imagenes/<?php echo $ima;?>" width="246" height="244" />
    </div>
    <img src="../imagenes/promociones/sombra_promo.jpg" width="258" height="9" />
    </div>
    <?php } else {?>
	<div id="sombra_abajo2">
  	<div id="cuadro1_promo">
      <img src="../img/imagenes/<?php echo $ima;?>" width="246" height="244" />
    </div>
    <img src="../imagenes/promociones/sombra_promo.jpg" width="258" height="9" />
    </div>
	<?php } if ($count==3){$count=0;}?>
    <?php 
	}
}
	?>
    
  
 
  </div>
  
  
  
 <div id="paquetes">
 <?php
mysql_select_db($database_con_admin, $con_admin);
$qry22 = "SELECT * FROM op1 WHERE seccion='seccion8'";
$r22 = mysql_query($qry22, $con_admin) or die(mysql_error());
if ( $r22 !== false && mysql_num_rows($r22) > 0 ) 
{
	$a22 = mysql_fetch_assoc($r22);
	$ids22= stripslashes($a22['id_op']);
	$title22 = stripslashes($a22['titulo']);
	$sec22 = stripslashes($a22['seccion']);
	
}
?>
 <h2><?php echo $title22;?></h2>
 
 </div>
  
  
  <div id="paquetes_promo">
  
  <!--------------------COPIAR PROMOCION------------------------>
  <?php   
  $count=0;           
mysql_select_db($database_con_admin, $con_admin);
$qry11 = "SELECT * FROM promociones ORDER BY orden ASC";
$r11 = mysql_query($qry11, $con_admin) or die(mysql_error());
if ( $r11 !== false && mysql_num_rows($r11) > 0 ) 
{
	while ($a11 = mysql_fetch_assoc($r11))
	{
	$ids11 = stripslashes($a11['id_pro']); 
	$orden11 = stripslashes($a11['orden']);
	$titulo11 = stripslashes($a11['titulo']);
	$descripcion11 = stripslashes($a11['descripcion']);
	$texto1 = stripslashes($a11['tex1']);
	$texto2 = stripslashes($a11['tex2']);
	$texto3 = stripslashes($a11['tex3']);
	$texto4 = stripslashes($a11['tex4']);
	$texto5 = stripslashes($a11['tex5']);
	$texto6 = stripslashes($a11['tex6']);
	$count=$count+1;
	if ($count==1 or $count==2){  
?>
	<div id="promos1">
    <h2><?php echo $titulo11;?></h2>
    <p><?php echo $descripcion11;?></p>
    <h3><strong><?php echo $texto1;?></strong><br />
	  <strong><?php echo $texto2;?></strong><br />
	<?php echo $texto3;?></h3>
    <h4><?php echo $texto4;?></h4>
    <h5><?php echo $texto5;?></h5>
    <h6><?php echo $texto6;?></h6>
    
    </div>	
<?php } else {?>
	<div id="promos2">
    <h2><?php echo $titulo11;?></h2>
    <p><?php echo $descripcion11;?></p>
    <h3><strong><?php echo $texto1;?></strong><br />
	  <strong><?php echo $texto2;?></strong><br />
	<?php echo $texto3;?></h3>
    <h4><?php echo $texto4;?></h4>
    <h5><?php echo $texto5;?></h5>
    <h6><?php echo $texto6;?></h6>
    
    </div>
<?php } if ($count==3){$count=0;}?>
	   <?php
	}
}
?>
    <!--------------------COPIAR PROMOCION------------------------>
    <?php
mysql_select_db($database_con_admin, $con_admin);
$qry90 = "SELECT * FROM op1 WHERE seccion='seccion9'";
$r90 = mysql_query($qry90, $con_admin) or die(mysql_error());
if ( $r90 !== false && mysql_num_rows($r90) > 0 ) 
{
	$a90= mysql_fetch_assoc($r90);
	$ids90= stripslashes($a90['id_op']);
	$title90 = stripslashes($a90['titulo']);
	$subtitle90 = stripslashes($a90['subtitulo']);
	$ima90 = stripslashes($a90['imagen']);
	$ima290 = stripslashes($a90['imagen2']);		
}
?>
    <div id="leyenda">
  <p><strong><?php echo $subtitle90?></strong></p>
    </div>
  </div>
  <div id="promo_final">
  	<div id="llamanos">
     <h2><?php echo $title90?></h2><br />
		<br />

     <img src="../img/op/<?php echo $ima90?>" width="317" height="94" />
     </div>
     
    <img src="../img/op/<?php echo $ima290?>" width="166" height="278" />
     <?php
mysql_select_db($database_con_admin, $con_admin);
$qry01 = "SELECT * FROM op1 WHERE id_op='20'";
$r01 = mysql_query($qry01, $con_admin) or die(mysql_error());
if ( $r01 !== false && mysql_num_rows($r01) > 0 ) 
{
	$a01 = mysql_fetch_assoc($r01);
	$ids01 = stripslashes($a01['id_op']); 
	$tit5 = stripslashes($a01['titulo']);
	$subtit5  = stripslashes($a01['subtitulo']);
	$desc5 = stripslashes($a01['descripcion']);
	$text1 = stripslashes($a01['tex1']);
	$text2 = stripslashes($a01['tex2']);
	$text3 = stripslashes($a01['tex3']);

}
?>
    <div id="promo_datos">
    <h3><?php echo $tit5;?></h3>
    <h2><?php echo $subtit5;?></h2>
    
    <p><?php echo $desc5;?></p>
    
    <h4><strong><?php echo $text1;?></strong><br />
	  <strong><?php echo $text2;?></strong><br />
	<?php echo $text3;?></h4>
    
    </div>
       
    </div>
  
  
  <!-------------------------------------->
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

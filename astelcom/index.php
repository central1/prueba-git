<?php require_once('Connections/con_admin.php'); ?>
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
<link type="image/x-icon" href="img/favicon/favicon.ico" rel="icon" />
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



<link href="css/estilos.css" rel="stylesheet" type="text/css" />
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



<link href="bxslider/lib/jquery.bxslider.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="bxslider/js/jquery.bxslider.min.js"></script>
<script type="text/javascript">
var a = jQuery.noConflict();
	a(document).ready(function(){
	a('.slider1').bxSlider({
		adaptiveHeight: true,
		auto:true,
		autoStart: true,
		controls:true,
		maxSlides: 9,
		minSlides: 9,
		moveSlides: 1,
		pager: false,
		pause: 5000,
		slideMargin:0,
    	slideWidth: 1000
	});
});

</script>
<!-- InstanceEndEditable -->
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<!--oncontextmenu="return false" ondragstart="return false" onmousedown="return false" onselectstart="return false"-->
<body>

<!-------------------------PLANTILLA----------------------------->
  
<div id="header">
   <div id="head"> <a href="index.php"><img src="img/logo/logo.png" width="270" height="115" border="0" /></a>
   
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
		 	   <li style="border-right:#0069C5 1px solid;"><a href="index.php"><img src="imagenes/inicio/home.png" width="24" height="17" border="0" /></a></li>
			    <li style="border-right:#0069C5 1px solid;"><a href="interiores/quienes.php">QUIÉNES SOMOS</a></li>
				 <li style="border-right:#0069C5 1px solid;"><a href="interiores/galeriadeproductos.php" style="width:190px;">GALERÍA DE PRODUCTOS</a></li>
				  <li style="border-right:#0069C5 1px solid;"><a href="interiores/promociones.php">PROMOCIONES</a></li>
		 		  <li style="border-right:#0069C5 1px solid;"><a href="interiores/servicios.php" style="width:68px;">SERVICIOS</a></li>
		 		  <li><a href="interiores/contacto.php" style="width:84px;">CONTACTO</a></li>
				   </ul>
  		  </div>
		 
      </div>
</div>
 
 
 
 
 
 <!-------------------------PLANTILLA----------------------------->

<div id="contenido">
<!-- InstanceBeginEditable name="content" -->




<!---------------------BANNER----------------------------->
<div class="quake-slider">
<div class="quake-slider-images">
<?php              
mysql_select_db($database_con_admin, $con_admin);
$qry2 = "SELECT * FROM banner ORDER BY orden ASC";
$r2 = mysql_query($qry2, $con_admin) or die(mysql_error());
if ( $r2 !== false && mysql_num_rows($r2) > 0 ) 
{
	while ($a2 = mysql_fetch_assoc($r2))
	{
	
		$ima = stripslashes($a2['imagen']);   
?>		
<img src="img/banner/<?php echo $ima;?>" width="1000" height="289" />

	   <?php
	}
}
?>
</div>
    </div>
<img src="imagenes/inicio/sombra_banner.jpg" width="994" height="14" alt="" title="" />
<!---------------------BANNER----------------------------->

	<div id="texto_inicio">
	<div id="texto_titulo">
    <?php
mysql_select_db($database_con_admin, $con_admin);
$qry77 = "SELECT * FROM op1 WHERE seccion='seccion2'";
$r77 = mysql_query($qry77, $con_admin) or die(mysql_error());
if ( $r77 !== false && mysql_num_rows($r77) > 0 ) 
{
	$a77 = mysql_fetch_assoc($r77);
	$ids77= stripslashes($a77['id_op']);
	$title77 = stripslashes($a77['titulo']);
	$desc77 = stripslashes($a77['descripcion']);
	$sec77 = stripslashes($a77['seccion']);
	
}
?>
	<h2><?php echo $title77;?></h2>
	</div>
	
	<p><?php echo $desc77;?></p>
	
	</div>

<div id="cuadros">
    <?php   
	$count=0;           
mysql_select_db($database_con_admin, $con_admin);
$qry66 = "SELECT * FROM relevantes ORDER BY orden ASC";
$r66 = mysql_query($qry66, $con_admin) or die(mysql_error());
if ( $r66 !== false && mysql_num_rows($r66) > 0 ) 
{
	while ($a66 = mysql_fetch_assoc($r66))
	{
		$ima66 = stripslashes($a66['imagen']); 
		$orden66 = stripslashes($a66['orden']); 
		$tit66 = stripslashes($a66['titulo']); 
		$ids66 = stripslashes($a66['id_re']);
		$count=$count+1;
		if($count==1 or $count==2 or $count==3){  
?>		
       <div id="cuadro1">
        <img src="img/relevantes/<?php echo $ima66;?>" width="169" height="100" />
        <h2><?php echo $tit66;?></h2>
        </div>
        <?php } else {?>
		<div id="cuadro2">
        <img src="img/relevantes/<?php echo $ima66;?>" width="169" height="100" />
        <h2><?php echo $tit66;?></h2>
        </div>
		<?php } if ($count==4) {$count=0;}?>
	   <?php
	}
}
?>
    </div>
   <div id="slider_marcas">
   
      <div class="slider1">
      
      <?php              
mysql_select_db($database_con_admin, $con_admin);
$qry55 = "SELECT * FROM logos ORDER BY orden ASC";
$r55 = mysql_query($qry55, $con_admin) or die(mysql_error());
if ( $r55 !== false && mysql_num_rows($r55) > 0 ) 
{
	while ($a55 = mysql_fetch_assoc($r55))
	{
		$ima55 = stripslashes($a55['imagen']); 
		$orden55 = stripslashes($a55['orden']);  
		$ids55 = stripslashes($a55['id_lo']);  
?>
<div class="slide">
<img src="img/logos/<?php echo $ima55;?>" width="108" height="35" />
               </div>
<?php
	}
}
?>                     
      </div>
   
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
	  <p><?php echo $subtitle99;?><a href="interiores/aviso.php"><?php echo $titlet;?></a></p>
	  
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
       <a href="#" target="_blank"><img src="img/redes/<?php echo $ima; ?>" width="28" height="27" border="0" /></a>
	   <?php
	}
}
?>
	   
	   </div>
  </div>
  
  
    <!------------------PIE---------------------------->



</body>
<!-- InstanceEnd --></html>

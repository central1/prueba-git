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
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' debe contener un correo electrónico.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' debe contener un número de teléfono.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es requerido.\n'; }
    } if (errors) alert('Favor de llenar correctamente el siguiente(s) campo(s):\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
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
<?php
mysql_select_db($database_con_admin, $con_admin);
$qry = "SELECT * FROM op1 WHERE seccion='seccion11'";
$r = mysql_query($qry, $con_admin) or die(mysql_error());
if ( $r !== false && mysql_num_rows($r) > 0 ) 
{
	$a2 = mysql_fetch_assoc($r);
	$ids= stripslashes($a2['id_op']);
	$title = stripslashes($a2['titulo']);
	$subtitle = stripslashes($a2['subtitulo']);
	$te1 = stripslashes($a2['descripcion']);
	$te2 = stripslashes($a2['descripcion2']);
	$te3 = stripslashes($a2['url']);
	$te4 = stripslashes($a2['tex1']);
	$te5 = stripslashes($a2['tex2']);
	$te6 = stripslashes($a2['tex3']);
	$sec = stripslashes($a2['seccion']);
	
}
?>
<div id="titulos_seccion">
<h2><?php echo $title;?></h2>
</div>

<!------------------------------->

<div id="contacto">

<div id="formulario">
<table width="516" border="0">
  <tr>
    <td width="510"><form id="form1" name="form1" method="post" action="send.php">
      <table width="511" border="0">
        <tr>
          <td colspan="2" align="center"><strong class="rojo_frase"><?php echo $subtitle;?></strong></td>
          </tr>
        <tr>
          <td width="153">&nbsp;</td>
          <td width="347">&nbsp;</td>
        </tr>
        <tr>
          <td align="left" class="texto_formulario"><?php echo $te1;?></td>
          <td><label for="razon"></label>
            <input name="razon" type="text" class="formulario1" id="razon" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="left" class="texto_formulario"><?php echo $te2;?></td>
          <td><label for="contacto"></label>
            <input name="contacto" type="text" class="formulario1" id="contacto" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="left" class="texto_formulario"><?php echo $te3;?></td>
          <td><label for="telefono"></label>
            <input name="telefono" type="text" class="formulario1" id="telefono" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="left" class="texto_formulario"><?php echo $te4;?></td>
          <td><label for="email"></label>
            <input name="email" type="text" class="formulario1" id="email" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="left" class="texto_formulario"><?php echo $te5;?></td>
          <td><label for="ciudad"></label>
            <input name="ciudad" type="text" class="formulario1" id="ciudad" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="left" class="texto_formulario"><?php echo $te6;?></td>
          <td><label for="mensaje"></label>
            <textarea name="mensaje" class="mensaje" id="mensaje"></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input name="enviar" type="submit" class="enviar" id="enviar" onclick="MM_validateForm('razon','','R','contacto','','R','telefono','','RisNum','email','','RisEmail','ciudad','','R');return document.MM_returnValue" value="Enviar" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</div>
<?php
mysql_select_db($database_con_admin, $con_admin);
$qry12 = "SELECT * FROM op1 WHERE seccion='seccion12'";
$r12 = mysql_query($qry12, $con_admin) or die(mysql_error());
if ( $r12 !== false && mysql_num_rows($r12) > 0 ) 
{
	$a12 = mysql_fetch_assoc($r12);
	$ids12= stripslashes($a12['id_op']);
	$title12 = stripslashes($a12['titulo']);
	$desc12 = stripslashes($a12['descripcion']);
	$ima12 = stripslashes($a12['imagen']);
	$sec12 = stripslashes($a12['seccion']);
	
}
?>
  <div id="derecha_contacto">
  <img src="../img/op/<?php echo $ima12;?>" width="284" height="386" />
  
  <h2><?php echo $title12;?></h2>
  <p><?php echo $desc12?></p>
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

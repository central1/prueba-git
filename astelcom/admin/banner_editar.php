<?php require_once('../Connections/con_admin.php'); 
require_once('paginacion/paginator.class.php'); ?>
<?php
extract($_REQUEST);
session_start();
if (isset($_SESSION["id"]))
{
	$id=$_SESSION["id"];
}
else
{
	echo"<script language='javascript'>window.location='index.php'</script>";
}
extract($_REQUEST);
mysql_select_db($database_con_admin, $con_admin);
$qry2 = "SELECT * FROM banner WHERE id_banner='$id_banner'";
$r2 = mysql_query($qry2, $con_admin) or die(mysql_error());
if ( $r2 !== false && mysql_num_rows($r2) > 0 ) 
{
	$a2 = mysql_fetch_assoc($r2);
	$ima = stripslashes($a2['imagen']); 
	$ids = stripslashes($a2['id_banner']); 
	$orden = stripslashes($a2['orden']); 
	$url = stripslashes ($a2['url']); 
}
$menu='inicio.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Generaladmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link type="image/x-icon" href="../img/favicon/favicon.ico" rel="icon" /> 
<!-- InstanceBeginEditable name="doctitle" -->
<!-- InstanceEndEditable -->
<title>Administrador de Contenidos</title>
<!-- InstanceBeginEditable name="head" --><style>
#fotitio
{
	position:absolute;
	top:233px;
	right:175px;
}
</style>
<!-- InstanceEndEditable -->
<link href="estilos_admin.css" rel="stylesheet" type="text/css" />
<link href="estilos_admin_int.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<div id="wrapper">
	<div id="head">
		<div id="head_men">
            <img src="imagenes/logo.jpg" alt="" width="214" height="73" border="0" align="absmiddle" />
            <div id="datos">
              <p>
                    <span class="titulo-head2"><span class="titulo-head">Bienvenido</span> | Administrador de Contenidos</span>
                </p>
				<a href="logout.php"><img src="imagenes/cerrar.jpg" width="112" height="27" border="0" /></a>
			</div>
		</div>
	</div>
<div id="botonera">
    	<div id="menus">
    		<div id="menu">
                <ul>
             <li><a href="inicio.php">Inicio</a></li>  
             <li><a href="nosotros.php?menu=nosotros.php">Quiénes Somos</a></li>
             <li><a href="galeria.php">Galería de Productos</a></li>
             <li><a href="promociones.php">Promociones</a></li>
             <li><a href="servicios.php">Servicios</a></li>
             <li><a href="contacto.php">Contacto</a></li>   
                </ul>
            </div>
		</div>
    </div>
	<div id="content">
    	<div id="content2">
    		<!-- InstanceBeginEditable name="Contenido" -->
<table width="989" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="19" colspan="3" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="249" align="center" valign="top"><table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th colspan="3" align="left" scope="col"><table width="272" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th width="74" align="left" scope="col"><span class="textoboldnaranja">Banner</span></th>
                <th width="25" align="center" valign="middle" scope="col"><img src="imagenes/triangulo.jpg" alt="" width="6" height="13" /></th>
                <th width="173" align="left" class="textogris" scope="col">Actualizar Banner</th>
              </tr>
            </table></th>
            <th width="474" align="right" valign="top" scope="col">&nbsp;</th>
          </tr>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="banner_editar.php">     
       <input name="id_banner" type="hidden" value="<?php echo $ids; ?>" />  
       <input name="imagen" type="hidden" value="<?php echo $ima; ?>" />  
          <tr>
            <th scope="col">&nbsp;</th>
            <th colspan="2" scope="col">&nbsp;</th>
            <th align="left" valign="top" scope="col">&nbsp;</th>
          </tr>
          <tr>
           <th align="left" scope="col"><span class="texto">Orden</span></th>
            <th colspan="2" align="left" scope="col">&nbsp;&nbsp;&nbsp;<label for="orden"></label>
              <input name="orden" value="<?php echo $orden;?>" type="text" id="orden" size="3" /></th>
          </tr>
          <tr>
            <th width="82" scope="col">&nbsp;</th>
            <th colspan="2" scope="col">&nbsp;</th>
            <th width="474" align="right" valign="top" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <td height="141" valign="top"><table width="82" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="82" height="25" align="left" valign="top" class="texto">Imágen</td>
              </tr>
               <tr>
                <td class="texto">&nbsp;</td>
              </tr>
			   <tr>
                <td class="texto">&nbsp;</td>
              </tr>
			  <tr>
                <td width="82" height="25" align="left" valign="top" class="texto">URL</td>
              </tr>
              <tr>
                <td valign="middle" class="texto">&nbsp;</td>
              </tr>
              <tr>
                <td valign="middle" class="texto">&nbsp;</td>
              </tr>
              <tr>
                <td valign="middle" class="texto">&nbsp;</td>
              </tr>
              </table></td>
            <td width="16">&nbsp;</td>
            <td width="428" valign="top"><table width="428" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="428" height="25" align="left" valign="top" class="texto"><input name="imagen" type="file" class="boton2" id="imagen" style="width:400px;"/></td>
              </tr>
              <tr>
                <td height="10" class="texto"><span class="pie-naranja"><strong>Tamaño de Imágen: </strong></span>1000  x 289px</td>
              </tr>
              <tr>
                <td height="10" class="texto">&nbsp;</td>
              </tr>
              
               <tr>
                <td class="texto"><input type="text" name="url" value="<?php echo $url;?>" size="70"></td>
              </tr>
                  <tr>
                    <td class="texto">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="40" align="left" valign="top" class="texto"><input name="guardar" type="submit" class="boton-formulario" id="guardar" value="Guardar" /></td>
                  </tr>
            </table></td>
            <th width="474" align="center" valign="top" scope="col"><div id="fotitio"><img src="../img/banner/<?php echo $ima; ?>" width="350" height="150" /></div></th>
          </tr></form>
           <tr>
            <th width="82" scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
            <th height="40" align="left" scope="col"><form id="form2" name="form2" method="post" action="banner.php?menu=inicio.php">
              <input type="submit" name="button" id="button" value="Regresar" class="boton-formulario2" />
            </form></th>
            <th width="474" align="right" valign="top" scope="col">&nbsp;</th>
          </tr>
          
        </table></td>
      </tr>
      
    </table>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

<!-- InstanceEndEditable -->
        </div>
    </div>
    <div id="footer">
        <p>Central Interactiva® | División Publicidad Digital</p>
    </div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
if (isset($_POST['guardar']))
{
	extract($_REQUEST);

	$nombre_archivo4 = $_FILES['imagen']['name'];
	$tipo_archivo4   = $_FILES['imagen']['type'];
	$tamano_imagen  = $_FILES['imagen']['size'];
	$archivo = $_FILES['imagen']['tmp_name'];
	$carpeta = '../img/banner/';
		
	if ($nombre_archivo4!="")
	{ 
		if ( (strpos($tipo_archivo4 , "jpeg") || strpos($tipo_archivo4 , "jpg")|| strpos($tipo_archivo4 , "png") || strpos($tipo_archivo4 , "gif")) && ($tamano_imagen < 295000000) ) 
		{
			if (file_exists("../img/banner/" . $imagen))
			{
				unlink($carpeta.$imagen);
			}
			copy($_FILES['imagen']['tmp_name'], $carpeta.$nombre_archivo4);
			extract($_REQUEST);
			mysql_select_db($database_con_admin, $con_admin);
			$qry44 = "UPDATE banner SET imagen='$nombre_archivo4',  orden='$orden' , url='$url' WHERE id_banner='$id_banner'";
			mysql_query($qry44, $con_admin) or die(mysql_error());
			echo "<SCRIPT LANGUAJE='javascript'>window.location='banner.php?menu=inicio.php' </SCRIPT>";	
		}
		else
		{  
			echo "<script languaje='javascript'>alert('ERROR EN LA IMAGEN')</script>";
			echo"<script language='javascript'>window.location='banner_editar.php?id_banner=".$ids."'</script>";	
		}	
	}
	else
	{
			mysql_select_db($database_con_admin, $con_admin);
			$qry44 = "UPDATE banner SET orden='$orden', url='$url' WHERE id_banner='$id_banner'";
			mysql_query($qry44, $con_admin) or die(mysql_error());
			echo "<SCRIPT LANGUAJE='javascript'>window.location='banner.php?menu=inicio.php' </SCRIPT>";
	}
}
?>
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
$qry2 = "SELECT * FROM categoria WHERE id_ca='$id_ca'";
$r2 = mysql_query($qry2, $con_admin) or die(mysql_error());
if ( $r2 !== false && mysql_num_rows($r2) > 0 ) 
{
	$a2 = mysql_fetch_assoc($r2);
	$ids = stripslashes($a2['id_ca']);
	$tit = stripslashes($a2['titulo']);
    $ima = stripslashes($a2['imagen']); 
	$ima2 = stripslashes($a2['imagen2']);  
	$ord = stripslashes($a2['orden']);
}
$menu=$_GET['menu'];
?>
<?php 
include ("ckeditor/ckeditor.php");
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
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
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
  <tr></tr>
  <tr>
    <td align="center" valign="top"><table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="19" colspan="3" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <th colspan="3" align="left" scope="col"><table width="392" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th width="100" align="left" scope="col"><span class="textoboldnaranja">Categoria</span></th>
                <th width="23" align="center" valign="middle" scope="col"><img src="imagenes/triangulo.jpg" alt="" width="6" height="13" /></th>
                <th width="269" align="left" class="textogris" scope="col">     Actualizar</th>
                </tr>
              </table></th>
            <th width="288" align="right" valign="top" scope="col">&nbsp;</th>
          </tr>
          <form id="form1" name="form1" enctype="multipart/form-data" method="post" action="">
          <input name="id_ca" value="<?php echo $ids; ?> " type="hidden" id="id_ca" size="3" />
            <tr>
              <th align="left" scope="col"><span class="texto">Orden</span></th>
              <th colspan="2" align="left" scope="col">&nbsp;&nbsp;&nbsp;
                <label for="orden"></label>
                <input name="orden" value="<?php echo $ord; ?> "type="text" id="orden" size="3" /></th>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>
               <tr>
              <th align="left" scope="col"><span class="texto">Titulo</span></th>
              <th colspan="2" align="left" scope="col">&nbsp;&nbsp;&nbsp;
                <label for="titulo"></label>
                <input name="titulo" value="<?php echo $tit; ?> "type="text" id="titulo" size="60" /></th>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>               
            <tr>
              <td height="136" valign="top"><table width="82" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="82" height="25" align="left" valign="top" class="texto">Imágen</td>
                </tr>
              </table></td>
              <td>&nbsp;</td>
              <td valign="top"><table width="614" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="614" height="25" align="left" valign="top" class="texto"><input name="imagen" type="file" class="boton2" id="imagen" style="width:400px;"/>
                    <br/>
                    <br/>
                    <br/>
                    <img src="../img/categoria/<?php echo $ima; ?>" width="100" height="100"/></td>
                </tr>
                <tr>
                  <td height="10" class="texto"><span class="pie-naranja"><strong>Tamaño de Imágen: </strong></span>215 x 130 px</td>
                </tr>
                <tr>
                  <td height="10" class="texto">&nbsp;</td>
                </tr>
                <tr>
                  <td class="texto"><strong></strong><strong></strong><strong></strong><strong></strong><strong></strong></td>
                </tr>
                <tr>
                  <td height="49" align="left" valign="top" class="texto">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="136" valign="top"><table width="82" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="82" height="25" align="left" valign="top" class="texto">Logo</td>
                  </tr>
                </table></td>
              <td width="16">&nbsp;</td>
              <td width="614" valign="top"><table width="614" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="614" height="25" align="left" valign="top" class="texto"><input name="imagen2" type="file" class="boton2" id="imagen2" style="width:400px;"/>
                      <br/><br/><br/><img src="../img/categoria/<?php echo $ima2; ?>" width="100" height="100"/>
                  </td>
                  </tr>
                <tr>
                  <td height="10" class="texto"><span class="pie-naranja"><strong>Tamaño del logo2: </strong></span>101 x 32 px</td>
                  </tr>
                <tr>
                  <td height="10" class="texto">&nbsp;</td>
                  </tr>
                <tr>
                  <td class="texto"><strong></strong><strong></strong><strong></strong><strong></strong><strong></strong></td>
                </tr>
                
                <tr>
                  <td height="49" align="left" valign="top" class="texto"><input name="guardar" type="submit" class="boton-formulario" id="guardar" value="Guardar" /></td>
                </tr>
                </table></td>
            </tr>
            </form>
          <tr>
            <th width="82" scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
            <th height="40" align="left" scope="col"><form id="form2" name="form2" method="post" action="categoria.php?menu=galeria.php">
              <input type="submit" name="button" id="button" value="Regresar" class="boton-formulario2" />
            </form></th>
            <th width="288" align="right" valign="top" scope="col">&nbsp;</th>
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
	$carpeta = '../img/categoria/';
	
	$nombre_archivo2 = $_FILES['imagen2']['name'];
	$tipo_archivo2   = $_FILES['imagen2']['type'];
	$tamano_imagen2  = $_FILES['imagen2']['size'];
	$archivo2 = $_FILES['imagen2']['tmp_name'];
	
	if ($nombre_archivo4!="")
	{ 
		if ( (strpos($tipo_archivo4 , "jpeg") || strpos($tipo_archivo4 , "png") || strpos($tipo_archivo4 , "gif")) && ($tamano_imagen < 2097152) ) 
		{
			if (file_exists("../img/categoria/" . $imagen))
			{
				unlink($carpeta.$imagen);
			}
			copy($_FILES['imagen']['tmp_name'], $carpeta.$nombre_archivo4);
			mysql_select_db($database_con_admin, $con_admin);
			$qry44 = "UPDATE categoria SET titulo='$titulo',orden='$orden',imagen='$nombre_archivo4' WHERE id_ca='$id_ca'";	
			mysql_query($qry44, $con_admin) or die(mysql_error());
			echo "<SCRIPT LANGUAJE='javascript'>window.location='categoria.php?menu=galeria.php'</SCRIPT>";
		}
		else
		{  
			echo "<script languaje='javascript'>alert('ERROR EN LA IMAGEN')</script>";
			echo"<script language='javascript'>window.location='categoria.php?menu=galeria.php'</script>";					
		}
	}
	
	// Segunda Imagen
	
	if ($nombre_archivo2!="")
	{ 
		if ( (strpos($tipo_archivo2 , "jpeg") || strpos($tipo_archivo2 , "png") || strpos($tipo_archivo2 , "gif")) && ($tamano_imagen2 < 2097152) ) 
		{
			if (file_exists("../img/categoria/" . $ima2))
			{
				unlink($carpeta.$ima2);
			}
			copy($_FILES['imagen2']['tmp_name'], $carpeta.$nombre_archivo2);
			mysql_select_db($database_con_admin, $con_admin);
			$qry44 = "UPDATE categoria SET titulo='$titulo',orden='$orden'imagen2='$nombre_archivo2' WHERE id_ca='$id_ca'";	
			mysql_query($qry44, $con_admin) or die(mysql_error());
			echo "<SCRIPT LANGUAJE='javascript'>window.location='categoria.php?menu=galeria.php'</SCRIPT>";
		}
		else
		{  
			echo "<script languaje='javascript'>alert('ERROR EN LA IMAGEN')</script>";
			echo"<script language='javascript'>window.location='categoria.php?menu=galeria.php'</script>";					
		}
	}
	
	else
	{
		mysql_select_db($database_con_admin, $con_admin);
		$qryss = "UPDATE categoria SET titulo='$titulo',orden='$orden' WHERE id_ca='$id_ca'";
		mysql_query($qryss, $con_admin) or die(mysql_error());
		echo "<SCRIPT LANGUAJE='javascript'>window.location='categoria.php?menu=galeria.php'</SCRIPT>";		
	}	
}
?>
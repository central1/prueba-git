<?php require_once('../Connections/con_admin.php'); ?>
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
?>
<?php
mysql_select_db($database_con_admin, $con_admin);
$qryt = "SELECT * FROM op1 WHERE seccion='seccion14'";
$rt = mysql_query($qryt, $con_admin) or die(mysql_error());
if ( $rt !== false && mysql_num_rows($rt) > 0 ) 
{
	$at = mysql_fetch_assoc($rt);
	$ids= stripslashes($at['id_op']);
	$title = stripslashes($at['titulo']);
	$desc = stripslashes($at['descripcion']);
	$sec = stripslashes($at['seccion']);	
}
?>
<?php 
include ("ckeditor/ckeditor.php");
?>
<?php
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
<!-- InstanceBeginEditable name="head" --><script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
    <td height="249" align="center" valign="top"><table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th colspan="3" align="left" scope="col"><table width="703" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th align="left" scope="col"><span class="textoboldnaranja"><?php echo $title;?></span> &nbsp;<img src="imagenes/triangulo.jpg" alt="" width="6" height="13" /><span class="textoboldgris">&nbsp;Actualizar</span></th>
              </tr>
            </table></th>
            <th width="288" align="right" valign="top" scope="col">&nbsp;</th>
          </tr>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="">    
       <input name="id_op" type="hidden" value="<?php echo $ids; ?>" />  
       <input name="seccion" type="hidden" value="<?php echo $sec; ?>" />
          <tr>
            <td height="166" valign="top"><table width="82" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th width="82" height="32" align="left" valign="middle" class="texto" scope="col">Título</th>
              </tr>         
              <tr>
                <td height="30" align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="20" align="left" valign="middle" class="texto">Descripción</td>
              </tr>
              <tr>
                <td align="left" valign="middle" class="texto">&nbsp;</td>
              </tr>
              </table></td>
            <td width="16">&nbsp;</td>
            <td width="614" valign="top"><table width="614" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th width="614" height="32" align="left" valign="middle" class="texto" scope="col">
                  <input type="text" name="titulo" id="titulo" style="width:500px;" value="<?php echo $title;?>" /></th>
              </tr>              
              <tr>
                <td height="30" align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="20" align="left" valign="middle" class="texto"><?php
                $CKEditor = new CKEditor();
                $CKEditor->returnOutput = true;
                $code = $CKEditor->editor("descripcion","$desc");
                echo $code;
              ?></td>
              </tr>
              <tr>
                <td align="left" valign="middle" class="texto"><label for="url"></label></td>
              </tr>
              <tr>
                <td height="30" align="left" valign="middle" class="texto"><input name="Guardar" type="submit" class="boton-formulario" id="Guardar" value="Guardar" /></td>
              </tr>
            </table></td>
            </tr>
            </form>
           <tr>
             <th scope="col">&nbsp;</th>
             <th colspan="2" scope="col">&nbsp;</th>
             <th align="right" valign="top" scope="col">&nbsp;</th>
           </tr>
           <tr>
            <th width="82" scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
            <th align="left" scope="col"><form id="form2" name="form2" method="post" action="inicio.php">
              <input name="button" type="submit" class="boton-formulario2" id="button" value="Regresar" />
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
if (isset($_POST['Guardar']))
{
			mysql_select_db($database_con_admin, $con_admin);
			$qry44 = "UPDATE op1 SET titulo='$titulo',descripcion='$descripcion' WHERE id_op='$id_op'";	
			mysql_query($qry44, $con_admin) or die(mysql_error());
			echo "<SCRIPT LANGUAJE='javascript'>window.location='inicio.php'</SCRIPT>";
}
?>
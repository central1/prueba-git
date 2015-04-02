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
$qry2 = "SELECT * FROM promociones WHERE id_pro='$id_pro'";
$r2 = mysql_query($qry2, $con_admin) or die(mysql_error());
if ( $r2 !== false && mysql_num_rows($r2) > 0 ) 
{
	$a2 = mysql_fetch_assoc($r2);
	$ids = stripslashes($a2['id_pro']); 
	$orden = stripslashes($a2['orden']);
	$titulo = stripslashes($a2['titulo']);
	$desc = stripslashes($a2['descripcion']);
	$texto1 = stripslashes($a2['tex1']);
	$texto2 = stripslashes($a2['tex2']);
	$texto3 = stripslashes($a2['tex3']);
	$texto4 = stripslashes($a2['tex4']);
	$texto5 = stripslashes($a2['tex5']);
	$texto6 = stripslashes($a2['tex6']);
}
$menu='promociones.php';
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
                <th width="100" align="left" scope="col"><span class="textoboldnaranja">Logos</span></th>
                <th width="23" align="center" valign="middle" scope="col"><img src="imagenes/triangulo.jpg" alt="" width="6" height="13" /></th>
                <th width="269" align="left" class="textogris" scope="col">     Actualizar logos</th>
                </tr>
              </table>
              <p>&nbsp;</p></th> 
            <th width="288" align="right" valign="top" scope="col">&nbsp;</th>
          </tr>
          <form id="form1" name="form1" enctype="multipart/form-data" method="post" action="">
          <input name="id_ar" value="<?php echo $ids; ?> " type="hidden" id="id_ar" size="3" />
            <tr>
            
              <th align="left" scope="col"><span class="texto">Orden</span></th>
              <th colspan="2" align="left" scope="col">&nbsp;&nbsp;&nbsp;
                <label for="orden"></label>
                <input name="orden" value="<?php echo $orden; ?> "type="text" id="orden" size="3" /></th>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>           
            <tr>
            <tr>
              <th align="left" scope="col"><span class="texto">Titulo</span></th>
              <th colspan="2" align="left" scope="col">&nbsp;&nbsp;&nbsp;
                <label for="titulo"></label>
                <input name="titulo" value="<?php echo $titulo; ?> "type="text" id="titulo" size="60" /></th>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>           
              <tr>
              <th align="left" scope="col"><span class="texto">Descripcion</span></th>
              
                <td height="20" align="left" valign="middle" class="texto"><?php
                $CKEditor = new CKEditor();
                $CKEditor->returnOutput = true;
                $code = $CKEditor->editor("descripcion", "$desc");
                echo $code;
              ?></td>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>
              <tr>
              <th align="left" scope="col"><span class="texto"><strong>Precio Rojo</strong></span></th>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>               
              <tr>
              <th align="left" scope="col"><span class="texto">$</span></th>
              <th colspan="2" align="left" scope="col">&nbsp;&nbsp;&nbsp;
                <label for="tex1"></label>
                <input name="tex1" value="<?php echo $texto1; ?> "type="text" id="tex1" size="10" /></th>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>           
              <tr>
              <th align="left" scope="col"><span class="texto">Precio Rojo</span></th>
              <th colspan="2" align="left" scope="col">&nbsp;&nbsp;&nbsp;
                <label for="tex2"></label>
                <input name="tex2" value="<?php echo $texto2;?> "type="text" id="tex2" size="10" /></th>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>           
              <tr>
              <th align="left" scope="col"><span class="texto">+IVA Rojo</span></th>
              <th colspan="2" align="left" scope="col">&nbsp;&nbsp;&nbsp;
                <label for="tex3"></label>
                <input name="tex3" value="<?php echo $texto3; ?> "type="text" id="tex3" size="10" /></th>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>          
              <tr>
              <th align="left" scope="col"><span class="texto"><strong>Precio Amarillo</strong></span></th>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>  
              <tr>
              <th align="left" scope="col"><span class="texto">Con Camara</span></th>
              <th colspan="2" align="left" scope="col">&nbsp;&nbsp;&nbsp;
                <label for="tex4"></label>
                <input name="tex4" value="<?php echo $texto4; ?> "type="text" id="tex4" size="10" /></th>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>           
              <tr>
              <th align="left" scope="col"><span class="texto">Precio Amarillo</span></th>
              <th colspan="2" align="left" scope="col">&nbsp;&nbsp;&nbsp;
                <label for="tex5"></label>
                <input name="tex5" value="<?php echo $texto5; ?> "type="text" id="tex5" size="10" /></th>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>
               <tr>
              <th align="left" scope="col"><span class="texto">+IVA amarillo</span></th>
              <th colspan="2" align="left" scope="col">&nbsp;&nbsp;&nbsp;
                <label for="tex6"></label>
                <input name="tex6" value="<?php echo $texto6; ?> "type="text" id="tex6" size="10" /></th>
              </tr>
            <tr>
              <th width="82" scope="col">&nbsp;</th>
              <th colspan="2" scope="col">&nbsp;</th>
              </tr>           
              <td width="16">&nbsp;</td>
              <td width="614" valign="top"><table width="614" border="0" cellspacing="0" cellpadding="0">
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
            <!--<th width="82" scope="col">&nbsp;</th>-->
            <th scope="col">&nbsp;</th>
            <th height="40" align="left" scope="col"><form id="form2" name="form2" method="post" action="paquetes.php?menu=promociones.php">
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
			mysql_select_db($database_con_admin, $con_admin);
			$qry44 = "UPDATE promociones SET orden='$orden',titulo='$titulo',descripcion='$descripcion',tex1='$tex1',tex2='$tex2',tex3='$tex3',tex4='$tex4',tex5='$tex5',tex6='$tex6' WHERE id_pro=".$ids."";
			mysql_query($qry44, $con_admin) or die(mysql_error());	
			echo"<script language='javascript'>window.location='paquetes.php?menu=".$menu."'</script>";
		
}
?>
<?php //require_once('../Connections/con_admin.php');   ?>
<?php
extract($_REQUEST);
session_start();
if (isset($_SESSION["id"]))
{
	$id=$_SESSION["id"];
}
else
{
	/*echo"<script language='javascript'>window.location='index.php'</script>";*/
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template_menu.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link type="image/x-icon" href="../img/favicon/favicon.ico" rel="icon" /> 
<!-- InstanceBeginEditable name="doctitle" -->
<!-- InstanceEndEditable -->
<title>Administrador de Contenidos</title>
<!-- InstanceBeginEditable name="head" -->
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
             <li><a href="nosotros.php">Quiénes Somos</a></li>             
             <li><a href="servicios.php">Servicios</a></li>
             <li><a href="abogados.php">Abogados</a></li>
             <li><a href="publicaciones.php">Publicaciones</a></li>
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
    <td height="145" align="center" valign="top"><table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr></tr>
  <tr>
    <td height="19" colspan="3" align="left" valign="top">&nbsp;</td>
  </tr>
          <tr>
            <th colspan="3" align="left" scope="col"><table width="392" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th width="173" align="left" scope="col"><span class="textoboldnaranja">Editor Imágenes</span></th>
                <th width="22" align="center" valign="middle" scope="col"><img src="imagenes/triangulo.jpg" alt="" width="6" height="13" /></th>
                <th width="197" align="left" class="textogris" scope="col">Nueva Imagen</th>
              </tr>
            </table></th>
            <th width="288" align="right" valign="top" scope="col">&nbsp;</th>
          </tr>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="../editor/editor_nuevo2.php">  
          <tr>
            <th width="82" scope="col">&nbsp;</th>
            <th colspan="2" scope="col">&nbsp;</th>
            <th width="288" align="right" valign="top" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <td valign="top"><table width="82" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="82" height="25" align="left" valign="top" class="texto">Imagen</td>
              </tr>
              <tr>
                <td height="31" class="texto">&nbsp;</td>
              </tr>
              <tr>
                <td height="30" class="texto">&nbsp;</td>
              </tr>
            </table></td>
            <td width="16">&nbsp;</td>
            <td width="614" valign="top"><table width="614" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="614" height="25" align="left" valign="top" class="texto"><input name="imagen" type="file" class="boton2" id="imagen" style="width:400px;"/></td>
              </tr>
              <tr>
                <td height="31" class="texto">&nbsp;</td>
              </tr>
              <tr>
                <td height="40" align="left" valign="top" class="texto"><input name="guardar" type="submit" class="boton-formulario" id="guardar" value="Editar" /></td>
              </tr>
            </table></td>
            <th width="288" align="right" valign="top" scope="col">&nbsp;</th>
          </tr> </form>
           <tr>
            <th width="82" scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
            <th height="40" align="left" scope="col"><form id="form2" name="form2" method="post" action="inicio.php?menu=inicio.php">
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
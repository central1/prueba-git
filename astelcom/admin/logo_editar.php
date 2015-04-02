<?php require_once('../Connections/con_admin.php');?>
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
$menu='inicio.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link type="image/x-icon" href="../img/favicon/favicon.ico" rel="icon" /> 
<!-- TemplateBeginEditable name="doctitle" -->
<!-- TemplateEndEditable -->
<title>Administrador de Contenidos</title>
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->

<link href="../admin/estilos_admin.css" rel="stylesheet" type="text/css" />
<link href="../admin/estilos_admin_int.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<div id="wrapper">
	<div id="head">
		<div id="head_men">
            <img src="../admin/imagenes/logo.jpg" alt="" width="214" height="73" border="0" align="absmiddle" />
            <div id="datos">
                <p>
                    <span class="titulo-head2"><span class="titulo-head">Bienvenido</span> | Administrador de Contenidos</span>
                </p>
				<a href="../admin/logout.php"><img src="../admin/imagenes/cerrar.jpg" width="112" height="27" border="0" /></a>
			</div>
		</div>
	</div>
<div id="botonera">
    	<div id="menus">
    		<div id="menu">
                <ul>
                 <li><a href="inicio.php">Inicio</a></li>  
                 <li><a href="nosotros.php">Quiénes Somos</a></li>
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
                <th width="77" align="left" class="textoboldnaranja" scope="col">Logo</th>
                <th width="26" align="right" valign="middle" scope="col"><img src="imagenes/triangulo.jpg" alt="" width="6" height="13" /></th>
                <th width="15" align="left" class="textogris" scope="col">&nbsp;</th>
                <th width="154" align="left" class="textogris" scope="col">Actualizar</th>
              </tr>
            </table></th>
            <th width="288" align="right" valign="top" scope="col">&nbsp;</th>
          </tr>
                <form id="form1" name="form1" enctype="multipart/form-data" method="post" action="logo_editar.php">    
          <tr>
            <th width="82" height="19" scope="col">&nbsp;</th>
            <th colspan="2" scope="col">&nbsp;</th>
            <th width="288" rowspan="2" align="right" valign="top" scope="col"><table width="288" border="0" align="right" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="../img/logo/logo.png" width="30" height="29" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
              </tr>
            </table></th>
          </tr>
          <tr>
            <td valign="top"><table width="82" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th width="82" height="32" align="left" valign="bottom" class="texto" scope="col">Imágen</th>
              </tr>         
              <tr>
                <td height="30" align="left">&nbsp;</td>
              </tr>
              <tr>
              </tr>
              <tr>
                <td height="30" align="left" class="texto">&nbsp;</td>
              </tr>
            </table></td>
            <td width="16">&nbsp;</td>
            <td width="614" valign="top"><table width="614" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th width="614" height="32" align="left" valign="bottom" class="texto" scope="col"><input name="imagen" type="file" class="boton2" id="imagen" style="width:450px;"/></th>
              </tr>              
              <tr>
                <td height="30" align="left">&nbsp;</td>
              </tr>
              <tr>
                </tr>
              <tr>
                <td height="40" align="left" class="texto"><input name="Guardar" type="submit" class="boton-formulario" id="Guardar" value="Guardar" /></td>
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
            <th height="40" align="left" scope="col"><form id="form2" name="form2" method="post" action="inicio.php">
              <input name="button2" type="submit" class="boton-formulario2" id="button2" value="Regresar" />
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
if (isset($_POST['Guardar']) ) 
{
		extract($_REQUEST);

	$archivo=$_FILES['imagen'];

$nombrefile=$_FILES['imagen']['name'];
$rutaTemp=$_FILES['imagen']['tmp_name'];
$tipo_Imagen = $_FILES['imagen']['type'];
$nombre = "logo.png";
$rutaNueva="../img/logo/".$nombre;

if ( (strpos($tipo_Imagen, "jpeg") || strpos($tipo_Imagen, "png") || strpos($tipo_Imagen, "ico") || strpos($tipo_Imagen, "gif")))
{ 
	copy ($rutaTemp,$rutaNueva);
	/*echo '<script> alert("SE GUARDO CORRECTAMENTE");</script>';*/
	echo '<SCRIPT LANGUAJE="javascript">
	location.href="inicio.php";
	</SCRIPT>';
}
else
{
	echo '<script> alert("ERROR EN LA IMAGEN");</script>';
	echo '<SCRIPT LANGUAJE="javascript">
	location.href="logo_editar.php";
	</SCRIPT>';	
}

}
?>
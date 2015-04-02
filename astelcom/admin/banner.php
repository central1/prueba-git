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
<link href="paginacion/paginacion.css" rel="stylesheet" type="text/css" />
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
  <tr>
    <td width="989">&nbsp;</td>
  </tr>
  <tr>
    <td height="204" align="center" valign="top"><table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="535" colspan="4" valign="top"><table width="1000" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="7" align="left"><table width="272" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <th width="55" align="left" scope="col"><span class="textoboldnaranja">Inicio</span></th>
                    <th width="25" align="center" valign="middle" scope="col"><img src="imagenes/triangulo.jpg" alt="" width="6" height="13" /></th>
                    <th width="192" align="left" class="textogris" scope="col">Banner</th>
                  </tr>
                </table></td>
                </tr>
              <tr>
                <td height="24" colspan="7" align="right" class="botones"><a href="banner_nuevo.php" class="botones">Nuevo Banner +</a></td>
                </tr>
              <tr>
                <td colspan="6" align="left">
<?php
mysql_select_db($database_con_admin, $con_admin);
$query = "SELECT COUNT(id_banner) FROM banner";
$result = mysql_query($query, $con_admin) or die(mysql_error());
$count = mysql_fetch_row($result);
$pages2= new Paginator; 
$pages2->items_total = $count[0]; //consulta del count
$pages2->mid_range = 3; //cantidad de links a mostrar numero impar 
$pages2->items_per_page = 5; //cantidad de registros por pagina
$pages2->paginate(); 
echo $pages2->display_pages(); //imprimir paginas 
?>                
                </td>
                <td width="171">&nbsp;</td>
                </tr>
              <tr>
                <td height="24" colspan="7" align="center">&nbsp;</td>
                </tr>
              <tr>
                <td width="58" align="left" valign="middle" class="textogris">&nbsp;</td>
                <td width="108" align="left" valign="middle" class="textogris">Orden</td>
                <td width="390" height="9" align="left" valign="middle" class="textogris">Imágen</td>
                <td height="9" colspan="4" align="center" valign="middle">&nbsp;</td>
                </tr>
              <tr>
                <td height="9" colspan="6" align="center" valign="middle">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
<?php              
mysql_select_db($database_con_admin, $con_admin);
$qry2 = "SELECT * FROM banner ORDER BY orden ASC $pages2->limit";
$r2 = mysql_query($qry2, $con_admin) or die(mysql_error());
if ( $r2 !== false && mysql_num_rows($r2) > 0 ) 
{
	while ($a2 = mysql_fetch_assoc($r2))
	{
		$ima = stripslashes($a2['imagen']); 
		$orden = stripslashes($a2['orden']); 
		$ids = stripslashes($a2['id_banner']);  
?>		            
              <tr>
                <td align="left" valign="middle" class="texto">&nbsp;</td>
                <td align="left" valign="middle" class="texto"><?php echo $orden;?>&nbsp;</td>
                <td height="102" align="left" valign="middle" class="texto"><img src="../img/banner/<?php echo $ima; ?>" width="501" height="162" /></td>
                <td width="110" height="102" align="center" valign="middle" ><button class="boton-formulario" onclick="location.href='banner_editar.php?id_banner=<?php echo $ids; ?>&menu=inicio.php'">Actualizar</button></td>
                <td width="115" height="102" align="center" valign="middle" class="texto"><button class="boton-formulario2" onclick="if (confirm('¿Desea eliminar el Banner: <?php echo $ima; ?>?')==true){window.location.href='banner_eliminar.php?id_banner=<?php echo $ids; ?>&menu=inicio.php'}">Eliminar</button></td>
                <td height="102" colspan="2" align="center" valign="middle">&nbsp;</td>
                </tr>
              <tr>
                <td height="9" colspan="6" align="center" valign="middle"><img src="imagenes/plecahorizontal.jpg" alt="" width="600" height="9" /></td>
                <td>&nbsp;</td>
              </tr>
<?php
	}
}
?>              
              <tr>
                <td height="9" colspan="6" align="center" valign="middle">&nbsp;</td>
                <td height="9" align="center" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="40" colspan="6" align="left" valign="middle"><form id="form2" name="form2" method="post" action="inicio.php?menu=inicio.php">
                  <input type="submit" name="button" id="button" value="Regresar" class="boton-formulario2" />
                </form></td>
                <td height="9" align="center" valign="middle">&nbsp;</td>
                </tr>
              <tr>
                <td colspan="6">&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              
              <tr>
                <td colspan="7" align="right" valign="top"></td>
                </tr>
              </table></td>
          </tr>
          </table></td>
      </tr>
    </table>     </td>
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
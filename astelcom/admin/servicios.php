<?php require_once('../Connections/con_admin.php');
session_start();
if (isset($_SESSION["id"]))
{
	$id=$_SESSION["id"];
}
else
{
	echo"<script language='javascript'>window.location='index.php'</script>";
}
$menu='servicios.php';
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
<?php              
mysql_select_db($database_con_admin, $con_admin);
$qry = "SELECT * FROM op1 where seccion='seccion10'";
$r = mysql_query($qry, $con_admin) or die(mysql_error());
if ( $r !== false && mysql_num_rows($r) > 0 ) 
{
	$a = mysql_fetch_assoc($r);
	$ids = mysql_real_escape_string($a['id_op']);
	$tit = mysql_real_escape_string($a['titulo']);
	$secc = mysql_real_escape_string($a['seccion']);
}
?>        
<div id="caja">
	<p class="textoboldnaranja" id="titulo_secciones"><?php echo $tit;?></p>
  	<p id="titulos_actualizar">
    	<img src="imagenes/triangulo.jpg" width="6" height="13" class="triangulo"/><span class="botones"><a href="op1_tdis_editars.php?menu=servicios.php&seccion=<?php echo $secc?>" class="botones"> Actualizar +</a></span>
        <br/><br/>
        <!--<img src="imagenes/triangulo.jpg" width="6" height="13" class="triangulo"/><span class="botones"><a href="nuevo_servicio.php?menu=servicios.php&seccion=Servicios" class="botones"> Nuevo Servicio +</a></span>
    <br/><br/>-->
    	<img src="imagenes/triangulo.jpg" width="6" height="13" class="triangulo"/><span class="botones"><a href="servicio.php?menu=servicios.php&seccion=Servicios" class="botones"> Actualizar Servicio +</a></span>
        <?php              
mysql_select_db($database_con_admin, $con_admin);
$qry1 = "SELECT * FROM op1 where seccion='seccion21'";
$r1 = mysql_query($qry1, $con_admin) or die(mysql_error());
if ( $r1 !== false && mysql_num_rows($r1) > 0 ) 
{
	$a1 = mysql_fetch_assoc($r1);
	$ids1 = mysql_real_escape_string($a1['id_op']);
	$tit1 = mysql_real_escape_string($a1['titulo']);
	$subtit1 = mysql_real_escape_string($a1['titulo']);
	$secc1 = mysql_real_escape_string($a1['seccion']);
}
?>  
<br/><br/>
        <img src="imagenes/triangulo.jpg" width="6" height="13" class="triangulo"/><span class="botones"><a href="op1_tds.php" class="botones"> Actualizar Presupuesto +</a></span>
    </p>
    </div>
<!--FIN DEL ADMIN-->
<div id="caja_end">
	<div id="caja_separador"></div>
 	<br/>
    <img src="imagenes/sombra.jpg" width="999" height="26"/>
</div>
<!-- InstanceEndEditable -->
        </div>
    </div>
    <div id="footer">
        <p>Central Interactiva® | División Publicidad Digital</p>
    </div>
</div>
</body>
<!-- InstanceEnd --></html>
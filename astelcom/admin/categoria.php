<?php require_once('../Connections/con_admin.php'); 
require_once('paginacion/paginator.class.php');?>
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
$menu=$_GET['menu'];
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
<!-- InstanceBeginEditable name="head" -->
<style>
#seccion {
	position:relative;
	width:100px;	
}
#titulo_seccion {
	position:relative;
	width:58px;
	vertical-align:middle;
}
#boton_1 {
	display:inline-block;
	position:relative;
	top:-90px;
	left:650px;
	width:80px;
	height:40px;
}
#boton_2 {
	display:inline-block;
	position:relative;
	top:-90px;
	left:700px;
	width:70px;
	height:40px;
}
#boton_3 {
	display:inline-block;
	position:relative;
	top:-90px;
	left:750px;
	width:60px;
	height:40px;
}
#boton_regresar {
	position:relative;
	width:80px;
	height:40px;
	left: 10px;
}
#titulo_orden span{
	padding:0 75px;
	height:10px;
	vertical-align:middle;
}
#titulo_imagen span{
	padding:0 120px;
	height:10px;
	vertical-align:middle;
}
#titulo_1 span{
	padding:0 90px;
	height:10px;
	vertical-align:middle;
}
.img_banner{
	position:relative;
	padding:0 10px;
	vertical-align:middle;
}
.nuevo{
    position:relative;
    left: 800px
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
<div id="caja">
	<p class="textoboldnaranja" name="titulo_seccion">Categorias</p>&nbsp;
        <p id="titulos_actualizar">
    		<img src="imagenes/triangulo.jpg" width="6" height="13" class="triangulo"/>
                <span class="textogris">&nbsp;Actualizar</span>
    	</p>
</div>
<?php
mysql_select_db($database_con_admin, $con_admin);
$query = "SELECT COUNT(id_ca) FROM categoria";
$result = mysql_query($query, $con_admin) or die(mysql_error());
$count = mysql_fetch_row($result);
$pages2= new Paginator; 
$pages2->items_total = $count[0]; //consulta del count
$pages2->mid_range = 3; //cantidad de links a mostrar numero impar 
$pages2->items_per_page = 4; //cantidad de registros por pagina
$pages2->paginate(); 
echo $pages2->display_pages(); //imprimir paginas 
?>  
                <div class="nuevo">
                    <a href="categoria_nuevo.php?menu=galeria.php"><font color="#000000">Nueva Categoria +</font></a>
                </div>
<div id="caja">
	<p id="titulo_orden">
    	<span class="textogris">Orden</span>
    </p>
    <p id="titulo_imagen">
    	<span class="textogris">Imágen</span>
    </p>
</div>
<?php              
mysql_select_db($database_con_admin, $con_admin);
$qry2 = "SELECT * FROM categoria ORDER BY orden ASC $pages2->limit";
$r2 = mysql_query($qry2, $con_admin) or die(mysql_error());
if ( $r2 !== false && mysql_num_rows($r2) > 0 ) 
{
	while ($a2 = mysql_fetch_assoc($r2))
	{
		$ima = stripslashes($a2['imagen']);
		$ima2 = stripslashes($a2['imagen2']); 
		$orden = stripslashes($a2['orden']); 
		$ids = stripslashes($a2['id_ca']);  
?>		
<div id="caja">
    <div id="caja_separador"><img src="imagenes/plecahorizontal.jpg" alt="" width="800" height="9"/ class="pleca_separador"></div>
    <br/>
	<p id="titulo_1">
    	<span class="texto"><?php echo $orden;?></span>
    </p>
    <img src="../img/categoria/<?php echo $ima; ?>" width="330" height="135" class="img_banner"/>
    
</div>
<div id="boton_1">
	<button class="boton-formulario" onclick="location.href='categoria_editar.php?id_ca=<?php echo $ids; ?>&menu=galeria.php'">Actualizar</button>
</div>
<div id="boton_2">
	<button class="boton-formulario2" onclick="if (confirm('¿Desea eliminar la categoria: <?php echo $ima; ?>?')==true){window.location.href='categoria_eliminar.php?id_ca=<?php echo $ids; ?>&menu=geleria.php'}">Eliminar</button>
</div>
<div id="boton_3">
	<button class="boton-formulario" onclick="location.href='productos.php?id_ca=<?php echo $ids; ?>&menu=geleria.php'">Productos</button>
</div>
<?php
	}
}
?>
<form id="form2" name="form2" method="post" action="galeria.php?menu=galeria.php">
<div id="boton_regresar">
<input type="submit" name="button" id="button" value="Regresar" class="boton-formulario2" />
</div>
</form>
<br/>
<!--FIN DEL ADMIN-->
<div id="caja_end">
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
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
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="nuevo_paquete.php">
<div id="caja">
	<p class="textoboldnaranja" id="titulo_seccion" name="titulo_seccion">Paquete</p>
        <p id="titulos_actualizar">
    		<img src="imagenes/triangulo.jpg" width="6" height="13" class="triangulo"/><span class="textogris">Nuevo</span>
    	</p>
</div>
<div id="caja_archivos">
	<p id="seccion" class="texto">Orden</p>
  	<p id="caja3">
    	<span><input name="orden" class="demos" placeholder="Orden:" type="text" id="orden" size="3"/></span>
        <br />
    </p>
</div>
<div id="caja_archivos">
	<p id="seccion" class="texto">Titulo</p>
  	<p id="caja3">
    	<span><input name="titulo" class="demos" placeholder="Titulo:" type="text" id="titulo" size="60"/></span>
        <br />
    </p>
</div>
<div id="caja_archivos">
	<p id="seccion" class="texto">Descripcion</p>
    	<span><?php
                $CKEditor = new CKEditor();
                $CKEditor->returnOutput = true;
                $code = $CKEditor->editor("descripcion");
                echo $code;
              ?></span>
        <br />
        </p>
</div>	
<div id="caja_archivos">
	<p id="seccion" class="texto"><strong>Precio Rojo</strong></p><br/>
	<p id="seccion" class="texto">$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  	<p id="caja3">
    	<span><input name="tex1" class="demos" placeholder="Texto1:" type="text" id="tex1" size="10"/></span>
        <br />
    </p>
</div>
<div id="caja_archivos">
	<p id="seccion" class="texto">Precio Rojo&nbsp;&nbsp;&nbsp;&nbsp;</p>
  	<p id="caja3">
    	<span><input name="tex2" class="demos" placeholder="Precio:" type="text" id="tex2" size="10"/></span>
        <br />
    </p>
</div>
<div id="caja_archivos">
	<p id="seccion" class="texto">+IVA Rojo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  	<p id="caja3">
    	<span><input name="tex3" class="demos" placeholder="*IVA:" type="text" id="tex3" size="10"/></span>
</div>
<div id="caja_archivos">
	<p id="seccion" class="texto"><strong>Precio Amarillo</strong></p><br/>
	<p id="seccion" class="texto">Con Camara&nbsp;&nbsp;&nbsp;&nbsp;</p>
  	<p id="caja3">
    	<span><input name="tex4" class="demos" placeholder="Texto4:" type="text" id="tex4" size="10"/></span>
        <br />
    </p>
</div>
<div id="caja_archivos">
	<p id="seccion" class="texto">Precio Amarillo</p>
  	<p id="caja3">
    	<span><input name="tex5" class="demos" placeholder="Precio:" type="text" id="tex5" size="10"/></span>
        <br />
    </p>
</div>
<div id="caja_archivos">
	<p id="seccion" class="texto">+IVA Amarillo&nbsp;&nbsp;&nbsp;&nbsp;</p>
  	<p id="caja3">
    	<span><input name="tex6" class="demos" placeholder="*IVA:" type="text" id="tex6" size="10"/></span>
        <br />
    </p>
</div>
<br/>
<p id="boton_1" name="boton_1">
	<input name="guardar" type="submit" class="boton-formulario" id="guardar" value="Guardar" />
</p>
</form>
<form id="form2" name="form2" method="post" action="paquetes.php?menu=promociones.php">
<p id="boton_2">
     <input type="submit" name="button" id="button" value="Regresar" class="boton-formulario2" />
</p>
</form>
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
<?php
if (isset($_POST['guardar']))
{
			mysql_select_db($database_con_admin, $con_admin);
			$qry44 = "INSERT INTO promociones (orden,titulo,descripcion,tex1,tex2,tex3,tex4,tex5,tex6) VALUES ('$orden','$titulo','$descripcion','$tex1','$tex2','$tex3','$tex4','$tex5','$tex6')";
			mysql_query($qry44, $con_admin) or die(mysql_error());
			echo "<SCRIPT LANGUAJE='javascript'>window.location='paquetes.php' </SCRIPT>";	
		}
		
	
?>
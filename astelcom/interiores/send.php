<?php require_once('../Connections/con_admin.php'); ?>
<?php
mysql_select_db($database_con_admin, $con_admin);
$qry = "SELECT * FROM op1 WHERE seccion='seccion15'";
$r = mysql_query($qry, $con_admin) or die(mysql_error());
if ( $r !== false && mysql_num_rows($r) > 0 ) 
{
	$a2 = mysql_fetch_assoc($r);
	$ids= stripslashes($a2['id_op']);
	$cor = stripslashes($a2['subtitulo']);
	
}
?>
<?php
$mail=$cor; //Este es el correo al que va ir direccionado
//////////////////////////////////////////////////////////////////////////////
$razon = $_POST['razon'];  
$contacto = $_POST['contacto'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$ciudad = $_POST['ciudad'];
$mensaje = $_POST['mensaje']; //Estos son los nombres de los campos
//////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////

 $thank="gracias.php"; 		//Este direcciona al gracias
 
//////////////////////////////////////////////////////////////////////////////
 
 
 
/////////////////Estos son como va a aparecer en el correo(Letras rojas) y el nombre de los campos (Letras azules)   ///////////////////////
$message = " 
Datos de Contacto / Nuevo Prospecto

Razón Social: ".$razon." 

Contacto: ".$contacto."	

Teléfono: ".$telefono."	

E-mail: ".$email."				

Ciudad: ".$ciudad."

Mensaje: ".$mensaje.""; 

/////////////////Estos son como va a aparecer en el correo(Letras rojas) y el nombre de los campos (Letras azules)   ///////////////////////



/////////////////Aquí hay que poner el nombre de la empresa y el correo el mismo al que se va a direccionar ///////////////////////

if (mail($mail,"Astelcom",$message,"From:areyes@centralinteractiva.com.mx")) 

/////////////////Aquí hay que poner el nombre de la empresa y el correo el mismo al que se va a direccionar ///////////////////////

Header ("Location: $thank"); 

?>

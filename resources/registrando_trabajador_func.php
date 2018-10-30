<?php
//Asignando valores de TEXTBOX a VARIABLES
$rfc=htmlentities($_POST["rfc"]); 
$nombre=htmlentities($_POST['nombre']); 
$apaterno=$_POST['apaterno']; 
$amaterno=$_POST['amaterno']; 
$curp=$_POST['curp']; 
$escolaridad=$_POST['escolaridad']; 
$puesto=$_POST['puesto']; 
$Distribucion_hrs_grupo=$_POST['hrs_grupo']; 
$No_hrs=$_POST['No_hrs']; 
$gob_fed=$_POST['gob_fed']; 
$sep=$_POST['sep']; 
$ct=$_POST['ct']; 

echo ("---Valores de variables---<br> ");
echo ("rfc".$rfc."<br>");
echo ("rfc".$nombre."<br>");
echo ("rfc".$apaterno."<br>");
echo ("rfc".$amaterno."<br>");
echo ("rfc".$curp."<br>");
echo ("rfc".$escolaridad."<br>");
echo ("rfc".$puesto."<br>");
echo ("rfc".$Distribucion_hrs_grupo."<br>");
echo ("rfc".$No_hrs."<br>");
echo ("rfc".$gob_fed."<br>");
echo ("rfc".$sep."<br>");
echo ("rfc".$ct."<br>");

$nombre_completo=$nombre." ".$apaterno." ".$amaterno;

/* ----Conexion con Base de Datos---- */
$link = mysql_connect("localhost","root","");
mysql_select_db("bdrh", $link);
/*Campos => rfc,nombre,apaterno,amaterno,curp,escolaridad,puesto,Distribucion_hrs_grupo,No_hrs,Gob_fed,SEP,CT */
$sql=mysql_query("INSERT INTO trabajador(rfc,nombre,apaterno,amaterno,curp,escolaridad,puesto,Distribucion_hrs_grupo,No_hrs,Gob_fed,SEP,CT)                   VALUES('$rfc','$nombre','$apaterno','$amaterno','$curp','$escolaridad','$puesto','$Distribucion_hrs_grupo','$No_hrs','$gob_fed','$sep','$ct')",$link); 
	if($sql){
	/*echo ("Registrado con exito"); Comentado solo para evitar mensahe de ALERTA*/
	echo"<script>alert('Registrado con exito');window.location.href=\"./registrando_trabajador.php?rfc=$rfc&nombre=$nombre_completo\" </script>";
		}
		else {
	 	 echo ("Registro fallido.<br>");
	 	 echo ("Error código: <b>".mysql_errno ()."</b><br>");
	 	 echo ("Descripción:: <b>".mysql_error ()."</b><br>");
		 echo"<script>alert('ERROR!!');window.location.href=\"trabajador_insertar.html\" </script>";
  		}
mysql_close($link); //cierro la conexion 	

?>
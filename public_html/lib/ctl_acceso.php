<?php
include("../conexion.php");



/* A continuaci�n, realizamos la conexi�n con nuestra base de datos en MySQL */



$server= servidor();

$base = basedatos();

$usuario=usuario();

$contrasena=contrasena();

$link = mysqli_connect($server,$usuario,$contrasena);
mysqli_select_db($link,$base);
                  

/* El query valida si el usuario ingresado existe en la base de datos. 
Se utiliza la funci�n htmlentities para evitar inyecciones SQL. */
$myusuario = mysqli_query($link,"select idtrabajador from usuarios where 
             idtrabajador = '".htmlentities($_POST["usuario"])."'");
$nmyusuario = mysqli_num_rows($myusuario);

/*Si existe el usuario, validamos tambi�n la contrase�a ingresada y 
el estado del usuario�*/
if($nmyusuario != 0){
$sql = "select idtrabajador from usuarios 
where estado = 1 
and idtrabajador = '".htmlentities($_POST["usuario"])."'
and contrasena = '".(htmlentities($_POST["contrasena"]))."'";
$myclave = mysqli_query($link,$sql);
$nmyclave = mysqli_num_rows($myclave);

/*Si el usuario y clave ingresado son correctos (y el usuario est� activo en la BD)
, creamos la sesi�n del mismo.*/
if($nmyclave != 0){
session_start();
/*Guardamos dos variables de sesi�n que nos auxiliar� para saber si se 
est� o no �logueado� un usuario*/
//session_register("controlador")

$_SESSION["validando"] = "OK";	
//$_SESSION["user"] = mysqli_result($myclave,0,0);  //Modifique esta linea original
$_SESSION["user"] = $myclave; 
//nombre del usuario logueado.
//Direccionamos a nuestra p�gina principal del sistema.
$usuario1=$_POST["usuario"];
header ("Location:../principal.php?usuario=$usuario1");
}
else{
echo"<script>alert('La contrase\u00f1a del usuario no es correcta.');
</script>";
}
}else{
echo"<script>alert('El usuario no existe.');
window.location.href=\"../index.html\"
</script>";
}
mysql_close($link);


?>
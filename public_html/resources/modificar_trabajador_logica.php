<?php 
include("../conexion.php");
//obteniendo valores de las cajas de texto
$idtrabajador= htmlentities($_POST["idtrabajador"] );
$nombre= htmlentities($_POST["nombre"] );
$apellidoPaterno= htmlentities($_POST["apellidoPaterno"] );
$apellidoMaterno= htmlentities($_POST["apellidoMaterno"] );
$sexo= htmlentities($_POST["sexo"] );
$direccion= htmlentities($_POST["direccion"] );
$telefono= htmlentities($_POST["telefono"] );
$correo= htmlentities($_POST["correo"] );
$puesto= htmlentities($_POST["puesto"] );



//VISUALIZANDO VALORES
echo("valores de las variables <br>");
echo ("idtrabajador: ".$idtrabajador."<br>");
echo ("nombre: ".$nombre."<br>");
echo ("apellidoPaterno: ".$apellidoPaterno."<br>");
echo ("apellidoMaterno: ".$apellidoMaterno."<br>");
echo ("sexo: ".$sexo."<br>");
echo ("direccion: ".$direccion."<br>");
echo ("telefono: ".$telefono."<br>");
echo ("correo: ".$correo."<br>");
echo ("puesto: ".$puesto."<br>");

//Conectando con Base de Datos
$server= servidor();

$base = basedatos();

$usuario=usuario();

$contrasena=contrasena();

$link = mysqli_connect($server,$usuario,$contrasena);
mysqli_select_db($link,$base);

//Revisando Consulta (query)
$sql="UPDATE TRABAJADOR SET idtrabajador='".$idtrabajador."', nombre='".$nombre."',apellidoPaterno='".$apellidoPaterno."',apellidoMaterno='".$apellidoMaterno."',sexo='".$sexo."',direccion='".$direccion."',telefono='".$telefono."',correo='".$correo."',puesto='".$puesto."' WHERE idtrabajador='".$idtrabajador."'";

if(mysqli_query($link,$sql)){
	echo'<script type="text/javascript">
    alert("Modificacion Guardado");
    window.location.href="modificar_trabajador.php?idtrabajador=";
    </script>';
} else {

	echo ("Modificacion Fallida <br>");
	echo "Error: " . $sql . "<br>" . mysqli_error($link);
	
	
}
mysqli_close($link); //se cierra la conexion

	
?>	

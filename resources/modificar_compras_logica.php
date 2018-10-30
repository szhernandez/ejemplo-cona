<?php 
//obteniendo valores de las cajas de texto
$idcompras= htmlentities($_GET["idcompra"] );
$fecha= htmlentities($_POST["fecha"] );
$cantidad= htmlentities($_POST["cantidad"] );
$precio= htmlentities($_POST["precio"] );
$idTRABAJADOR= htmlentities($_POST["idtrabajador"] );
$CAMB= htmlentities($_POST["camb"] );




//VISUALIZANDO VALORES
echo("valores de las variables <br>");
echo ("idcompras: ".$idcompras."<br>");
echo ("fecha: ".$fecha."<br>");
echo ("cantidad: ".$cantidad."<br>");
echo ("precio: ".$precio."<br>");
echo ("idTRABAJADOR: ".$idTRABAJADOR."<br>");
echo ("CAMB: ".$CAMB."<br>");


//Conectando con Base de Datos
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"conagua");

//Revisando Consulta (query)
$sql="UPDATE COMPRAS SET idcompras='".$idcompras."', fecha='".$fecha."',cantidad='".$cantidad."',precio='".$precio."',idTRABAJADOR='".$idTRABAJADOR."',CAMB='".$CAMB."' WHERE idcompras='".$idcompras."'";

if(mysqli_query($link,$sql)){
	echo'<script type="text/javascript">
    alert("Registro Modificado");
    window.location.href="modificar_compras.php?idcompras=";
    </script>';
} else {

	echo ("Resgistro Fallido <br>");
	echo "Error: " . $sql . "<br>" . mysqli_error($link);
	
}
mysqli_close($link); //se cierra la conexion


?>

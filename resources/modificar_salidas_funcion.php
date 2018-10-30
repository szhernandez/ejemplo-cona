<?php 
//obteniendo valores de las cajas de texto
$idsalidas= htmlentities($_POST["idsalidas"] );
$fecha= htmlentities($_POST["fecha"] );
$cantidad= htmlentities($_POST["cantidad"] );
$idTRABAJADOR= htmlentities($_POST["idTRABAJADOR"] );
$CAMB= htmlentities($_POST["CAMB"] );




//VISUALIZANDO VALORES
echo("valores de las variables <br>");
echo ("idsalidas: ".$idsalidas."<br>");
echo ("fecha: ".$fecha."<br>");
echo ("cantidad: ".$cantidad."<br>");
echo ("idTRABAJADOR: ".$idTRABAJADOR."<br>");

echo ("CAMB: ".$CAMB."<br>");


//Conectando con Base de Datos
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"conagua");

//Revisando Consulta (query)
$sql="INSERT INTO SALIDAS(idsalidas, fecha, cantidad, idTRABAJADOR, CAMB)VALUES('$idsalidas', '$fecha', '$cantidad', '$idTRABAJADOR','$CAMB')";

if(mysqli_query($link,$sql)){
	echo'<script type="text/javascript">
    alert("Registro Guardado");
    window.location.href="registro_salidas.php";
    </script>';
} else {

	echo ("Resgistro Fallido <br>");
	echo "Error: " . $sql . "<br>" . mysqli_error($link);
	
}
mysqli_close($link); //se cierra la conexion


?>

<?php 
//obteniendo valores de las cajas de texto
$camb= htmlentities($_POST["camb"] );
$descripcion= htmlentities($_POST["descripcion"] );
$existencia= htmlentities($_POST["existencia"] );




//VISUALIZANDO VALORES
echo("valores de las variables <br>");
echo ("camb: ".$camb."<br>");
echo ("descripcion: ".$descripcion."<br>");
echo ("existencia: ".$existencia."<br>");


//Conectando con Base de Datos
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"conagua");

//Revisando Consulta (query)
$sql="INSERT INTO BIENES(camb, descripcion, existencia)VALUES('$camb', '$descripcion', '$existencia')";

if(mysqli_query($link,$sql)){
	echo'<script type="text/javascript">
    alert("Registro Guardado");
    window.location.href="registro_bienes.php";
    </script>';
} else {

	echo ("Resgistro Fallido <br>");
	echo "Error: " . $sql . "<br>" . mysqli_error($link);
	
}
mysqli_close($link); //se cierra la conexion


?>

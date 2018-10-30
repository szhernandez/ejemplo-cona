<?php 
$idcompras= htmlentities($_GET["idcompras"] );
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


$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"conagua");

//Revisando Consulta (query)
$sql="delete from compras where idcompras='".$idcompras."'" ;

if(mysqli_query($link,$sql)){
  echo'<script type="text/javascript">
    alert("Compra Eliminado Con exito");
    window.location.href="eliminar_compras.php?idcompras=";
    </script>';
} else {

  echo ("Eliminacion Fallida Fallida  <br>");
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
  
}
mysqli_close($link); //se cierra la conexion

?>

<?php 
$camb_obtenido=$_POST["camb"];
$descripcion_obtenido=$_POST["descripcion"];
$existencia_obtenido=$_POST["existencia"];

echo ("camb: ".$camb_obtenido."<br>");
echo ("descripcion: ".$descripcion_obtenido."<br>");
echo ("existencia: ".$existencia_obtenido."<br>");

$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"conagua");

//Revisando Consulta (query)
$sql="UPDATE BIENES SET camb='".$camb_obtenido."', descripcion='".$descripcion_obtenido."',existencia='".$existencia_obtenido."' WHERE camb='".$camb_obtenido."'";

if(mysqli_query($link,$sql)){
  echo'<script type="text/javascript">
    alert("Bien Modificado Con exito");
    window.location.href="modificar_bienes.php?camb=";
    </script>';
} else {

  echo ("Modificacion Fallida  <br>");
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
  
}
mysqli_close($link); //se cierra la conexion

?>

<?php 
include("../conexion.php");
//obteniendo el id trabajador
$idtrabajador_obtenido=$_POST["idtrabajador"];
if($idtrabajador_obtenido== ""){
// obtener los id trabajador almacenados

$server= servidor();

$base = basedatos();

$usuario=usuario();

$contrasena=contrasena();

$link = mysqli_connect($server,$usuario,$contrasena);
mysqli_select_db($link,$base);
$result= mysqli_query($link, "select * from trabajador" );

if ($row=mysqli_fetch_array($result, MYSQLI_BOTH)) // si la variable tiene una sola fila entonces seguimos con el codigo
 {
$combobit="";
do{
$combobit.="<option value='".$row['idtrabajador']."'>".$row['idtrabajador']."</option>";

} 
while($row=mysqli_fetch_array($result, MYSQLI_BOTH));
}
else { echo "no hubo resultados";}
mysqli_close($link);

$contenidodinamico= <<<TEXTO
<form name="form1" action= "./eliminar_trabajador2.php" method="post">
idtrabajador:
<select name ="idtrabajador"> echo $combobit;</select>
<center><input name="validar" type="submit" value = "Validar" /> <br/> </center>
TEXTO;
}//fin if de trabajador obtenido nulo
else{
  //Cuando se ha seleccionado un trabajador


$server= servidor();

$base = basedatos();

$usuario=usuario();

$contrasena=contrasena();

$link = mysqli_connect($server,$usuario,$contrasena);
mysqli_select_db($link,$base);
$result= mysqli_query($link, "select * from trabajador where idtrabajador='".$idtrabajador_obtenido."'" );
if ($row=mysqli_fetch_array($result, MYSQLI_BOTH)) // si la variable tiene una sola fila entonces seguimos con el codigo
 {
do{
$nombre=$row['nombre'];
$apellidoPaterno=$row['apellidoPaterno'];
$apellidoMaterno=$row['apellidoMaterno'];
$sexo=$row['sexo'];
$direccion=$row['direccion'];
$telefono=$row['telefono'];
$correo=$row['correo'];
$Puesto=$row['Puesto'];

} 
while($row=mysqli_fetch_array($result, MYSQLI_BOTH));
}
else { echo "no hubo resultados";}
mysqli_close($link);

$contenidodinamico= <<<TEXTO
<FORM name="formulario" method="post" action="./eliminar_trabajador_logica.php" >

<input name="idtrabajador" type="text" value="$idtrabajador_obtenido" id="Texto1" />

<input name="nombre" type="text" value="$nombre" id="Texto2" />

<input name="apellidoPaterno" type="text" value="$apellidoPaterno" id="Texto3" />

<input name="apellidoMaterno" type="text"  value="$apellidoMaterno" id="Texto4" />

<input name="sexo" type="text"  value="$sexo" id="Texto5" />

<input name="direccion" type="text"  value="$direccion" id="Texto6" />

<input name="telefono" type="text"  value="$telefono" id="Texto7" />

<input name="correo" type="text"  value="$correo" id="Texto8" />

<input name="puesto" type="text"  value="$Puesto" id="Texto9" />

<input name="insertar" type="submit"  value="Eliminar" id="bEnviar" />

</form>
TEXTO;


}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>SIS CPC</title>

 <link href="estilos_locales/estiloprincipal.css" rel="stylesheet" type="text/css" />
    
 <link href="estilos_locales/estilo2.css" rel="stylesheet" type="text/css" />

 <link href="estilos_locales/insertar.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="../js/easy-slider-css.css">

    
    <script src='../js/jquery.min.js' type='text/javascript'> </script> 
    <script src="../js/easy-slider.js"></script>
    
     <script language="javascript">

function modiframe(destino)
{
document.getElementById("marco").src=destino
}
</script>  
</head>

<body>

<div id="contenedor">

<div id="logo"> <img src="../imagenes/logo.png"></div>
<div class="sliderContainer"><div id="logo2"> <img src="../imagenes/logo2.png" /></div>

      <div id="slider">
        <div id_"ade"></div>

          <div class="slidesContainer" style="width: 800px;">
              <div class="slide"><img src="../imagenes/slider1.jpg" alt="Imagen 01"></div>
              <div class="slide"><img src="../imagenes/slider2.jpg" alt="Imagen 02"></div>
              <div class="slide"><img src="../imagenes/slider3.jpg" alt="Imagen 03"></div>
             
             
          </div> <!-- /slidesContainer -->

    </div> <!-- /slider -->

</div>

<div id="menu">

<?php
include ("menu.php");
$mimenu=mostrar_menu();
echo ($mimenu);
?>

</div><!--div menu -->
</div>

<div id="contenedor2">

<div id="contenido" >
<h1> ELIMINAR TFRABAJADOR </h1>>
<div id="insertar" >

<?php 
echo ($contenidodinamico);
?>



</div><!--div insertar-->
</div><!--div contenido-->
<div id="barra">


<div id="enlaces"><center>




</div> <!-- fin div enlaces -->

</div><!--div barra-->

</div><!--fin div contenedor-->





<div id="pie">   
 
 <a href="https://www.google.com/maps/place/CONAGUA/@18.3498049,-100.6601535,18z/data=!4m13!1m7!3m6!1s0x84332da9deba730f:0x11189b0f7cb05c15!2sSin+Nombre,+40660+Ciudad+Altamirano,+Gro.!3b1!8m2!3d18.3555237!4d-100.6675267!3m4!1s0x84332d08d0c23123:0x95eadfa5afd697b3!8m2!3d18.3505579!4d-100.6596673">
Avenida Rey Irepan, oriente, Número 1101, Col. Vicente Guerrero, Cd. Altamirano, Gro.  </a > 

</br> 
   
   <a href="">

 Tel 017474942300 Ext.2137,     </a>

 <a href="https://www.gob.mx/conagua">

  Sitio Web: www.god.mx/conagua </a>

</div><!--div pie-->



</body>
</html>
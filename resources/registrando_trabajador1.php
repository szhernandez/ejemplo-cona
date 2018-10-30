<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>SIS CPC</title>

 <link href="./estilos_locales/estiloprincipal2.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="../js/easy-slider-css.css">
 <link href="./estilos_locales/insertar.css" rel="stylesheet" type="text/css" />
    
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
 include("menu.php"); 
  $mimenu=mostrar_menu();
  echo($mimenu); 
  ?>
</div><!--div menu -->
</div>

<div id="contenedor2">

<div id="contenido" >
<div id="insertar">
  <h1>Datos del trabajador</h1>
 
 <FORM name="formulario" METHOD="POST" ACTION="registrando_trabajador_func.php">
    <input name="rfc" type="text" placeholder="rfc" id="Texto1" />
  <div id="mensaje1" class="errores">Campo Vacio</div>
  
    <input name="nombre" type="text" placeholder="nombre" id="Texto2" />
  <div id="mensaje2" class="errores">Campo Vacio</div>
  
  <input name="apaterno" type="text" placeholder="Apellido Paterno" id="Texto3" />
  <div id="mensaje3" class="errores">Campo Vacio</div>
  
    <input name="amaterno" type="text" placeholder="Apellido Materno" id="Texto4" />
  <div id="mensaje4" class="errores">Campo Vacio</div>
  
    <input name="curp" type="text" placeholder="CURP" id="Texto5" />
  <div id="mensaje5" class="errores">Campo Vacio</div>
  
    <input name="escolaridad" type="text" placeholder="Escolaridad" id="Texto6" />
  <div id="mensaje6" class="errores">Campo Vacio</div>
  
    <input name="puesto" type="text" placeholder="Puesto" id="Texto7" />
  <div id="mensaje7" class="errores">Campo Vacio</div>
  
    <input name="hrs_grupo" type="text" placeholder="distribucion de Hrs"id="Texto8" />
  <div id="mensaje8" class="errores">Campo Vacio</div>
  
    <input name="No_hrs" type="text" placeholder="Horas" id="Texto9" />
  <div id="mensaje9" class="errores">Campo Vacio</div>
  
  Fecha que Ingreso a Gob. Fed:
    <input name="gob_fed" type="date" value=" " placeholder="Ingreso a Gob. Fed." id="date1"  />
    <div id="mensaje10" class="errores">Campo Vacio</div>
  Fecha que Ingreso a SEP:
    <input name="sep" type="date" value=" " placeholder="Ingreso a SEP" id="date2" />
    <div id="mensaje11" class="errores">Campo Vacio</div>
  Fecha que Ingreso a Centro de Trabajo:
    <input name="ct" type="date" value=" " placeholder="Ingreso a Centro de Trabajo"  id="date3"/>
    <div id="mensaje12" class="errores">Campo Vacio</div>
    <input name="insertar" type="submit" value="insertar" id="bEnviar" />
  </form>
</div>
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
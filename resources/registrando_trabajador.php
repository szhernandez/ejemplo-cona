<?php
//Obteniendo el rfc
$RFC_obtenido=$_GET["rfc"];
$NOMBRE_obtenido=$_GET["nombre"];
//Condicion para el frame a mostrar
if($RFC_obtenido==""){
	//Asignando las URLS
$add_claves="./error.html";
$add_usuario="./error.html";

	$contenido_dinamico = <<<TEXTO
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
TEXTO;
	}//Fin if
else{
	//Asignando las URLS
$add_claves="./cvpresupuestal_insertar.php?rfc=$RFC_obtenido";
$add_usuario="./usuario_insertar.php?rfc=$RFC_obtenido";
	$contenido_dinamico = <<<TEXTO
     <h1>Datos del Trabajador</h1>
	 </br>
	 <label for="nombre" >Nombre completo: </label>
	 <label for="nombre" value"$NOMBRE_obtenido"></label>
	 
	 <input type="text" name="name"  class="campo" value="$NOMBRE_obtenido" disabled>
 
 
TEXTO;
}




?>
<?php include("../lib/seguridad.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>SIMP</title>



 <link href="./estilos_locales/estiloprincipal2.css" rel="stylesheet" type="text/css" />
  <link href="./estilos_locales/insertar.css" rel="stylesheet" type="text/css" />
  
    <!--Cargamos la Libreria de JQuery y mandamos ah llamar las funciones de Validacion -->
<script type="text/javascript" src="../formulario/jquery.min.js"></script>
<!--<script type="text/javascript"  src="../formulario/validarestimulos.js"></script>-->
<script type="text/javascript"  src="../formulario/validar_trabajador.js"></script>
  
     
    <link rel="stylesheet" type="text/css" href="../js/easy-slider-css.css">
  <script src='../js/valida.js' type='text/javascript'> </script> 
  <script src="../js/easy-slider.js"></script>
  <script src='../js/jquery.min.js' type='text/javascript'> </script> 
  <script src="../js/easy-slider.js"></script>       
  <script language="javascript">

function modiframe(destino)
{
document.getElementById("marco").src=destino
}

</script>
<!-- Iconos -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- Stylesheets -->
<link rel="stylesheet" href="../menus/style.css">
  
</head>

<body
background="../imagenes/fondoprincipal.png">

<style>
.errores{
            -webkit-boxshadow: 0 0 10px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            -o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            background: red;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            color: #fff;
            display: none;
            font-size: 14px;
            margin-top: -40px;
            margin-left: 340px;
            padding: 6px;
            position: absolute;
        }
</style>

<div id="contenedor">

<div id="logo"> 
<img src="../imagenes/TEC.png"></div>
<div class="sliderContainer">
     
      <div id="logo2"> <img src="../imagenes/recursoshumanos.png" /></div>
      <div id="slider">
        <div id_"ade"></div>

          <div class="slidesContainer" style="width: 800px;">
              <div class="slide"><img src="../imagenes/logo2.png" alt="Imagen 01"></div>
              <div class="slide"><img src="../imagenes/logo3.png" alt="Imagen 02"></div>
              <div class="slide"><img src="../imagenes/simpyp2.png" alt="Imagen 03"></div>
              
          </div> <!-- /slidesContainer -->
    </div> <!-- /slider -->
</div>


<div id="menu">
<?php  
 include("../menu.php"); 
  $mimenu=mostrar_menu();
  echo($mimenu); ?>
</div><!--div menu -->
</div><!--div contenido -->

<div id="contenedor2">

<div id="contenido" >
<br/><br/>
<h3>Registro de trabajador</h3>
<center>
<br/>
<p><h3> </h3></center></p>

<h1>Datos</h1>
	<!-- Contenedor -->
	<div id="mostrar-nav"></div>
	<nav>
	<ul id="accordion" class="accordion">
	
		<li>
			<div class="link"><i class="fa fa-globe"></i>Agregar datos<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
            <li><a href="<?php echo"$add_claves";?>" target="_blank" onClick="window.open(this.href, this.target, 'width=410,height=550'); return false;">Alta de Plaza</a></li>
			<li><a href="<?php echo"$add_usuario";?>" target="_blank" onClick="window.open(this.href, this.target, 'width=400,height=370'); return false;">Crear usario(Solo si aplica)</a></li>
			
				
			</ul>
		</li>
	</ul>
</nav>
	<!-- Scripts -->
	<script src="../menus/js/jquery.min.js"></script>
	<script src="../menus/js/main.js"></script>





<div id="insertar">
 
 <?php  
 echo($contenido_dinamico); ?>
</div>



</div><!--div contenido-->

<div id="barra">
<div id="enlaces"><center>
<br/><br/>
<h3>Sitios Sugeridos!</h3></center></br>
<a href="http://172.168.0.130"><img src="../imagenes/sii.png" alt="nombre" border="0"></br>Sistema Integlal de Informaci&oacute;n.</a> </br></br></br>
<a href="http://www.sep.gob.mx/"><img src="../imagenes/lsep.png" alt="nombre" border="0"></br>Secretaria de Educaci&oacute;n Publica.</a> </br></br></br>
<a href="http://www.tecnm.mx/"><img src="../imagenes/tnmex.png" alt="nombre" border="0" width="100" height="90"></br>Tec. Nacional de Mexico.</a> </br></br></br>
<a href="http://portalautoservicios.sep.gob.mx/"><img src="../imagenes/portal.png" alt="nombre" border="0" ></br> Portal de Autoservicios.</a> </br>

</div> <!-- fin div enlaces -->
</div><!--div barra-->
</div><!--fin div contenedor2-->
<div id="pie">   
 
    <a href="https://www.google.com.mx/maps/place/Instituto+Tecnol%C3%B3gico+de+Cd.+Altamirano/@18.3713968,-100.6799628,199m/data=!3m1!1e3!4m2!3m1!1s0x84332c4eeb361b65:0x5ccd10556cf552d9">Av. Pungarabato, Poniente, S/N, Col. Morelos, Cd. Altamiranos, Guerrerro. C.P. 40660  </a> </br> 
    <a href="www.italtamirano.edu.mx">Visitanos:/ITCAltamirano ò www.italtamirano.edu.mx </a> &nbsp&nbsp
 </div><!--div pie-->
</body>
</html>
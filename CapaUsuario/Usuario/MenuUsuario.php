<?php

require_once("../../Lib/CapaBD/AccesoBD.php");
require_once("../../CapaNegocio/Usuario/pruebaregistro.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="..\..\Lib\Estilos\style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Power Life Noxus</title>
</head>
<body>
<?php
$Usuario=new Usuarios;
$Usuario->setUsuario($_SESSION['Usuario']);
#Asigno la categoría del entrenamiento 
$Tipo=$Usuario->asignaEntreno();
?>
<header class="Cabecera">				
	<div>
		<h1> <img src="..\..\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)">
		SEGUIR CUANDO CREES QUE NO PUEDES MÁS ES LO QUE TE HACE DIFERENTE A LOS DEMÁS 
		<img src="..\..\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)"></h1>
	</div>
	<nav class="Menu">
		<ul>		
				<div style="float:left">
					<li><a href="Usuario.php">Usuario</a>
				</div>
			<div style="float:right">
					<li><a href="../../index.php">Cerrar</a>
				</div>
			<div>
				<li><a href="">Filtrar</a>
					<ul>
						<li><a href="../Administracion/PLibre.php">Peso Libre</a></li>
						<li><a href="../Administracion/Mancuernas.php">Mancuernas</a></li>
					</ul>
				</li>					
			</div>				
		</ul>
	</nav>
<br>
</header>
<br>
<br>
<br>
<br>
<br>
<br>

<div  class ="Entrenos">
<h2>Entrenamiento para <?php printf("%s", $Tipo);?> </h2>
</div>
<table class="Tabla">
			<tr>
			<th>Ejercicio</th>
			<th>Descripción</th>
			<th>Tipo</th>
			<th>Repeticiones</th>
		</tr>
<?php 
	 $Usuario->Entreno();
	?>
</table>
<br>
<br>
<br>
<br>

<footer class="PiedePagina">
	<ul>
		<li>© 2022 Sistema de información., A Deluxe Company.</li>
		<div class="ColocacionPieDePagina">
			<li><a href="#poltica de privacidad">Política de privacidad</a></li>
			<li><a href="#Salir">Condiciones de uso</a></li>
			<li><a href="#Salir">Accesibilidad</a></li>
		</div>
	</ul>
</footer>	

</body>
</html>
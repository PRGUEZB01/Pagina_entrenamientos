<?php
require '../../Lib/CapaBD/config.php';
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
$Admin=new Usuarios;
$Admin->setUsuario($_SESSION['Usuario']);
$Entreno= 6;
?>
<header class="Cabecera">				
	<div align="center">
		<h1> <img src="..\..\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)" align="center">
		SEGUIR CUANDO CREES QUE NO PUEDES MÁS ES LO QUE TE HACE DIFERENTE A LOS DEMÁS 
		<img src="..\..\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)" align="center"></h1>
	</div>
	<nav class="Menu">
		<ul>				
				<div style="float:left">
					<li><a href="../Administrador/Usuarios.php">Menu</a>
					</li>					
				</div>	
<div style="float:right">
					<li><a href="#actualizar" >Editar ejercicios</a></li>		
				
				</div>
<div style="float:right">
				<li><a href="">Filtrar</a>
					<ul>
						<li><a href="..\Administracion\Mancuernas.php?Entreno=6">Mancuernas</a></li>
						<li><a href="..\Administracion\Plibre.php?Entreno=6">Peso libre</a></li>
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
<h2>Entrenamientos </h2>
</div>
<table class="Tabla" style="width:100%">
		<tr>
			<th>Ejercicio</th>
			<th>Descripción</th>
			<th>Tipo</th>
			<th>Repeticiones</th>
			<th>ID</th>
		</tr>
	<?php 
	$Admin->Imprimir_entreno($Entreno);?>
</table>
<br>
<br>
<br>
<br>

<!--Ventana modal para escribir el ID del ejercicio a actualizar-->
<form method="POST" action="../../CapaNegocio/Usuario/Ejercicios.php">	
	<div id="actualizar" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>	
				<br>
				<br>
				<br>			
					<div class="formulario">
							<label>Inserte el ID del ejercicio a editar</label>
					</div>
					<br>
					<input type="text" name="EJERCICIO_ID" id= "EJERCICIO_ID" maxlength="2"  value=""  />
				
				<br>
				<br>
				<br>
				<div align="center"> 
					<button style="margin-bottom: 70px"><a href="#Editar">Editar</a></button>
				</div>
		</div>
	</div>
	<div id="Editar" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>		
					<div class="formulario2">
						<div class="col-25">
							<label>Nombre</label>
						</div>
						<div class="col-75">	
							<input type="text" name="Nombre" placeholder="Nombre"  required />
						</div>	
					</div>
				<br>
				
				<div class="formulario3">
					<div class="col-25">
							<label>Tipo</label>
						</div>
						<div class="col-75">	
							<select id="Tipo" name="Tipo">
								<option value="Peso libre">Peso libre</option>
								<option value="Mancuerna">Mancuerna</option>
							</select>
						</div>	
					</div>
				<br>
				<div class="formulario2">
					<div class="col-25">
							<label>Descripción</label>
						</div>
						<div class="col-75">	
							<textarea id="Descripcion" name="Descripcion" rows="5" cols="30" required> </textarea>
						</div>	
					</div>
				<br>
				<div class="formulario2">
					<div class="col-25">
							<label>Repeticiones</label>
						</div>
						<div class="col-75">	
							<input type="text" name="Repeticiones" placeholder="Repeticiones"  required />
						</div>	
					</div>
				<br>
				<br>
					<button type="submit" name="Aceptar6" value="Aceptar6">Aceptar</button>	
				</div>
	</div>
	</form>

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
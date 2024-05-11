<?php
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
<header class="Cabecera">				
		<div align="center">
			<h1> <img src="..\..\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)" align="center">
			SEGUIR CUANDO CREES QUE NO PUEDES MÁS ES LO QUE TE HACE DIFERENTE A LOS DEMÁS 
			<img src="..\..\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)" align="center"></h1>
		</div>
		<nav class="Menu">
			<ul>					
				<div style="float:right">
					<li><a href="">Ayuda</a>
						<ul>
							<li><a href=".\Soporte.php">Soporte</a></li>
							<li><a href=".\PF.php">Preguntas Frecuentes</a></li>
						</ul>
					</li>					
				</div>				
			</ul>
		</nav>
		<br>
</header>
<div class="contenidoregistro1">
	<div align="center">
		<img src="..\..\Lib\imagenes\Logo.png" height="370" width="370" >
	</div>
</div>
<div class="contenidoregistro2">
	<div align="center">
		<img src="..\..\Lib\imagenes\Logo.png" height="370" width="370" >
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<form  method="GET" action="../../CapaNegocio/Usuario/RegistroUsuarios.php">
		<div style= "overflow-y: auto; ">
			<div class="formulario2">
				<div class="col-20">
					<label>Nombre</label>
				</div>
				<div class="col-70">
					<input type="text" name="Nombre" pattern="[a-zA-Z0-9]+" id= "Nombre" value="" required />
				</div>	
			</div>
		<br>
			<div class="formulario2">
				<div class="col-20">
					<label>Primer Apellido</label>
				</div>
				<div class="col-70">
					<input type="text" name="Primer_apellido" id= "Primer_apellido" value="" required />
				</div>
			</div>
		<br>
			<div class="formulario2">
				<div class="col-20">
					<label>Segundo Apellido</label>
				</div>
				<div class="col-70">
					<input type="text" name="Segundo_apellido" id= "Segundo_apellido" value="" required />
				</div>
			</div>
		<br>
			<div class="formulario2">
				<div class="col-20">
					<label>Correo</label>
				</div>
				<div class="col-70">
					<input type="email" name="Email" id= "Email" value="" required />
				</div>
			</div>
		<br>
			<div class="formulario2">
				<div class="col-20">
					<label>Usuario</label>
				</div>
				<div class="col-70">
					<input type="text" name="Usuario" id= "Usuario" value="" required />
				</div>
			</div>
		<br>
			<div class="formulario2">
				<div class="col-20">
					<label>Contraseña</label>
				</div>
				<div class="col-70">	
					<input type="password" name="Password1" id= "Password1" value="" required />
				</div>	
			</div>
		<br>
		<div class="formulario2">
				<div class="col-20">
					<label>Repetir contraseña </label>
				</div>
				<div class="col-70">	
					<input type="password" name="Password2" id= "Password2" value="" required />
				</div>	
		</div>
				<div align="center"> 
					<button style="margin-bottom: 70px"><a href="#Acceso">Acceder</a></button>
				</div>
		</div>
	<div id="Acceso" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>		
					<div class="formulario">
						<div class="col-25">
							<label>Peso</label>
						</div>
						<div class="col-75">	
							<input type="text" name="Peso" placeholder="Peso"  required />
						</div>	
					</div>
				<br>
					<div class="formulario">
						<div class="col-25">
							<label> Altura</label>
						</div>
						<div class="col-75">
							<input type="text" name="Altura" placeholder="Altura" required />
						</div>	
					</div>
				<br>
					<div class="formulario3">
						<div class="col-25">
							<label> Tipo Entreno</label>
						</div>
						<div class="col-75">
							<select id="TipoEntreno" name="Entreno">
								<option value="Perder">Perder</option>
								<option value="Ganar">Ganar</option>
							</select>
						</div>	
					</div>
				<br>
				<br>
					<button type="submit" name="Acceso" value="Acceso">Acceder</button>	
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
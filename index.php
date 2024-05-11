<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href=".\Lib\Estilos\style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Power Life Noxus</title>
</head>
<body>
<header class="Cabecera">				
	<div>
		<h1> <img src=".\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)">
		SEGUIR CUANDO CREES QUE NO PUEDES MÁS ES LO QUE TE HACE DIFERENTE A LOS DEMÁS 
		
		<img src=".\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)"></h1>
	</div>
	<nav class="Menu">
		<ul>				
			<div style="float:left">
			<?php
 							if (isset($_SESSION["mensaje"])){
								echo "session correcto set:";
								if($_SESSION["correcto"])
	 								echo "<li><a href=\"#\">" . $_SESSION["mensaje"] . "</a></li>";
							}
						?>
				<li><a href="">Acceso</a>
					<ul>
						<li><a href="#Inicio">Iniciar Sesión</a></li>
						<li><a href="./CapaUsuario/Administracion/Registro.php">Registrarse</a></li>
					</ul>
				</li>					
			</div>	
			<div style="float:right">
				<li><a href="">Ayuda</a>
					<ul>
						<li><a href="./CapaUsuario/Administracion/Soporte.php">Soporte</a></li>
						<li><a href="./CapaUsuario/Administracion/PF.php">Preguntas Frecuentes</a></li>
					</ul>
				</li>					
			</div>				
		</ul>
	</nav>
<br>
</header>
<div class="Contenido">
	<div align="center">
		<img src=".\Lib\imagenes\Logo.png" height="370" width="370">
	</div>
</div>

<div id="Inicio" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>		
			<form method="post" action="./CapaNegocio/Usuario/InicioUsuarios.php" name="EntradaSistema">
				<div class="formulario">
					<div class="col-25">
						<label>Usuario</label>
					</div>
					<div class="col-75">	
						<input type="text" name="Usuario" placeholder="Usuario" pattern="[a-zA-Z0-9]+" required />
					</div>	
				</div>
			<br>
				<div class="formulario">
					<div class="col-25">
						<label> Contraseña</label>
					</div>
					<div class="col-75">
						<input type="password" name="Password" placeholder="Password" required />
					</div>	
				</div>
			<br>
					<button type="submit" name="Inicio" value="Acceso">Acceder</button>
				</div>
			</form>
	</div>
<footer class="PiedePagina">
	<ul>
		<li>© 2022 Sistema de información., A Deluxe Company.</li>
		<div style="float:right;text-align:right;">
			<li><a href="#poltica de privacidad">Política de privacidad</a></li>
			<li><a href="#Salir">Condiciones de uso</a></li>
			<li><a href="#Salir">Accesibilidad</a></li>
		</div>
	</ul>
</footer>	

</body>
</html>
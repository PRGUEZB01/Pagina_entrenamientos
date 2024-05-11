<?php
require '../../Lib/CapaBD/AccesoBD.php';
require_once("../../CapaNegocio/Usuario/pruebaregistro.php");
require_once("../../CapaNegocio/Usuario/RestablecimientoContrasena.php");
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
					<li><a href="MenuUsuario.php">Menu</a>
					</li>					
				</div>	
				<div style="float:right">
					<li><a href="#Password">Restabecer Contraseña</a></li>					
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
<br>


 <table class="tabla2">
  <tr>
    <th>Nombre</th>
	 <th>Primer Apellido</th>
	 <th>Segundo Apellido </th>
	 <th>Correo </th>
	 <th>Usuario</th>
	 <th>Peso </th>
	 <th>Altura </th>
	 <th>IMC </th>
	 <th>Categoría </th>
	
<?php 
	$Usuario->Usuario();?>

</table>
<br>
<br>
<br>
			<div align="center"> 
					<button style="margin-bottom: 70px" type="submit"><a href="#Actualizar">Actualizar</a></button>
					<button style="margin-bottom: 70px" type="submit"><a href="#Eliminar">Eliminar Usuario</a></button>
			</div>


<form method="POST" action="../../CapaNegocio/Usuario/Actualizar.php">	
	<div id="Actualizar" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>		
					<div class="formulario">
						<div class="col-25">
							<label>Peso</label>
						</div>
						<div class="col-75">	
							<input type="text" name="Pesonuevo" placeholder="Peso"  required />
						</div>	
					</div>
				<br>
					<div class="formulario">
						<div class="col-25">
							<label> Altura</label>
						</div>
						<div class="col-75">
							<input type="text" name="Alturanueva" placeholder="Altura" required />
						</div>	
					</div>
				<br>
					<div class="formulario3">
						<div class="col-25">
							<label> Tipo Entreno</label>
						</div>
						<div class="col-75">
							<select id="TipoEntreno" name="Entrenonuevo">
								<option value="Perder">Perder</option>
								<option value="Ganar">Ganar</option>
							</select>
						</div>	
					</div>
				<br>
				<br>
					<button type="submit" name="Actualizar" value="Actualizar">Actualizar</button>	
				</div>
		</div>
	</form>
	
<form method="POST" action="../../CapaNegocio/Usuario/Eliminar_Usuario.php">	
	<div id="Eliminar" class="modalDialog">
		<div>	
					<div class="formulario">
							<label>¿Está seguro que quiere eliminar el Usuario?</label>
					</div>
				<br>
				<br>
					<button type="submit" name="Aceptar" value="Aceptar">Aceptar</button>	
					<button type="submit" name="Cancelar"><a href="#close">Cancelar</a></button>
				
		</div>
		</div>
	</form>

<form method="POST" action="../../CapaNegocio/Usuario/RestablecimientoContrasena.php">
	<div id="Password" class="modalDialog" >
		<div>		
			<?php
			If($_SESSION['Validar']==0){
			?>
				<div class="formulario">
					<label>Solicitud enviada al Administrador</label>
				</div>
			
			<br>
			<br>
				<button type="submit" name="Aceptar1" value="Aceptar1">Aceptar</button>	
			<?php 
			}
			
			If($_SESSION['Validar']==1){
			?>
				<div class="formulario">
					<label>Solicitud pendiente de respuesta</label>
				</div>
			<br>
			<br>
				<button type="submit" name="Acept" value="Aceptar"><a href="#close">Aceptar</a></button>	
			<?php }
			
			If($_SESSION['Validar']==2){
			?>
				<div class="formulario">
					<div class="col-25">
						<label>Antigua contraseña</label>
					</div>
					<div class="col-75">	
						<input type="password" name="oldpassword" placeholder="Contraseña" value="" required />
					</div>	
				</div>
			<br>
			<br>
				<button type="submit" name="Aceptar2" value="Aceptar">Siguiente</button>	
			<?php }
			
			If($_SESSION['Validar']==3){
			?>
				<div class="formulario">
					<div class="col-25">
						<label>Se le ha denegado el permiso</label>
					</div>
					</div>
			<br>
			<br>
				<button type="submit" name="Denegado" value="Denegado">Aceptar</button>	
			<?php }
			
			If($_SESSION['Validar']==5){
			?>
			
			<div class="formulario">
					<div class="col-50">
						<label>Nueva contraseña</label>
					</div>
					<br>
			<br>
			</div>
			<div class="formulario2">
					<div class="col-75">	
						<input type="password" name="newpassword1" placeholder="Contraseña" value="" required />
					</div>
</div>			
<br>	
<div class="formulario2">	
					<div class="col-75">	
						<input type="password" name="newpassword2" placeholder="Repite contraseña" value="" required />
					</div>	
				</div>
			<br>
			<br>
				<button type="submit" name="Aceptar5" value="Aceptar">Aceptar</button>	
			<?php }
			?>
			
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
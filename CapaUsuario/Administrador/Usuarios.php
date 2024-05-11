<?php

require '../../Lib/CapaBD/AccesoBD.php';
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

?>
<header class="Cabecera">				
	<div align="center">
		<h1> <img src="..\..\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)" align="center">
		SEGUIR CUANDO CREES QUE NO PUEDES MÁS ES LO QUE TE HACE DIFERENTE A LOS DEMÁS 
		<img src="..\..\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)" align="center"></h1>
	</div>
	<nav class="Menu">
			<ul>					
				<div style="float:right">
					<li><a href="../../index.php">Cerrar</a></li>					
				</div>	
				<div style="float:right">
					<li><a href="#Eliminar">Eliminar Usuario</a></li>					
				</div>
				<div style="float:left">
					<li><a href="#Entrenos">Entrenamientos</a></li>					
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


 <table class="tabla3">
  <tr>
     <th>Nombre</th>
	 <th>Primer Apellido</th>
	 <th>Segundo Apellido</th>
	 <th>Correo</th>
	 <th>Usuario</th>
	 <th>Peso</th>
	 <th>Altura</th>
	 <th>IMC</th>
	 <th>Entreno</th>
	  <th colspan="2" style= "text-align: center;" >Validar passwords</th>
  </tr>
<?php 
	$V=$Usuario->Admin(); ?>
</table>
<br>
<?php #Se va a imprimir por pantalla el objetivo de los usuarios (Ganar, perder peso) y para ello al imprimirse al administrador
#los usuarios del sistema, en la función Admin se obtiene los valores del array $V que muestra a aquellos usuarios con su objetivo
#si por ejemplo V[0]==0 es que ninguno tiene como objetivo Ganar peso y por ello no se muestra esta categoría. 

if ($V[0]==1 OR $V[1]==1){
	 printf("<div class=\"Interes\"><h2 align= \"center\" >INTERÉS DE LOS USUARIOS</h2></div>");
}

 if($V[0]==1){ ?>

<table class="tabla4" >
<?php 

	$Valor=$Usuario->GanarPeso(); ?>
	<td><?php printf(" %s.",$Valor); ?></td>
	 
</table>

<?php } 
if($V[1]==1){?>
<br>
<table style="width: 100%; text-align: center;" >
<?php 
	$Valor=$Usuario->PerderPeso(); ?>
     <td><?php printf(" %s.",$Valor); ?></td>
	 
</table>
<?php  }?>

<div id="Entrenos" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>		
				<div class="formulario">
					<div class="col-25">
						<label><a href="../Entrenos/Entreno1.php">Entreno 1</a></label>
					</div>
					<div class="col-75">	
						<label><a href="../Entrenos\Entreno2.php">Entreno 2</a></label>
					</div>	
				</div>
			<br>
				<div class="formulario">
					<div class="col-25">
						<label><a href="../Entrenos/Entreno3.php">Entreno 3</a></label>
					</div>
					<div class="col-75">	
						<label><a href="../Entrenos/Entreno4.php">Entreno 4</a></label>
					</div>	
				</div>
			<br>
			<div class="formulario">
					<div class="col-25">
						<label><a href="../Entrenos/Entreno5.php">Entreno 5</a></label>
					</div>
					<div class="col-75">	
						<label><a href="../Entrenos/Entreno6.php">Entreno 6</a></label>
					</div>	
				</div>
			<br>
	</div>
</div>
<!--PARA ELIMINAR LOS USUARIOS POR PARTE DEL ADMINISTRADOR -->
<form method="POST" action="../../CapaNegocio/Usuario/Eliminar_Usuario.php">	
	<div id="Eliminar" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>		
					<div class="formulario">
							<label>Inserte el username del usuario a borrar</label>
					</div>
					<br>
					<input type="text" name="Usuario" id= "Usuario" value=""  />
				
				<br>
				<br>
					<button type="submit" name="Aceptar_admin" value="Aceptar_admin">Aceptar</button>	
					
				</div>
		</div>
	</form>
</body>
</html>
<?php
require '../../Lib/CapaBD/config.php';
require_once("../../CapaNegocio/Usuario/pruebaregistro.php");
require_once("../../CapaNegocio/Usuario/Actualizar_ejercicios.php");
session_start();
#En este fichero se filtra los ejercicios de los entrenamientos en función de si es el administrador quien los vée 
#o el usuario. 
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
#Asigno valores para llamar a la función de impresión.
if($_SESSION['Usuario']!="Admin"){
$obj_user= new Usuarios;
$obj_user->setUsuario($_SESSION['Usuario']); 
$obj_user->setENTRENO_ID($_SESSION['ENTRENO_ID']);}
else if ($_SESSION['Usuario']=="Admin"){
$Admin = new Usuarios;
$Admin->setUsuario($_SESSION['Usuario']);
$Entreno= $_GET["Entreno"];
}
?>
<header class="Cabecera">				
	<div align="center">
		<h1> <img src="..\..\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)" align="center">
		SEGUIR CUANDO CREES QUE NO PUEDES MÁS ES LO QUE TE HACE DIFERENTE A LOS DEMÁS 
		<img src="..\..\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)" align="center"></h1>
	</div>
	<?php if($_SESSION['Usuario']!="Admin"){?>
	<nav class="Menu">
		<ul>
			<div style="float:left">
					<li><a href="../Usuario/MenuUsuario.php">Menu</a>
					</li>					
				</div>
			<div style="float:right">
				<li><a href="">Filtrar</a>
					<ul>
						<li><a href=".\PLibre.php">Peso Libre</a></li>
					</ul>
				</li>					
			</div>				
		</ul>
	</nav>
	<?php } else if ($_SESSION['Usuario']=="Admin"){?>
	<nav class="Menu">
		<ul>
			<div style="float:left">			<!-- Se probó con printf("%s",$_GET["Entreno"]) pero añade un espacio : " 1", en vez de : "1". -->
					<li><a href="../Entrenos/Entreno<?php echo($_GET["Entreno"])?>.php">Menu</a>
					</li>					
				</div>
			<div style="float:right">
				<li><a href="">Filtrar</a>
					<ul>
						<li><a href=".\Plibre.php?Entreno=<?php echo($_GET["Entreno"])?> ">Peso Libre</a></li>
					</ul>
				</li>					
			</div>				
		</ul>
	</nav>
	<?php }?>
	
	
<br>
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<?php if( $_SESSION['Usuario']!="Admin"){
printf(" <div  class =\"Entrenos\"><h2> Entrenamiento para %s peso</h2></div>", $_SESSION['Entreno']);
 } else if( $_SESSION['Usuario']=="Admin") {?>
 <div  class ="Entrenos">
<h2>Entrenamientos </h2>
</div>
 <?php }?>

<table class="Tabla" style="width:100%">
		<tr>
			<th>Ejercicio</th>
			<th>Descripción</th>
			<th>Tipo</th>
			<th>Repeticiones</th>
		</tr>
		<?php
		if( $_SESSION['Usuario']!="Admin"){
		$obj_user->Tipos_entreno("Mancuerna", $_SESSION['ENTRENO_ID']);
		}else if($_SESSION['Usuario']=="Admin")
		{
			$Admin->Tipos_entreno("Mancuerna",$_GET["Entreno"]);
		}
			
			?>
</table>
<br>
<br>
<br>
<br>

<footer class="PiedePagina">
	<ul>
		<li>© 2022 Sistema de información., A Deluxe Company.</li>
		<div  class="ColocacionPieDePagina">
			<li><a href="#poltica de privacidad">Política de privacidad</a></li>
			<li><a href="#Salir">Condiciones de uso</a></li>
			<li><a href="#Salir">Accesibilidad</a></li>
		</div>
	</ul>
</footer>	

</body>
</html>
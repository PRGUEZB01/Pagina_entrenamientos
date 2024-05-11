<!DOCTYPE html>
<html>
<head>
<link href="..\..\Lib\Estilos\style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Power Life Noxus</title>
<style>
* {box-sizing: border-box}
</style>
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
				<li style="float:right"><a href="../../index.php">Cerrar</a>
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
	<br>
	<br>
	<h2 style="text-align: center">Soporte</h2>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, '1')" id="defaultOpen">¿Qué datos son necesarios para registrarme?</button>
  <button class="tablinks" onclick="openCity(event, '2')">¿Qué sucede si se me olvida la contraseña?</button>
  <button class="tablinks" onclick="openCity(event, '3')">¿Cómo puedo eliminar la cuenta?</button>

</div>

<div id="1" class="tabcontent">
  <h3>¿Qué datos son necesarios para registrarme?</h3>
  <p>Es necesario introducir tu nombre, primer apellido, segundo apellido, correo electrónico,
  usuario, contraseña, peso y altura.</p>
</div>

<div id="2" class="tabcontent">
  <h3>¿Qué sucede si se me olvida la contraseña?</h3>
  <p>Puede ponerse en contacto con nosotros mediante nuestro correo electrónico powerlifenoxus@gmail.com</p> 
</div>

<div id="3" class="tabcontent">
  <h3>¿Cómo puedo eliminar la cuenta?</h3>
  <p>Desde el menú de tu usuario podrás visualizar tus datos personales y físicos, allí se encuentra un botón para eliminar tu cuenta. ¡¡Pero ten cuidado!! una vez borres tu cuenta no podrás volver a recuperarla. </p>
</div>

	<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

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
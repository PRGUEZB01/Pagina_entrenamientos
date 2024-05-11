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
			<h1> <img src="..\..\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)">
			SEGUIR CUANDO CREES QUE NO PUEDES MÁS ES LO QUE TE HACE DIFERENTE A LOS DEMÁS 
			<img src="..\..\Lib\imagenes\Encabezado.png" height="60" width="80" style="filter: invert(100%)"></h1>
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
	<h2 style="text-align: center">Preguntas frecuentes</h2>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, '1')" id="defaultOpen">¿Perderé forma física si dejo de entrenar durante un tiempo?</button>
  <button class="tablinks" onclick="openCity(event, '2')">¿Cómo conozco el peso que puedo aguantar en cada ejercicio?</button>
  <button class="tablinks" onclick="openCity(event, '3')">¿LLevo entrenando varios meses pero no obtengo resultados?</button>
  <button class="tablinks" onclick="openCity(event, '4')">¿Qué puedo comer?</button>

</div>

<div id="1" class="tabcontent">
  <h3>¿Perderé forma física si dejo de entrenar durante un tiempo?</h3>
  <p>Los músculos tienen una memoria de alrededor de dos semanas, a partir
	de este momento tu forma física empeorará, pero si fallas un par de días 
	al entrenamiento no supondrá nada a tu físico.</p>
</div>

<div id="2" class="tabcontent">
  <h3>¿Cómo conozco el peso que puedo aguantar en cada ejercicio?</h3>
  <p>Es importante que durante los primeros días de entrenamientos, no 
	cargues pesos muy elevados ya que el músculo no esta acostumbrado,
	conforme avance el tiempo puede subir el peso de carga en los ejercicios
	cada dos semanas aprox. Recuerda es mejor cumplir las repeticiones establecidas
	con un peso medio, que intentar cargar más peso y no conseguir las repeticiones.</p> 
</div>

<div id="3" class="tabcontent">
  <h3>¿Llevo entrenando varios meses pero no obtengo resultados?</h3>
  <p>Para mejorar nuestra forma física no solo es importante cumplir con los entrenamientos,
  además debemos se seguir una dieta equilabrada (la dieta dependerá de nuestro objetivo a alcanzar) y dormir al menos entre 7-8 horas diarias.</p>
</div>
<div id="4" class="tabcontent">
  <h3>¿Qué puedo comer?</h3>
  <p>En la vida se puede comer de todo, pero siempre en su justa medida.
  Si tu objetivo es perder peso deberás de comer menos de 2500 kcal diarias y debes comer fruta, verdura, legumbres.
  En cambio si tu objetivo es ganar masa muscular deberás ingerir más de 2500 kcal diarias y comer proteínas e hidratos de carbono.</p>
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
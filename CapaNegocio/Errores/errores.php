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
		<div class="alert alert-danger alert-dismissible fade show">
			
			<?php
		#Listado de errores para la web Power Life Noxus.
			
			switch ($_GET["errcode"]){
				case 0:
					echo "<br><br><br><br><br><br>";
					printf( "<div> <p style= \"text-align: center;\">Error: el usuario no existe en el sistema, nombre de usuario o contraseña incorrecta</p></div>");
					echo "<br>";
					echo "<br>";
					echo "<div style= \"text-align: center;\"><button type=submit ><a href=../../CapaUsuario/Administracion/salir.php >Volver</button></div>";
					printf("<div class=\"errores\"><img src='..\..\Lib\imagenes\Error.png' height=\"150\" width=\"170\" align=\"right\";><div>");
				break;
				case 1:
					echo "<br><br><br><br><br><br>";
					printf( "<div> <p style= \"text-align: center;\">Error: Ya existe un usuario con ese nombre</p></div>");
					echo "<br>";
					echo "<br>";
					echo "<div style= \"text-align: center;\"><button type=submit><a href=../../CapaUsuario/Administracion/Registro.php>Volver</button></div>";
					printf("<div class=\"errores\"><img src='..\..\Lib\imagenes\Error.png' height=\"150\" width=\"170\" align=\"right\";><div>");
					break;
				case 2:
					echo "<br><br><br><br><br><br>";
					printf( "<div> <p style= \"text-align: center;\">Se ha producido un error desconocido</p></div>");
					echo "<br>";
					echo "<br>";
					echo "<div style= \"text-align: center;\"><button type=submit><a href=../../CapaUsuario/Administracion/salir.php>Volver</button></div>";
					printf("<div class=\"errores\"><img src='..\..\Lib\imagenes\Error.png' height=\"150\" width=\"170\" align=\"right\";><div>");
				break;
			    Case 3: 
					echo "<br><br><br><br><br><br>";
					printf( "<div> <p style= \"text-align: center;\">Su altura no es correcta</p></div>");
					echo "<br>";
					echo "<br>";
					echo "<div style= \"text-align: center;\"><button type=submit><a href= ../../CapaUsuario/Administracion/Registro.php>Volver</button></div>";
					printf("<div class=\"errores\"><img src='..\..\Lib\imagenes\Error.png' height=\"150\" width=\"170\" align=\"right\";><div>");
				break;
				Case 4: 
					echo "<br><br><br><br><br><br>";
					printf( "<div> <p style= \"text-align: center;\">Su peso no es correcto</p></div>");
					echo "<br>";
					echo "<br>";
					echo "<div style= \"text-align: center;\"><button type=submit><a href= ../../CapaUsuario/Administracion/Registro.php>Volver</button></div>";
					printf("<div class=\"errores\"><img src='..\..\Lib\imagenes\Error.png' height=\"150\" width=\"170\" align=\"right\";><div>");
				break;
				Case 5: 
					echo "<br><br><br><br><br><br>";
					printf( "<div> <p style= \"text-align: center;\">Asegurese de que la altura o el peso sean correctos</p></div>");
					echo "<br>";
					echo "<br>";
					echo "<div style= \"text-align: center;\"><button type=submit><a href= ../../CapaUsuario/Usuario/Usuario.php>Volver</button></div>";
					printf("<div class=\"errores\"><img src='..\..\Lib\imagenes\Error.png' height=\"150\" width=\"170\" align=\"right\";><div>");
				break;
				Case 6: 
					echo "<br><br><br><br><br><br>";
					printf( "<div> <p style= \"text-align: center;\">El ID que ha insertado no es válido, asegurese que el ejercicio seleccionado se encuentra en su entrenamiento</p></div>");
					echo "<br>";
					echo "<br>";
					echo "<div style= \"text-align: center;\"><button type=submit><a href= ../../CapaUsuario/Administrador/Usuarios.php>Volver</button></div>";
					printf("<div class=\"errores\"><img src='..\..\Lib\imagenes\Error.png' height=\"150\" width=\"170\" align=\"right\";><div>");
				break;
				Case 7: 
					echo "<br><br><br><br><br><br>";
					printf( "<div> <p style= \"text-align: center;\">El usuario que quiere borrar no existe en el sistema</p></div>"); 
					echo "<br>";
					echo "<br>";
					echo "<div style= \"text-align: center;\"><button type=submit><a href= ../../CapaUsuario/Administrador/Usuarios.php>Volver</button></div>";
					printf("<div class=\"errores\"><img src='..\..\Lib\imagenes\Error.png' height=\"150\" width=\"170\" align=\"right\";><div>");
				break;
				Case 20: 
					echo "<br><br><br><br><br><br>";
					printf( "<div> <p style= \"text-align: center;\">Las contraseñas no coinciden</p></div>"); 
					echo "<br>";
					echo "<br>";
					echo "<div style= \"text-align: center;\"><button type=submit><a href= ../../CapaUsuario/Administracion/Registro.php>Volver</button></div>";
					printf("<div class=\"errores\"><img src='..\..\Lib\imagenes\Error.png' height=\"150\" width=\"170\" align=\"right\";><div>");
				break;
				default:
					echo "Se ha producido un error desconocido.";
					echo "<a href=\"../../CapaUsuario/login/login.php\" class=\"btn btn-success\">Volver</a>\n";
					printf("<div class=\"errores\"><img src='..\..\Lib\imagenes\Error.png' height=\"150\" width=\"170\" align=\"right\";><div>");
					break;
			}
			?>

		</div>
	</body>
</html>
<?php
//ULT. VEZ EDITADO: 3 DE JUNIO 2023
require_once("Actualizar_ejercicios.php");
session_start();

//AQUÍ SE MANDAN LOS DATOS DE LOS EJERCICIOS QUE SE VAN A EDITAR CONOCIENDO SU ID. 

$Edicion = new Ejercicios;
comprobarDatos($Edicion);
#Para conocer cual ejercicio que se va a editar.

	if($_SESSION['Usuario']== 'Admin')
	{
		$ID= $_POST["EJERCICIO_ID"];
	}

#Debemos asegurar la seguridad de que los datos introducidos sean válidos a la hora de editar los ejercicios desde la zona de código php

	if(isset($_POST['Aceptar1']))
	{
		if($_POST['EJERCICIO_ID']<26 AND is_numeric($_POST['EJERCICIO_ID'])){
			$Edicion->Editar_ejercicio($ID);
			header("Location: ../../CapaUsuario/Entrenos/Entreno1.php");}
		else{ 
			header("Location: ../Errores/errores.php?errcode=6");}
	}
	else if(isset($_POST['Aceptar2']))
	{
		if($_POST['EJERCICIO_ID']<26 AND is_numeric($_POST['EJERCICIO_ID'])){
			$Edicion->Editar_ejercicio($ID);
			header("Location: ../../CapaUsuario/Entrenos/Entreno2.php");}	
		else{ 
			header("Location: ../Errores/errores.php?errcode=6");}
	}
	else if(isset($_POST['Aceptar3']))
	{
		if($_POST['EJERCICIO_ID']<26 AND is_numeric($_POST['EJERCICIO_ID'])){
			$Edicion->Editar_ejercicio($ID);
			header("Location: ../../CapaUsuario/Entrenos/Entreno3.php");}	
		else{ 
			header("Location: ../Errores/errores.php?errcode=6");}
	}
	else if(isset($_POST['Aceptar4']))
	{
		if($_POST['EJERCICIO_ID']<26 AND is_numeric($_POST['EJERCICIO_ID'])){
			$Edicion->Editar_ejercicio($ID);
			header("Location: ../../CapaUsuario/Entrenos/Entreno4.php");}	
		else{ 
			header("Location: ../Errores/errores.php?errcode=6");}
	}
	else if(isset($_POST['Aceptar5']))
	{
		if($_POST['EJERCICIO_ID']<26 AND is_numeric($_POST['EJERCICIO_ID'])){
			$Edicion->Editar_ejercicio($ID);
			header("Location: ../../CapaUsuario/Entrenos/Entreno5.php");}	
		else{ 
			header("Location: ../Errores/errores.php?errcode=6");}
	}
	else if(isset($_POST['Aceptar6']))
	{
		if($_POST['EJERCICIO_ID']<26 AND is_numeric($_POST['EJERCICIO_ID'])){
			$Edicion->Editar_ejercicio($ID);
			header("Location: ../../CapaUsuario/Entrenos/Entreno6.php");}	
		else{ 
			header("Location: ../Errores/errores.php?errcode=6");}
	}


	function comprobarDatos (&$ObjetoUser)
	{			//Si recibe datos los añade (isset ve que haya insertado datos en el campo).
			if (isset ($_POST["Nombre"]))
				$ObjetoUser->setNombre_ejercicio($_POST["Nombre"]);
			if (isset ($_POST["Tipo"]))
				$ObjetoUser->setTipo($_POST["Tipo"]);
			if (isset ($_POST["Descripcion"]))
				$ObjetoUser->setDescripcion($_POST["Descripcion"]);
			if (isset ($_POST["Repeticiones"]))
				$ObjetoUser->setRepeticiones ($_POST["Repeticiones"]);
	}
?>
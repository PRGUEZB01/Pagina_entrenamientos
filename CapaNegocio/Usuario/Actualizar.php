<?php
//ULT. VEZ EDITADO: 3 DE JUNIO 2023
require_once("../../CapaNegocio/Usuario/pruebaregistro.php");
require_once("../../lib/CapaBD/AccesoBD.php");
session_start();

//CUANDO EL USUARIO ACTUALIZA EL PESO, ALTURA Y CATEGORÍA.

$Nuevosdatos= new Usuarios();

		$Peso = $_POST['Pesonuevo'];
		$Nuevosdatos->setPeso($Peso);
		
		$Altura = $_POST['Alturanueva'];
		$Nuevosdatos->setAltura($Altura);
		
		$IMC_ID = $Peso/(($Altura/100)^2);
		$Nuevosdatos->setIMC_ID($IMC_ID);
		
		$TEntreno = $_POST['Entrenonuevo'];
		$Nuevosdatos->setEntreno($TEntreno);
		
		#Nueva asignación de ID del entreno a seguir. 
		
		if($IMC_ID<=18 and $TEntreno=='Perder'){
		$Nuevosdatos->setENTRENO_ID(1);}
		else if($IMC_ID<=18 and $TEntreno=='Ganar'){
		$Nuevosdatos->setENTRENO_ID(2);}
		else if($IMC_ID>18 and  $IMC_ID <=20 and $TEntreno=='Perder'){
		$Nuevosdatos->setENTRENO_ID(3);}
		else if ($IMC_ID>18 and  $IMC_ID <=20 and $TEntreno=='Ganar'){
		$Nuevosdatos->setENTRENO_ID(4);}
		else if($IMC_ID>20 and $TEntreno=='Perder'){
		$Nuevosdatos->setENTRENO_ID(5);}
		else if($IMC_ID>20 and $TEntreno=='Ganar'){
		$Nuevosdatos->setENTRENO_ID(6);}	
	
	if(isset($_POST['Actualizar'] ) AND ($_REQUEST['Alturanueva']>250 OR $_REQUEST['Pesonuevo']>250))
		{
			header("Location: ../Errores/errores.php?errcode=5");
		}
	else if(isset($_POST['Actualizar'] ) AND $_REQUEST['Pesonuevo']<250 AND $_REQUEST['Alturanueva']<250)
		{
		$Nuevosdatos->ActualizarEntreno();
		header("Location: ../../CapaUsuario/Usuario/Usuario.php");
		}
		
?>
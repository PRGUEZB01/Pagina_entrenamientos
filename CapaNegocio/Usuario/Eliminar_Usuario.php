<?php
//ULT. VEZ EDITADO: 4 DE JUNIO 2023
require_once("../../CapaNegocio/Usuario/pruebaregistro.php");
require_once("../../lib/CapaBD/AccesoBD.php");
session_start();

//PARA CUANDO EL USUARIO SELECCIONA QUE QUIERE ELIMINAR SU CUENTA.
//PARA CUANDO EL ADMINISTRADOR QUIERE ELIMINAR UN USUARIO(tiene que insertar su nombre de usuario)


   #EL USUARIO

	if(isset($_POST['Aceptar'])){
		$User= new Usuarios ();
		$Usuario_session=$_SESSION[Usuario];
		$User->setUsuario($Usuario_session);
		$User->deleteUsuario();
		header("Location: ../../index.php");
	}
	
	#EL ADMINISTRADOR
	
	if(isset($_POST['Aceptar_admin'])  AND  isset($_REQUEST['Usuario']))
	{
		$User= new Usuarios ();
		$User->setUsuario($_REQUEST["Usuario"]);
		$usuario = $_REQUEST['Usuario'];
		if ($User->Existe_Nombre_Usuario())
		{
			$User->deleteUsuario();
			header("Location: ../../CapaUsuario/Administrador/Usuarios.php");
		}
		else if ($User->Existe_Nombre_Usuario()==FALSE)
		{
			header("Location: ../Errores/errores.php?errcode=7");
		}
	}
	
?>
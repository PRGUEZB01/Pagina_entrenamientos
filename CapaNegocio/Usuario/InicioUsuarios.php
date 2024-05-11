<?php
//ULT. VEZ EDITADO: 3 DE JUNIO 2023
require ('../../Lib/CapaBD/config.php');
require ('pruebaregistro.php');

#Para cuando los usuarios inician sesión en la web.

session_start();

$userinicio= new Usuarios();
comprobarDatos ($userinicio);
//Para el inicio de sesión
print_r($userinicio);
if ($userinicio->Existe_Usuario() && $userinicio->getUsuario() !="Admin")
{
	#Los valores aseignados a las variables de sessión se van a utilizar en el codigo del Usuario y Administración. 
	$_SESSION['Usuario']= $userinicio->getUsuario();
	$E=$userinicio->asignaID();
	$_SESSION['Validar']=$userinicio->asignaValidar();
	$_SESSION['Entreno']=$E[1];
	$_SESSION['ENTRENO_ID']=$E[0];
	header("Location:../../CapaUsuario/Usuario/MenuUsuario.php");
}
if ($userinicio->Existe_Usuario() && $userinicio->getUsuario() =="Admin")
{
	$_SESSION['Usuario']= "Admin";
	//echo("2");
	header("Location:../../CapaUsuario/Administrador/Usuarios.php");
}
else if ($userinicio->Existe_Usuario()==FALSE) #Se puso false pues salía un error si no. 
{
	//echo("3");
	header("Location: ../Errores/errores.php?errcode=0");
}


function comprobarDatos (&$ObjetoUser)
	{	
if (isset ($_REQUEST["Usuario"]))
				$ObjetoUser->setUsuario ($_REQUEST["Usuario"]);
if (isset ($_REQUEST["Password"]))
				$ObjetoUser->setPassword (MD5($_REQUEST["Password"]));

}


?>
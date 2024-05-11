<?php
//ULT. VEZ EDITADO: 3 DE JUNIO 2023
require_once("pruebaregistro.php");
session_start();

//PARA QUE EL USUARIO PUEDA CAMBIAR SU CONTRASEÑA UNA VEZ EL ADMINISTRADOR SE LO PERMITA. 

$User= new Usuarios();

	#PARA EL USUARIO.

	if(isset($_POST['Aceptar1'])){
		$User->setValidar(1);
		$User->setUsuario($_SESSION["Usuario"]);
		$User->update();
		$_SESSION['Validar']= 1;
		  header("Location:../../CapaUsuario/Usuario/Usuario.php");
		}
		
	if(isset($_POST['Aceptar2'])){
		$User->setValidar(5);
		$User->setUsuario($_SESSION["Usuario"]);
		$User->setPassword(md5($_POST['oldpassword']));
		$Password=md5($_POST['oldpassword']);
		if($User->ComprobarAntiguaContraseña())
		{
			$User->update();
			$_SESSION['Validar']= 5;
			//echo("1");
			header("Location:../../CapaUsuario/Usuario/Usuario.php"); 
		}
		else
		{
			header("Location:../../CapaUsuario/Usuario/Usuario.php"); 
			//echo("2");
		}
		
		  //$cadena_consulta= "UPDATE `registro` SET `Password`=md5('$_POST[NewPassword]') AND `Validar`='$Validar' WHERE `Usuario`='$_SESSION[Usuario]'";
		  //$cadena_consulta= "UPDATE registro SET Password=md5('".$_POST['NewPassword']."') AND Validar=".$Validar." WHERE Usuario='".$_SESSION['Usuario']."'";
		  //$cadena_consulta= "UPDATE `registro` SET `Password`=md5(\"$_POST[NewPassword]\"), Validar= ".$Validar." WHERE `Usuario`='pabrodbar' "; 
	}
		
	if(isset($_POST['Denegado'])){
		$User->setValidar(0);
		$User->setUsuario($_SESSION["Usuario"]);
		$User->update();
		$_SESSION['Validar']= 0;
		  header("Location:../../CapaUsuario/Usuario/Usuario.php");
		}
		
		if(isset($_POST['Aceptar5'])){
		$User->setValidar(0);
		$User->setUsuario($_SESSION["Usuario"]);
		$User->setPassword(md5($_POST['newpassword1']));
		if($_POST['newpassword1']==$_POST['newpassword2'])
		{
		$_SESSION['Validar']= 0;
		$Password=md5($_POST['newpassword1']);
		$User->Resetear_Password();
		//echo("3");
			header("Location:../../CapaUsuario/Usuario/Usuario.php");
		}
	else if ($_POST['newpassword1']!=$_POST['newpassword2']){
		//echo("4");
		header("Location:../../CapaUsuario/Usuario/Usuario.php");
	}
		}
		
	#PARA EL ADMINISTRADOR.
	
	if(isset($_POST['Aceptar3'])){
		$User->setValidar(2);
		$User->setUsuario($_POST['Aceptar3']);
		$User->update();
		$_SESSION['Validar']= 2;
		 header("Location:../../CapaUsuario/Administrador/Usuarios.php");
		}
	if(isset($_POST['Cancelar3'])){
		$User->setValidar(3);
		$Usuario=$_POST['Cancelar3'];
		$User->setUsuario($Usuario);
		$User->update();
		$_SESSION['Validar']= 3;
		 header("Location:../../CapaUsuario/Administrador/Usuarios.php");
		}

?>
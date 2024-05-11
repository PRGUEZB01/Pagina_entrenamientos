<?php
//ULT. VEZ EDITADO: 3 DE JUNIO 2023
require_once("pruebaregistro.php");
session_start();
		
	//PARA CUANDO LOS USUARIOS SE REGISTRAN POR PRIMERA VEZ EN EL SISTEMA.
	
	$ObjetoUser= new Usuarios();
	
	//Quiero asignar a las variables de session el valor 
	$Nombre = $_REQUEST['Nombre'];
	$Primer_apellido = $_REQUEST['Primer_apellido'];
	$Segundo_apellido = $_REQUEST['Segundo_apellido'];
	$Email = $_REQUEST['Email'];
	$Usuario = $_REQUEST['Usuario'];
	$Password =$_REQUEST['Password1'];
	$Peso = $_REQUEST['Peso'];
	$altura = $_REQUEST['Altura'];
	$IMC = $Peso/(($altura/100)^2);
	$Entreno = $_REQUEST['Entreno'];
	$Validar=0;
	//Añado s las variables de session los valores
	$_SESSION['Nombre']= $Nombre;
	$_SESSION['Primer_apellido']= $Primer_apellido;
	$_SESSION['Segundo_apellido']= $Segundo_apellido;
	$_SESSION['Email']= $Email;
	$_SESSION['Usuario']= $Usuario;
	$_SESSION['Password']= $Password;
	$_SESSION['Peso']= $Peso;
	$_SESSION['Altura']= $altura;
	$_SESSION['IMC_ID']= $IMC;
	$_SESSION['Entreno']= $Entreno;
	$_SESSION['Validar']= $Validar;
	
	if($IMC<=18 and $Entreno=='Perder'){
		$_SESSION['ENTRENO_ID']=1;
		$ObjetoUser->setENTRENO_ID(1);
		}
		else if($IMC<=18 and $Entreno=='Ganar')
		{
		$_SESSION['ENTRENO_ID']=2;
		$ObjetoUser->setENTRENO_ID(2);
		}
		else if($IMC>18 and  $IMC <=20 and $Entreno=='Perder')
		{
		$_SESSION['ENTRENO_ID']=3;
		$ObjetoUser->setENTRENO_ID(3);
		}
		else if ($IMC>18 and  $IMC <=20 and $Entreno=='Ganar')
		{
		$_SESSION['ENTRENO_ID']=4;
		$ObjetoUser->setENTRENO_ID(4);
		}
		else if($IMC>20 and $Entreno=='Perder'){
		$_SESSION['ENTRENO_ID']=5;
		$ObjetoUser->setENTRENO_ID(5);
		}
		else if($IMC>20 and $Entreno=='Ganar'){
		$_SESSION['ENTRENO_ID']=6;
		$ObjetoUser->setENTRENO_ID(6);
		}	
	
	comprobarDatos ($ObjetoUser);

//Registro	
	if ($ObjetoUser->Existe_Nombre_Usuario())
	{
		
		header("Location: ../Errores/errores.php?errcode=1");
		//echo("1");
	}
	else if ($_REQUEST['Altura']>250 AND $ObjetoUser->Existe_Usuario()==FALSE )
	{
		header("Location: ../Errores/errores.php?errcode=3");
	}
	else if ($_REQUEST['Peso']>250 AND $ObjetoUser->Existe_Usuario()==FALSE )
	{
		
		header("Location: ../Errores/errores.php?errcode=4");
		
	}
	else if ($_REQUEST['Password1']!=$_REQUEST['Password2'])
	{
		header("Location: ../Errores/errores.php?errcode=20");
	}
	else if ($_REQUEST['Password1']==$_REQUEST['Password2']){
		
		$ObjetoUser->Insertarusuario();
		$_SESSION["Usuario"]=$Usuario;
		//header("Location: ../../CapaUsuario/Usuario/MenuUsuario.php");
		
	}
	
	
	function comprobarDatos (&$ObjetoUser)
	{			//Si recibe datos los añade (isset ve que haya insertado datos en el campo).
			if (isset ($_REQUEST["Nombre"]))
				$ObjetoUser->setNombre($_REQUEST["Nombre"]);
			if (isset ($_REQUEST["Primer_apellido"]))
				$ObjetoUser->setPrimer_apellido($_REQUEST["Primer_apellido"]);
			if (isset ($_REQUEST["Segundo_apellido"]))
				$ObjetoUser->setSegundo_apellido($_REQUEST["Segundo_apellido"]);
			if (isset ($_REQUEST["Email"]))
				$ObjetoUser->setCorreo ($_REQUEST["Email"]);
			if (isset ($_REQUEST["Usuario"]))
				$ObjetoUser->setUsuario ($_REQUEST["Usuario"]);
			if (isset ($_REQUEST["Password1"]))
				$ObjetoUser->setPassword (MD5($_REQUEST["Password1"]));
			if (isset ($_REQUEST["Peso"]))
				$ObjetoUser->setPeso($_REQUEST["Peso"]);
			if (isset ($_REQUEST["Altura"]))
				$ObjetoUser->setAltura ($_REQUEST["Altura"]);
			if (isset ($_REQUEST["Peso"]))
				$ObjetoUser->setIMC_ID ($_REQUEST["Peso"]/(($_REQUEST["Altura"]/100)^2));
			if (isset ($_REQUEST["Entreno"]))
				$ObjetoUser->setEntreno ($_REQUEST["Entreno"]);
	}

		
?>

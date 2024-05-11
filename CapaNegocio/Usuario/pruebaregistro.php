<?php
//ULT. VEZ EDITADO: 3 DE JUNIO 2023
require_once("../../Lib/CapaBD/AccesoBD.php");
//Este es un fichero de prueba creado por Pablo el 30 de Abril 

class Usuarios
{
	private $Nombre;
	private $Primer_apellido;
	private $Segundo_apellido;
	private $correo;
	private $Usuario;
	private $Password;
	private $Peso;
	private $Altura;
	private $IMC_ID;
	private $Entreno;
	private $ENTRENO_ID;
	private $Validar;

	function __construct($Nombre = 0, $Primer_apellido = 0, $Segundo_apellido= 0, $correo = 0, $Usuario = 0, $Password = 0, $Peso = 0, $Altura=0, $IMC_ID=0, $Entreno=0, $ENTRENO_ID=0, $Validar=0) {
		
		$this -> Nombre = $Nombre;
		$this -> Primer_apellido = $Primer_apellido;
		$this -> Segundo_apellido = $Segundo_apellido;
		$this -> correo = $correo;
		$this -> Usuario = $Usuario;
		$this -> Password = $Password;
		$this -> Peso = $Peso;
		$this -> Altura = $Altura;
		$this -> IMC_ID = $IMC_ID;
		$this-> Entreno = $Entreno;
		$this-> ENTRENO_ID = $ENTRENO_ID;
		$this-> Validar = $Validar;
	}

Public function getNombre(){return $this->Nombre;}
Public function getPrimer_apellido(){return $this->Primer_apellido;}
Public function getSegundo_apellido(){return $this->Segundo_apellido;}
Public function getcorreo(){return $this->correo;}
Public function getPeso(){return $this->Peso;}
Public function getAltura(){return $this->Altura;}
Public function getUsuario(){return $this->Usuario;}
Public function getPassword(){return $this->Password;}
Public function getIMC_ID(){return $this->IMC_ID;}
Public function getEntreno() {return $this->Entreno;}
Public function getENTRENO_ID() {return $this->ENTRENO_ID;}
Public function getValidar() {return $this->Validar;}
Public function setNombre($newVal){$this->Nombre = $newVal;}
Public function setPrimer_apellido($newVal){$this->Primer_apellido = $newVal;}
Public function setSegundo_apellido($newVal){$this->Segundo_apellido = $newVal;}
Public function setcorreo($newVal){$this->correo = $newVal;}
Public function setPeso($newVal){$this->Peso = $newVal;}
Public function setAltura($newVal){$this->Altura = $newVal;}
Public function setUsuario($newVal){$this->Usuario = $newVal;}
Public function setPassword($newVal){$this->Password = $newVal;}
Public function setIMC_ID($newVal){$this->IMC_ID = $newVal;}
Public function setEntreno($newVal){$this->Entreno = $newVal;}
Public function setENTRENO_ID($newVal){$this->ENTRENO_ID = $newVal;}
Public function setValidar($newVal){$this->Validar = $newVal;}

//TODAS LAS FUNCIONES SE ENCUENTRAN EXPLICADAS EN LA FASE 3 DEL ENTERPRISE.

	public function Existe_Usuario ()
       {
		   $bd= new baseDatos();
		   $bd->ConectarBD();
           $cadena_consulta="SELECT * FROM `registro` WHERE `Usuario`='".$this->Usuario."' AND Password='".$this->Password."' ";
           //echo($cadena_consulta);
           
           $bd->LanzarConsulta($cadena_consulta); 
			//echo($bd->NumeroRegistros());		   
           if ($bd->NumeroRegistros()>0)
           
            $salida=true;
           else
               $salida=false;
           $bd->Desconectar();
           return $salida;           
     }
	   
	   
	public function Existe_Nombre_Usuario(){
		  $bd= new baseDatos();
		   $bd->ConectarBD();
           $cadena_consulta="SELECT * FROM `registro` WHERE `Usuario`='".$this->Usuario."'";
           $bd->LanzarConsulta($cadena_consulta); 	   
           if ($bd->NumeroRegistros()>0)
            $salida=true;
           else
               $salida=false;
           $bd->Desconectar();
           return $salida; 
	 } 
	  
	  
	public function Insertarusuario()
       {
           $bd= new baseDatos();
           $bd->ConectarBD();
           
			$cadena_consulta="INSERT INTO `registro`(`Nombre`, `PrimerApellido`, `SegundoApellido`, `Correo`, `Usuario`, `Password`, `Peso`, `Altura`, `IMC_ID`, `Entreno`, `ENTRENO_ID`,`Validar`)
	VALUES ('".$this->Nombre."','".$this->Primer_apellido."','".$this->Segundo_apellido."','".$this->correo."','".$this->Usuario."','".$this->Password."','".$this->Peso."','".$this->Altura."','".$this->IMC_ID."','".$this->Entreno."','".$this->ENTRENO_ID."', '0')";
           echo($cadena_consulta);
			$bd->LanzarConsulta($cadena_consulta);
           $bd->Desconectar();
       }
	   
	   
	#Para restablecer la contraseña del usuario.
	  
	public function Resetear_Password(){
		  $bd= new baseDatos();
		    $bd->ConectarBD();
		  $cadena_consulta= "UPDATE `registro` SET `Password`='".$this->Password."' , Validar='".$this->Validar."'  WHERE `Usuario`='$_SESSION[Usuario]'";
		  $bd->LanzarConsulta($cadena_consulta);
		  //echo($cadena_consulta);
		  $bd->Desconectar();
	}
	  
	  
	public function update(){
		   $bd= new baseDatos();
		    $bd->ConectarBD();
		  $cadena_consulta= "UPDATE `registro` SET `Validar`='".$this->Validar."' WHERE `Usuario`='".$this->Usuario."'";
		  $bd->LanzarConsulta($cadena_consulta);
		  $bd->Desconectar();
	}
	  
	  
	public function ActualizarEntreno(){
	  $cadena_usuario= "UPDATE `registro` SET `Peso`='".$this->Peso."',`Altura`='".$this->Altura."',`IMC_ID`='".$this->IMC_ID."',`Entreno`='".$this->Entreno."',`ENTRENO_ID`='".$this->ENTRENO_ID."'  WHERE `Usuario` = '$_SESSION[Usuario]'";
		$E6= new baseDatos();
		$E6->ConectarBD();
		$E6->LanzarConsulta($cadena_usuario);
		$E6->Desconectar();
	}
	  
	  
	public function deleteUsuario(){
		  $cadena_usuario= "DELETE FROM `registro` WHERE `Usuario` = '".$this->Usuario."'";
		$E6= new baseDatos();
		$E6->ConectarBD();
		$E6->LanzarConsulta($cadena_usuario);
		$E6->Desconectar();
	}
		
	  #Función para imprimir en MenuUsuario.php los ejercicios del entreno.
	public function Entreno(){
		$bd= new baseDatos();
		$bd->ConectarBD();
		$cadena_consulta= "SELECT `ENTRENO_ID` FROM `registro` WHERE Usuario='".$this->Usuario."'";
		$bd->LanzarConsulta($cadena_consulta);
		$Obj=$bd->getObjeto();
		  
		  If($Obj->ENTRENO_ID==1){
			$cadena_consulta= "SELECT * FROM ejercicios WHERE `ENTRENO_ID` = '1'";	
		    }
			If($Obj->ENTRENO_ID==2){
			$cadena_consulta = "SELECT * FROM ejercicios WHERE `ENTRENO_ID` = '2'";	
			}
			If($Obj->ENTRENO_ID==3){
			$cadena_consulta = "SELECT * FROM ejercicios WHERE `ENTRENO_ID` = '3'";	
			}
			If($Obj->ENTRENO_ID==4){
			$cadena_consulta = "SELECT * FROM ejercicios WHERE `ENTRENO_ID` = '4'";	
			}
			If($Obj->ENTRENO_ID==5){
		    $cadena_consulta= "SELECT * FROM ejercicios WHERE `ENTRENO_ID` = '5'";
			}
			If($Obj->ENTRENO_ID==6){
			$cadena_consulta = "SELECT * FROM ejercicios WHERE `ENTRENO_ID` = '6'";	
			}
			
		$E5= new baseDatos();
		$E5->ConectarBD();
		$E5->LanzarConsulta($cadena_consulta);
		$Cadena="";
			#Vector getObjeto, contiene las 5 filas con las columnas de los ejercicio de la base de datos, se recorre 
			#columna a columna con un While
			while($E5p=$E5->getObjeto())
			{
				$Cadena= $Cadena .'<tr>';
				$Cadena=$Cadena.'<td>'.$E5p->Nombre_ejercicio.'</td>';
			    $Cadena=$Cadena.'<td>'.$E5p->Descripcion.'</td>';
				$Cadena=$Cadena.'<td>'.$E5p->Tipo.'</td>';
				$Cadena=$Cadena.'<td>'.$E5p->Repeticiones.'</td>';
				$Cadena=$Cadena.'</tr>';
			}
		$Cadena= $Cadena. "";
		printf($Cadena);
			
		$E5->Desconectar();
		  #echo($Obj->IMC_ID);
		  #echo($Obj->Entreno);
	}
	
	
	 #Funcion que se llama desde los archivos de Capausuario/Entrenos para imprimir de forma general los ejercicios de los entrenamientos.
	 
	public function Imprimir_entreno($ID){
		  $bd= new baseDatos();
		  $bd->ConectarBD();
		  $cadena_consulta= "SELECT * FROM `ejercicios` WHERE `ENTRENO_ID` = '".$ID."'";
		  $bd->LanzarConsulta($cadena_consulta);
		  $Cadena="";
		  while($Obj=$bd->getObjeto())
			{
				$Cadena= $Cadena .'<tr>';
				$Cadena=$Cadena.'<td>'.$Obj->Nombre_ejercicio.'</td>';
			    $Cadena=$Cadena.'<td>'.$Obj->Descripcion.'</td>';
				$Cadena=$Cadena.'<td>'.$Obj->Tipo.'</td>';
				$Cadena=$Cadena.'<td>'.$Obj->Repeticiones.'</td>';
				$Cadena=$Cadena.'<td>'.$Obj->EJERCICIO_ID.'</td>';
				$Cadena=$Cadena.'</tr>';
			}
			$Cadena= $Cadena. "";
			printf($Cadena);
			$bd->Desconectar();
	}
	  
	  
	  
	public function Usuario(){
			$cadena_usuario= "SELECT * FROM registro WHERE `Usuario` = '$_SESSION[Usuario]'";
			$E6= new baseDatos();
		    $E6->ConectarBD();
			$E6->LanzarConsulta($cadena_usuario);
			$Us="";
			
			while($E6p=$E6->getObjeto())
			{
				$Us= $Us .'<tr>';
				$Us=$Us.'<td>'.$E6p->Nombre.'</td>';
			    $Us=$Us.'<td>'.$E6p->PrimerApellido.'</td>';
				$Us=$Us.'<td>'.$E6p->SegundoApellido.'</td>';
				$Us=$Us.'<td>'.$E6p->Correo.'</td>';
				$Us=$Us.'<td>'.$E6p->Usuario.'</td>';
				$Us=$Us.'<td>'.$E6p->Peso.'</td>';
				$Us=$Us.'<td>'.$E6p->Altura.'</td>';
				$Us=$Us.'<td>'.$E6p->IMC_ID.'</td>';
				$Us=$Us.'<td>'.$E6p->Entreno.'</td>';
				$Us=$Us.'</tr>';
			}
			$Us= $Us. "";
			printf($Us);
			$E6->Desconectar();
	}
		
		
	#Mostrará los botones en función de si ese usuario le dió a restablecer contraseña (Validar==1)

	public function Admin(){
			$cadena_usuario= "SELECT * FROM `registro` WHERE NOT `Usuario`='Admin'";
			$E7= new baseDatos();
		    $E7->ConectarBD();
			$E7->LanzarConsulta($cadena_usuario);
			$a=0;
			$e=0;
			$Us="";
			while($E7p=$E7->getObjeto())
			{
				$Us= $Us .'<tr>';
				$Us=$Us.'<td>'.$E7p->Nombre.'</td>';
			    $Us=$Us.'<td>'.$E7p->PrimerApellido.'</td>';
				$Us=$Us.'<td>'.$E7p->SegundoApellido.'</td>';
				$Us=$Us.'<td>'.$E7p->Correo.'</td>';
				$Us=$Us.'<td>'.$E7p->Usuario.'</td>';
				$Us=$Us.'<td>'.$E7p->Peso.'</td>';
				$Us=$Us.'<td>'.$E7p->Altura.'</td>';
				$Us=$Us.'<td>'.$E7p->IMC_ID.'</td>';
				$Us=$Us.'<td>'.$E7p->Entreno.'</td>';
				if ($E7p->Validar==1){
					$Us=$Us.'<form method="post" action="../../CapaNegocio/Usuario/RestablecimientoContrasena.php">';
					$Us=$Us.'<td style= "text-align: center;"> <button class="boton2" type="submit" name="Aceptar3" value='.$E7p->Usuario.'><a>Validar</button></td>';
					$Us=$Us.'<td style= "text-align: center;"> <button class="boton3" type="submit" name="Cancelar3" value='.$E7p->Usuario.'><a>Denegar</button></td>';
					$Us=$Us.'</form>';}
				else {
					$Us=$Us.'<td colspan="2"> </td>';
				}
				$Us=$Us.'</tr>';
				if($E7p->ENTRENO_ID==2 or $E7p->ENTRENO_ID==4 or $E7p->ENTRENO_ID==6)
				{
					$a=1;
				} 
				if($E7p->ENTRENO_ID==1 or $E7p->ENTRENO_ID==3 or $E7p->ENTRENO_ID==5)
				{
					$e=1;
				}
				
			}
			$Us= $Us. "";
			printf($Us);
			return array($a, $e);
			$E7->Desconectar();
	}
		
		
	#Imprime en CapaUsuario/Administracion/ PLibre y/o Mancuernas .php los ejercicios del Tipo (Peso libre, mancuerna) del entreno correspondiente

	public function Tipos_entreno($TIPO, $ID_Entreno){
		  $bd= new baseDatos();
		  $bd->ConectarBD();
		  $cadena_consulta= "SELECT * FROM `ejercicios` WHERE `ENTRENO_ID` ='".$ID_Entreno."' AND `Tipo`='".$TIPO."'";
		  $bd->LanzarConsulta($cadena_consulta);
		  
		  $Cadena="";
		  while($Obj=$bd->getObjeto())
			{
				$Cadena= $Cadena .'<tr>';
				$Cadena=$Cadena.'<td>'.$Obj->Nombre_ejercicio.'</td>';
			    $Cadena=$Cadena.'<td>'.$Obj->Descripcion.'</td>';
				$Cadena=$Cadena.'<td>'.$Obj->Tipo.'</td>';
				$Cadena=$Cadena.'<td>'.$Obj->Repeticiones.'</td>';	
				$Cadena=$Cadena.'</tr>';	
			}
		$Cadena= $Cadena. "";
		printf($Cadena);
		$bd->Desconectar();	  
	 }
	  
	  
	#Para que la variabe de session de Validar cuando inicie sesión el usuario tome e valor de la BBDD. 
	  
	public function asignaValidar(){
		  $bd= new baseDatos();
		  $bd->ConectarBD();
		  $cadena_consulta="SELECT  `Validar` FROM `registro` WHERE `Usuario`='".$this->Usuario."'";
		  $bd->LanzarConsulta($cadena_consulta);
		  
		   while($Obj=$bd->getObjeto())
			{
		  
			$Valida= $Obj->Validar;
			}
		return($Valida);
		$bd->Desconectar();	
	}
	  
	  
	#Función que establece la categoría del entreno 
	  
	public function asignaEntreno(){
		  $Entreno="";
		  $bd= new baseDatos();
		  $bd->ConectarBD();
		  $cadena_consulta="SELECT  `ENTRENO_ID` FROM `registro` WHERE `Usuario`='".$this->Usuario."'";
		  $bd->LanzarConsulta($cadena_consulta);
		  
		  while($Obj=$bd->getObjeto()){
			$Entreno= $Obj->ENTRENO_ID;
		  }
		$BD= new baseDatos();
		$BD->ConectarBD();
		$Cadena_consulta= "SELECT  `Categoria` FROM `entrenamientos` WHERE `ENTRENO_ID`=".$Entreno."";
		$BD->LanzarConsulta($Cadena_consulta);
		
		$oBJ= $BD->getObjeto();
		$eNTRENO=$oBJ->Categoria;
		  return($eNTRENO);
		  $bd->Desconectar();
		  $BD->Desconectar();
		  }
		  
		  
	public function asignaID(){
		  $Entreno="";
		  $bd= new baseDatos();
		  $bd->ConectarBD();
		  $cadena_consulta="SELECT  `ENTRENO_ID`, Entreno FROM `registro` WHERE `Usuario`='".$this->Usuario."'";
		  $bd->LanzarConsulta($cadena_consulta);
		  while($Obj=$bd->getObjeto()){
		  $EntrenoID= $Obj->ENTRENO_ID;
		  $Entreno= $Obj->Entreno; }
			 $bd->Desconectar();
		return array($EntrenoID, $Entreno);
	}
	  
	  
	 #Uso del INNER JOIN
	 #Este par de funciones se han implementado para darle uso al Inner Join. Imprimen en Usuarios.php de la carpeta Administrador
	 #la categoría (perder/ganar peso) del entreno y el nombre de los usuarios para que el admin sepa quienes son con un vistazo rápido.
	  
	public function GanarPeso(){
		$bd= new baseDatos();
		$bd->ConectarBD();
		$cadena_consulta=" SELECT 
							registro.Usuario,
							entrenamientos.Categoria
							FROM
							entrenamientos
							INNER JOIN
							registro on registro.ENTRENO_ID = entrenamientos.ENTRENO_ID
							WHERE
							(entrenamientos.ENTRENO_ID=2 OR entrenamientos.ENTRENO_ID=4 OR entrenamientos.ENTRENO_ID=6) AND NOT registro.Usuario='Admin'";
		$bd->LanzarConsulta($cadena_consulta);
		
		$e="";
		$Cadena='<tr><td>Usuarios: </td></tr>';
		$Cadena=$Cadena.'<tr>';
		while($Obj=$bd->getObjeto()){
			$Cadena= $Cadena .'<tr>';
			$Cadena=$Cadena.'<td class="celdas">'.$Obj->Usuario.'   </td>';
			$Cadena=$Cadena.'</tr>';
			$e=$Obj->Categoria;
		}
		$Cadena= $Cadena. "";
			printf($Cadena);
			$bd->Desconectar();
		return ($e);
	}
	  
	  
	public function PerderPeso()
	  {
		$bd= new baseDatos();
		$bd->ConectarBD();
		$cadena_consulta=" SELECT 
							registro.Usuario,
							entrenamientos.Categoria
							FROM
							entrenamientos
							INNER JOIN
							registro on registro.ENTRENO_ID = entrenamientos.ENTRENO_ID
							WHERE
							(entrenamientos.ENTRENO_ID=1 OR entrenamientos.ENTRENO_ID=3 OR entrenamientos.ENTRENO_ID=5) AND NOT registro.Usuario='Admin'";
		$bd->LanzarConsulta($cadena_consulta);
		$Cadena="<tr><td>Usuarios: </td></tr>";
		$e="";
		while($Obj=$bd->getObjeto()){
			$Cadena= $Cadena .'<tr>';
			$Cadena=$Cadena.'<td class="celdas">'.$Obj->Usuario.'   </td>';
			$Cadena=$Cadena.'</tr>';
			$e=$Obj->Categoria;
		}
			$Cadena= $Cadena. "";
			printf($Cadena);
			$bd->Desconectar();
		return ($e);
	}
	  //Coinciden contraseñas antigüas. 
	 public function ComprobarAntiguaContraseña()
	 {
		 $bd= new baseDatos();
		$bd->ConectarBD();
		$cadena_consulta="SELECT `Password` FROM `registro` WHERE `Usuario`='".$this->Usuario."'";
		$bd->LanzarConsulta($cadena_consulta);
		//echo($cadena_consulta);
		while($Obj=$bd->getObjeto())
		{
			//echo($Obj->Password);
			if($this->Password==$Obj->Password)
			{
				 $salida=true;
			}
			else{
				 $salida=false;
			}
		}
		$bd->Desconectar();
		return  $salida;
		
	 }
	 
	  		 
}

?>
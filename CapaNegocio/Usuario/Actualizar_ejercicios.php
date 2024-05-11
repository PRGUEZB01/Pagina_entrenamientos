<?php
//ULT. VEZ EDITADO: 3 DE JUNIO 2023
require_once("../../Lib/CapaBD/AccesoBD.php");


	class Ejercicios
	{
	private $Descripcion;
	private $EJERCICIO_ID;
	private $Nombre_ejercicio;
	private $Tipo;
	private $Repeticiones;
	private $ENTRENO_ID;

	function __construct()
	{
	}

	function __destruct()
	{
	}

	public function getDescripcion(){return $this->Descripcion;}
	public function getEJERCICIO_ID(){return $this->EJERCICIO_ID;}
	public function getNombre_ejercicio(){return $this->Nombre_ejercicio;}
	public function getTipo(){return $this->Tipo;}
	public function getRepeticiones(){return $this->Repeticiones;}
	public function getENTRENO_ID(){return $this->ENTRENO_ID;}
	public function setDescripcion($newVal){$this->Descripcion = $newVal;}
	public function setEJERCICIO_ID(int $newVal){$this->EJERCICIO_ID = $newVal;}
	public function setNombre_ejercicio($newVal){$this->Nombre_ejercicio = $newVal;}
	public function setTipo($newVal){$this->Tipo = $newVal;}
	public function setRepeticiones($newVal){$this->Repeticiones = $newVal;}
	public function setENTRENO_ID($newVal){$this->ENTRENO_ID = $newVal;}

//TODAS LAS FUNCIONES SE ENCUENTRAN EXPLICADAS EN LA FASE 3 DEL ENTERPRISE.

	#Función actualizar ejercicios

	function Editar_ejercicio($Ejercicio)
	{
		$cadena= "UPDATE `ejercicios` SET `Nombre_ejercicio`='".$this->Nombre_ejercicio."',`Tipo`='".$this->Tipo."',`Descripcion`='".$this->Descripcion."',`Repeticiones`='".$this->Repeticiones."' WHERE `EJERCICIO_ID` = '".$Ejercicio."'";
		$bd= new baseDatos();
		$bd->ConectarBD();
		$bd->LanzarConsulta($cadena);
		$bd->Desconectar();
	}

}
?>
<?php
    require_once "config.php";
 
class BaseDatos
{
  
	private $dbname;
	private $user;
	private $password;
	private $dbh;
	private $stmt;
    
    // Definimos el constructor.
    public function __construct ()
    {
		$this->dbname=DBNAME;
		$this->user=USER;
		$this->password=PASS;
        $this->conectarBD();
    }
    public function setdbname($nombreBaseDatos)
	{
		
	}
    public function ConectarBD ()
	{
		$this->dbname=DBNAME;
		$this->user=USER;
		$this->password=PASS;
		try {
				$dsn = "mysql:host=localhost;dbname=$this->dbname";
				$this->dbh = new PDO($dsn, $this->user, $this->password);
				$this->dbh->exec("set names utf8");
			} catch (PDOException $e){
				echo $e->getMessage();
				}
	}	
	 public function LanzarConsulta ($cadena_sql)
    {        
        
        $this->stmt = $this->dbh->query($cadena_sql);		
		//$this->stmt->execute();
    }
    public function conectar()
    {
        $this->_conexion = mysql_connect(HOST, USER, PASS);
        if ($this->_conexion == 0) DIE("Lo sentimos, no se ha podido conectar con MySQL: " . mysql_error());
        $this->_db = mysql_select_db(DBNAME, $this->_conexion);
        if ($this->_db == 0) DIE("Lo sentimos, no se ha podido conectar con la base datos: " . DBNAME);        
         return true;
     }
    private function __clone(){ }
    
   
    public function desconectar()
    {
		$this->dbh=null;
    }

    
	 public function RegistrosConsulta ($nombreClase='')
    {
		if (empty($nombreClase))
			return $this->stmt->fetchAll(PDO::FETCH_OBJ);       
		else
			
		return $this->stmt->fetchAll(PDO::FETCH_CLASS,$nombreClase);       
    }
	public function getObjeto ()
    {
             $obj= $this->stmt->fetchObject(__CLASS__);
             return $obj;
    }
    public function NumeroRegistros ()
    {
		if ($this->stmt)
		return $this->stmt->rowCount();
        else 
		return 0;		
        
    }
 
    
}

?>
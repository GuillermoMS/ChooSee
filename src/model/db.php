<?php
	require_once('C:/xampp/htdocs/configure/routing.php');
	require_once(PATH_config);
	
	abstract class Abs_Conn {
		// Variales para la conexion con base de datos
		private static $srv=SERVER;
		private static $userSrv=USER_SRV;
		private static $passSrv=PASS_SRV;
		protected $nameBD='chsdb';
		private static $codeBD='utf8';
		private static $opcionesBD;
		protected $query;
		protected $rows = array();
		protected $flag = false;
		public $testBD = false;
		private $conexionBD;
		
		// Conexion a base de datos
		protected function conexion()
		{
			try{
				// Opciones de la conexion a la base de datos
				self::$opcionesBD = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".self::$codeBD);
				$this->conexionBD = new PDO('mysql:host='.self::$srv.';dbname='.$this->nameBD,self::$userSrv,self::$passSrv,self::$opcionesBD);
				$this->conexionBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->testBD = true; 
			}catch(PDOException $e){
				$this->testBD = false;
				die($e->getMessage(). "\n");	
			}
			return $this->conexionBD;
		}
		
		// Desconexion a base de datos
		private function desconexion()
		{
			$this->conexionBD=null;
		}

		// Devuelve un array con los datos solicitados. 
		protected function results_query(){
			$this->conexion();
			$result = $this->conexionBD->query($this->query);
			while ($this->rows[] = $result->fetch());
            $result = null;
			$this->desconexion();
		}
		
		// Devuelve true o false al modificar la base de datos. 
		protected function results_mod(){
			$this->conexion();
			if($numEow = $this->conexionBD->exec($this->query)>0)
				$this->flag = true;
			$this->desconexion();
		}			
	}


?>
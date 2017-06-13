<?php
	require_once('C:/xampp/htdocs/configure/routing.php');
	require_once(PATH_src_model.'/db.php');
	
	class Connection extends Abs_Conn{
		
		// Constructor.
		public function __construct(){
			$this->nameBD = 'chsdb';
			$this->codeBD = 'utf8';
		}

		public function get($sql){
			$this->query=$sql;
			$this->results_query();	
			return $this->rows;		
		}
		
		public function set($sql){
			$this->query=$sql;
			$this->results_mod();
			return $this->flag;	
	    }

	}
?>
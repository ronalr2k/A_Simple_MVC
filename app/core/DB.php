<?php

class DB
{
	private $database = _DATABASE;
	private $username = _USER;
	private $host			= _HOST;
	private $password = _PASSWORD;
	private $link;

	public function __construct ()
	{
		try{
			$this->link = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);	
		}catch(PDOException $e){
			$this->link = null;	
		}	
	}

	public function get ()
	{
		return $this->link;
	}
}

<?php

class DB
{
	private $database = DATABASE;
	private $username = USER;
	private $host			= HOST;
	private $password = PASSWORD;
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

<?php

class User extends Model
{
	private $id;
	private $name;

	public function get ($attr)
	{
		return $this->$attr;	
	}

	public function set ($attr, $value)
	{
		$this->$attr = $value;	
	}

	public function find ($id)
	{
		$response = [];

		$db = $this->link();
		$query = "select * from users where id={$id}";
		$statement = $db->prepare($query);
		$statement->execute();

		while($row = $statement->fetch(PDO::FETCH_OBJ))
		{
			array_push($response, $row);	
		}

		return $response;
	}
}

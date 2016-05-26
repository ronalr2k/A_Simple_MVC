<?php

class User extends Model
{
	private $id;
	private $name;
	private $password;

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
		$response = $statement->fetch(PDO::FETCH_OBJ);

		return $response;
	}

	public function save (array $user)
	{
		$response = null;

		$db = $this->link();
		$query = "insert into users (name, password) values (:name, :password)";
		$statement = $db->prepare($query);
		$statement->bindValue(':name', $user['name'] );
		$statement->bindValue(':password', $user['password'] );
		$flag = $statement->execute();
		if($flag === true)
		{
			$response = true;
		}

		return $response;

	}

	public function erase ()
	{
		//
	}

	public function all ()
	{
		$response = [];

		$db = $this->link();
		$query = "select * from users";
		$statement = $db->prepare($query);
		$statement->execute();

		while($row = $statement->fetch(PDO::FETCH_OBJ))
		{
			array_push($response, $row);	
		}

		return $response;
	}
}

<?php namespace Controllers;

class User extends \Controller
{
	public function show ($id)
	{
		$user = $this->model('User');
		$user = $user->find($id);
		echo "<pre>";
		print_r($user);
		echo "</pre>";
	}
}

<?php namespace Controllers;

class User extends \Controller
{  
  public function index ()
  {
	 $user = $this->model('User');
	 $users = $user->all();
	 echo "<pre>";
	 print_r($users);
	 echo "</pre>";
  }

  public function create ($name,$pass)
  {
	 $u = ['name' => $name, 'password' => $pass];
	 $user = $this->model('User'); 
	 $user = $user->save($u);
	 var_dump($user);
  }

  public function show ($id)
  {
	 $user = $this->model('User');
	 $user = $user->find($id);
	 echo "<pre>";
	 print_r($user);
	 echo "</pre>";
  }

  public function update ()
  {
	 //
  }

  public function edit ()
  {
	 // 
  }

  public function destroy ()
  {
	 // 
  }

}

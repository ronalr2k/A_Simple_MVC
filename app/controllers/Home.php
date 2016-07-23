<?php namespace Controllers;

class Home extends \Controller
{
  public function index ($name)
  {
	 $this->view('back/main', ['name' => $name]);
  }
  public function show ()
  {
	 echo "desde show home-controller"; 
  }
}

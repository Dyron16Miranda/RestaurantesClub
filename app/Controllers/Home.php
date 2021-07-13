<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('navbar-op');
		echo view('body-userhome');
		echo view('footer');
	}
}

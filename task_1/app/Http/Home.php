<?php
namespace App\Http;

use App\Lib\View;

class Home
{
	public function index()
	{
		View::render('home');
	}
}